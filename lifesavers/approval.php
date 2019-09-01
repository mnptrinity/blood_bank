<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');



$s = "select * from approval";

$result = mysqli_query($con,$s);
while( $row = $result-> fetch_assoc())
{
$app=$_POST['accept'];
$den=$_POST['deny'];
$email=$row["mailid"];
$name=$row["name"];		

if($app == true)
{
	
	
	
	$reg="update organ_donor set approved='yes' where mailid='$email'";
	mysqli_query($con, $reg);
	 
	$reg1="delete from approval where mailid='$email'";
	mysqli_query($con, $reg1);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ donor....:)".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "giri16bit062@gmail.com";
            $mail ->Password = "babyboy@123";
            $mail ->SetFrom("giri16bit062@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);


            if($mail->Send())
             {
                 echo "<script>";
                 echo "alert('Mail Sent successfully....');";
                 echo "window.location.href='http://localhost/lifesavers/pendingrequest.php';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='http://localhost/lifesavers/pendingrequest.php';</script>";              
             }
                    
        exit;
	
	
	
	
	
}
elseif($den == true)
{
	
	$reg1="delete from approval where mailid='$email'";
	mysqli_query($con, $reg1);
	$reg1="delete from organ_donor where mailid='$email'";
	mysqli_query($con, $reg1);
	$mess="Removed Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your request for organ donor has denied due to some issues....:)".$name;
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            $mail ->SMTPDebug = 0;
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'ssl';
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 465; // or 587
            $mail ->IsHTML(true);
            $mail ->Username = "giri16bit062@gmail.com";
            $mail ->Password = "babyboy@123";
            $mail ->SetFrom("giri16bit062@gmail.com");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailto);


           
                    
        exit;
	
  
  
	
	
}
}
?>

