<?php 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');

$pass=$_POST['pass'];
$pass=md5($pass);
$mob1 = $_POST['mob1'];



$heart=$_POST['heart'];
$kidney=$_POST['kidney'];
$eyes=$_POST['eyes'];

$image = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));


$g=$_SESSION["sess_user"];
$s = " select * from organ_donor where mailid = '$g' ";
$result = mysqli_query($con,$s);



	
	if($heart == true && $kidney == true && $eyes == true)
	{
			$reg="UPDATE organ_donor SET password='$pass',mob1='$mob1',heart='yes',kidney='yes',eyes='yes',image='$image' where mailid = '$g' ";
	mysqli_query($con, $reg);
	$mess="profile updated successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";     
    echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
	}
	elseif($heart == false && $kidney == false && $eyes == true)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',heart='no',kidney='no',eyes='yes',image='$image' where mailid = '$g'";
	mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == false)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',heart='no',kidney='yes',eyes='no',image='$image' where mailid = '$g'";
			mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == true)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',kidney='yes',eyes='yes',image='$image' where mailid = '$g'";
	mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == false)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',heart='yes',kidney='no',eyes='no',image='$image' where mailid = '$g'";
	mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	
	}
    elseif($heart == true && $kidney == true && $eyes == false)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',heart='yes',kidney='yes',eyes='no',image='$image' where mailid = '$g' ";
		mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == true)
	{
		$reg="update organ_donor set password='$pass',mob1='$mob1',heart='yes',kidney='no',eyes='yes',image='$image' where mailid = '$g' ";
		mysqli_query($con, $reg);
	$mess="Profile updated Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/organdonor.php'; </script>";
                    
        exit;
	}
	
	
	

?>
