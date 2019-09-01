<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$name = $_POST['name'];

$age = $_POST['age'];

$mob1 = $_POST['mob1'];
$mob2 = $_POST['mob2'];
$mob3 = $_POST['mob3'];
$aadhar =$_POST['aadhar'];
$email =$_POST['email'];
$s = " select * from emergency_call where mailid = '$email' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == true)
{
	$mess="Email already registered";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/emergency.html'; </script>";
        exit;
	
}
else{
	

	$reg="insert into emergency_call(name,age,aadhar,mailid,mob1,mob2,mob3) values ('$name','$age','$aadhar','$email','$mob1','$mob2','$mob3')";
	mysqli_query($con, $reg);
	$mess="registered successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	        $mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered for emergency calls on lifesavers....:)".$name;
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
                 echo "window.location.href='emergency.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='emergency.html';</script>";              
             }
                    
        exit;
	
}
?>
