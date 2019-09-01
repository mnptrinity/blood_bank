<?php

$pass=$_POST['pass'];
$email = $_POST['email'];
$email1="giri16bit062@gmail.com";
$pass1="babyboy@123";
if($email == $email1)
{
	if($pass == $pass1)
	{
	header("location:admin.php");
	}
	else
	{
		$mess="Incorrect password";
	    echo"<script type='text/javascript'>alert('$mess');</script>";
	    echo "<script> location.href='http://localhost/lifesavers/adminlogin.php'; </script>";
        exit;
	}
	
}
else
{
	$mess="Invalid user";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/adminlogin.php'; </script>";
        exit;
}


?>
