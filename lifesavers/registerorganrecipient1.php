<?php
require 'master/PHPMailerAutoload.php'; 
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'blood_organ');
$name = $_POST['name'];
$pass=$_POST['pass'];
$pass=md5($pass);
$age = $_POST['age'];
$mob1 = $_POST['mob1'];

$email = $_POST['email'];
$district = $_POST['district'];
$blood = $_POST['blood'];
$heart=$_POST['heart'];
$kidney=$_POST['kidney'];
$eyes=$_POST['eyes'];
$s = " select * from organ_recipient where mailid = '$email' ";
$image = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == true)
{
	$mess="Email already registered";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	echo "<script> location.href='organrecipientlogin.php'; </script>";
    exit;
	
}
else
{
	
	if($heart == true && $kidney == true && $eyes == true)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','yes','yes','yes','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
	elseif($heart == false && $kidney == false && $eyes == true)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','no','no','yes','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == false)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','no','yes','no','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
	elseif($heart == false && $kidney == true && $eyes == true)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','no','yes','yes','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == false)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','yes','no','no','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
    elseif($heart == true && $kidney == true && $eyes == false)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','yes','yes','no','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	
	}
	elseif($heart == true && $kidney == false && $eyes == true)
	{
		$reg="insert into organ_recipient(name,password,age,mob1,mailid,district,bloodgroup,heart,kidney,eyes,image) values ('$name','$pass','$age','$mob1','$email','$district','$blood','yes','no','yes','$image')";
	mysqli_query($con, $reg);
	$mess="Registered Successfully";
	echo"<script type='text/javascript'>alert('$mess');</script>";
	$mailto = $email;
            $mailSub = "Confirmation Mail";
            $mailMsg = "Your has been successfully registered as a organ recipient....:)".$name;
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
                 echo "window.location.href='organ.html';</script>";
             }
            else
             {
                  echo "<script>";
                 echo "alert('Mail not Sent successfully....');";
                 echo "window.location.href='organ.html';</script>";              
             }
                    
        exit;
	}
	
	
}
?>
