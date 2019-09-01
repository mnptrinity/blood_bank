<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$name = $_POST['name'];
$pass=$_POST['pass'];

$pass=md5($pass);
echo"<script type='text/javascript'>alert('$pass');</script>";
$age = $_POST['age'];
$mob1 = $_POST['mob1'];

$email = $_POST['email'];
$district = $_POST['district'];
$aadhar = $_POST['aadhar'];
$image1 = addslashes(file_get_contents($_FILES["files"]["tmp_name"]));
$blood = $_POST['blood'];
$heart=$_POST['heart'];
$kidney=$_POST['kidney'];
$eyes=$_POST['eyes'];
$s = " select * from organ_donor where mailid = '$email' ";
$s1 = " select * from approval where mailid = '$email' ";
$image = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);
if($num == true)
{
	$mess="Email already registered";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organdonorlogin.php'; </script>";
    exit;
	
}
elseif($num1 == true)
{
	$mess="Your approval is in pending";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
    exit;
	
}
else
{
	
	if($heart == true && $kidney == true && $eyes == true)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','yes','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','yes','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";        
                    
        exit;
	
	}
	elseif($heart == false && $kidney == false && $eyes == true)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','no','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','no','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == false)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','yes','no','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','yes','no','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == true)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','yes','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','no','yes','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == false)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','no','no','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','no','no','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	
	}
    elseif($heart == true && $kidney == true && $eyes == false)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','yes','no','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','yes','no','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == true)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','no','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','yes','no','yes','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	}
	elseif($heart == false && $kidney == false && $eyes == false)
	{
		$reg="insert into approval(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','0','0','0','$image','$image1')";
	mysqli_query($con, $reg);
	$reg="insert into organ_donor(name,password,age,mob1,mailid,aadhar,district,bloodgroup,heart,kidney,eyes,image,donorform) values ('$name','$pass','$age','$mob1','$email','$aadhar','$district','$blood','0','0','0','$image','$image1')";
	mysqli_query($con, $reg);
	$mess="Registered for approval";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organ.html'; </script>";
                    
        exit;
	}
	
	
}
?>
