<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$pass=$_POST['pass'];
$pass=md5($pass);
$image = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));
$mob1 = $_POST['mob1'];


$ava = $_POST['available'];
$g=$_SESSION["sess_user"];
$s = " select * from blood_donor where mailid = '$g' ";
$result = mysqli_query($con,$s);



	

	$reg="UPDATE blood_donor SET password='$pass',mob1='$mob1',image='$image',Available='$ava' where mailid = '$g' ";
	mysqli_query($con, $reg);
	$mess="profile updated successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";     
    echo "<script> location.href='http://localhost/lifesavers/blooddonor.php'; </script>";
    
            
                    
        exit;
	

?>
