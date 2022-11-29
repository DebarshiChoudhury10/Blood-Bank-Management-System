<?php

@include 'config.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

include('PHPMailer/PHPMailerAutoload.php');

// Include PHPMailer library files 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 
$a=0;

if(empty($_POST["email"]))
{
	echo "Email Field cannot be left blank.";
	echo "<br>";
	$a++;
}

if(empty($_POST["uname"]))
{
	echo "Username Field cannot be left blank.";
	echo "<br>";
	$a++;
}

if($a==0)
{
	$x=0;
	$uname = mysqli_real_escape_string($conn, $_POST["uname"]);
	$email = mysqli_real_escape_string($conn, $_POST["email"]);
	if($x==0)
	{
		$sel = "SELECT * FROM user_form WHERE Email='$email' && User_Name='$uname' ";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "OTP Sent.";
			$otp=rand(111111,999999);
			$row = mysqli_fetch_array($res);
			$id = $row['ID'];
			$sql = "UPDATE `user_form` SET `OTP` = '$otp' WHERE `user_form`.`ID` = $id ";
			mysqli_query($conn, $sql);
			$html="Your OTP verification Code is ".$otp;
			smtp_mailer($email,'OTP Verification',$html);
			exit();
		}	
		else
		{
			echo "User Not Exist!.";
			exit(); 
		}
	}
	else
	{
		exit();
	}

}
else
{
	exit();
}
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true; 
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "testpro10project@gmail.com";
	$mail->Password = 'kcctpbgpktegcpbn';
	$mail->SetFrom("testpro10project@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		//echo "Failed";//$mail->ErrorInfo;
	}else{
		//echo "Sent";
		exit();
	}
}

?>
