<?php

@include 'config.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

$a=0;

if(empty($_POST["username"]))
{
	echo "Please enter the Username.";
	echo "<br>";
	$a++;
}
if(empty($_POST["fullname"]))
{
	echo "Please enter your Name.";
	echo "<br>";
	$a++;	
}
if(empty($_POST["email"]))
{
	echo "Please enter your Email.";
	echo "<br>";
	$a++;	
} 
if(empty($_POST["password"]) || empty($_POST["cpassword"]))
{
	echo "Please enter your Password or Confirm Password.";
	echo "<br>";
	$a++;		
} 
if(empty($_POST["user_type"]))
{
	echo "Please Choose your User Type.";
	echo "<br>";
	$a++;		
}

if($a==0)
{
	$x=0;
	$uname = mysqli_real_escape_string($conn, $_POST["username"]);
   	$flname = mysqli_real_escape_string($conn, $_POST["fullname"]);
   	$email = mysqli_real_escape_string($conn, $_POST["email"]);
   	$pass = mysqli_real_escape_string($conn, $_POST["password"]);
   	$cpass = mysqli_real_escape_string($conn, $_POST["cpassword"]);
   	$user_type = $_POST["user_type"];

	$select = "SELECT * FROM user_form WHERE User_Type='$user_type' ";
	$result = mysqli_query($conn,$select);

	if(!preg_match("/^[a-zA-Z]*$/",$uname))
	{
		echo "Only Alphabets are allowed for Username.";
		echo "<br>";
		$x++;
	}
	
	if(!preg_match("/^[a-zA-Z]{3,20}([\s]{1}[a-zA-Z\.]{3,20})*$/",$flname))
	{
		echo "Only Alphabets and Whitespace are allowed for Name and atleast 3 character required.";
		echo "<br>";
		$x++;
	}
	
	if(!preg_match("/^[a-zA-Z0-9]+([\.\-_]{1}[a-zA-Z0-9]+)*[@]{1}[a-zA-Z0-9]{5,15}[\.]{1}[a-z]{2,3}$/",$email))
	{
		echo "Invalid Email Id.";
		echo "<br>";
		$x++;
	}
	
	if (strlen($_POST["password"]) < '8') 
	{
        	echo "Your Password Must Contain At Least 8 Characters!";
		echo "<br>";
		$x++;    	
	}
    	
	if(!preg_match("#[0-9]+#",$pass)) 
	{
        	echo "Your Password Must Contain At Least 1 Number!";
		echo "<br>";
		$x++;
    	}
    	
	if(!preg_match("#[A-Z]+#",$pass))
	{
        	echo "Your Password Must Contain At Least 1 Capital Letter!";
		echo "<br>";
		$x++;
    	}
    	
	if(!preg_match("#[a-z]+#",$pass)) 
	{
        	echo "Your Password Must Contain At Least 1 Lowercase Letter!";
		echo "<br>";
		$x++;
   	}
	
	if((mysqli_num_rows($result) < 0) || (mysqli_num_rows($result) >=2))
	{
        	echo "For Admin registration please contact super admin.";
		echo "<br>";
		$x++;
   	}
	
	
	if($x==0)
	{
		$sel = "SELECT * FROM user_form WHERE Email='$email' ";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "Email ID already Registered!";
			exit();
		}	
		else
		{
			$sele = "SELECT * FROM user_form WHERE User_Name ='$uname' ";
			$resu = mysqli_query($conn,$sele);
			if(mysqli_num_rows($resu) > 0)
			{
				echo "User Name already exist!";
				exit();
			}
			else		
			{
				//$select = "SELECT * FROM user_form WHERE Password = '$pass' && CPassword='$cpass' ";
			//$result = mysqli_query($conn, $select);
				if(($pass != $cpass) || ($cpass != $pass))
				{
	        			echo "Password not matched!";
					exit();
				}
				else
				{		
					$insert = "INSERT INTO user_form(User_Name, Full_Name, Email, Password, CPassword, User_Type) VALUES('$uname','$flname','$email','$pass', '$cpass','$user_type')";
        				mysqli_query($conn, $insert);
					$query=mysqli_query($conn,"SELECT * FROM user_form");
					$number=1;
					while($row=mysqli_fetch_array($query)){
						$id=$row['ID'];
						$sql = "UPDATE `user_form` SET `ID` = '$number' WHERE `user_form`.`ID` = $id ";
						mysqli_query($conn, $sql);
						$number++;
					} 
					$html="Thank You for partnering with us in our blood donation drive. Because of your help we will surely able to meet our goal for the blood bank.Again Thank You for registering with us.";
					smtp_mailer($email,'Greetings for Successfully Registered with BBMS',$html);
					echo "User registered successfully.";
					exit(); 
				}
			}
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
	$mail->Password = "zpldcjjjuukwbowm";
	$mail->SetFrom("testpro10project@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		//echo "Sent";
	}
}
?>
