<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$pass=$_POST['pass'];


$email = $_POST['email'];
echo"<script type='text/javascript'>alert('$pass');</script>";
$pass=md5($pass);
echo"<script type='text/javascript'>alert('$pass');</script>";
$s = " select * from blood_donor where mailid = '$email' and password = '$pass' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
$s1 = " select * from blood_donor where mailid = '$email' ";
$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
if($num == true)
{
	
	
	 
    $_SESSION['sess_user']=$email;
    $user=$_SESSION['sess_user'];

    header("location:blooddonor.php");
	
}
else if($num1 == false)
{
	$mess="Register first";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/registerblood.php'; </script>";
        exit;
}
else if($num1 == true)
{
	$mess="Incorrect password";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/blooddonorlogin.php'; </script>";
        exit;
	
}

?>
