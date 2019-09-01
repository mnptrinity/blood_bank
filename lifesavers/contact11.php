<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$name = $_POST['name'];

$email=$_POST['email'];
$sub = $_POST['subject'];

$mess = $_POST['message'];

            $mailto = "giri16bit062@gmail.com";
            $mailSub = $sub;
            $mailMsg = "Name:".$name."    Email:".$email."     Message:".$mess;
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
?>