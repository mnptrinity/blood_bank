<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$name = $_POST['name'];
$pass=$_POST['pass'];
$age = $_POST['age'];
$image = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));
$mob1 = $_POST['mob1'];
$email = $_POST['email'];
$district = $_POST['district'];
$blood = $_POST['blood'];
$s = " select * from blood_donor where mailid = '$email' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == true)
{
	$mess="Email already registered";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='http://localhost/lifesavers/blooddonorlogin.php'; </script>";
        exit;
	
}
else{
	
$pass=md5($pass);
	$reg="insert into blood_donor(name,password,age,mob1,mailid,district,bloodgroup,image,Available) values ('$name','$pass','$age','$mob1','$email','$district','$blood','$image','yes')";
	mysqli_query($con, $reg);
	$mess="registered successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	        $mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a donor....:)".$name;
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
                 echo "window.location.href='blood.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='blood.html';</script>";              
             }
                    
        exit;
	
}
?>
