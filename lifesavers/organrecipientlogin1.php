<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$pass=$_POST['pass'];
$pass=md5($pass);

$email = $_POST['email'];

$s = " select * from organ_recipient where mailid = '$email' and password = '$pass' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
$s1 = " select * from organ_recipient where mailid = '$email' ";
$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
if($num == true)
{
	
	$_SESSION['sess_user']=$email;
    $user=$_SESSION['sess_user'];

    header("location:organrecipient.php");
	
}
else if($num1 == false)
{
	$mess="Register first";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/registerorganrecipient.php'; </script>";
        exit;
}
else if($num1 == true)
{
	$mess="Incorrect password";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organrecipientlogin.php'; </script>";
        exit;
	
}

?>
