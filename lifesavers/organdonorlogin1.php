<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$pass=$_POST['pass'];
echo"<script type='text/javascript'>alert('$pass');</script>";
$pass=md5($pass);
echo"<script type='text/javascript'>alert('$pass');</script>";
$email = $_POST['email'];
$s2 = " select * from approval where mailid = '$email'";
$result2 = mysqli_query($con,$s2);
$num2 = mysqli_num_rows($result2);
$s = " select * from organ_donor where mailid = '$email' and password = '$pass' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
$s1 = " select * from organ_donor where mailid = '$email' ";
$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);

if($num2 == true)
{
	$mess="Your registeration is in pending list";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organ.html'; </script>";
        exit;
}
elseif($num == true)
{
	
	$_SESSION['sess_user']=$email;
    $user=$_SESSION['sess_user'];

    header("location:organdonor.php");
	
}
else if($num1 == false)
{
	$mess="Register first";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/registerorgandonor.php'; </script>";
        exit;
}
else if($num1 == true)
{
	$mess="Incorrect password";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonorlogin.php'; </script>";
        exit;
	
}

?>

