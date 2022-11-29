<?php

@include 'config.php';

$a=0;

if(empty($_POST["password"]) || empty($_POST["cpassword"]))
{
	echo "Please enter your Password or Confirm Password.";
	echo "<br>";
	$a++;		
} 

if($a==0)
{
	$x=0;
	$uid = mysqli_real_escape_string($conn, $_POST["uid"]);
   	$otp = mysqli_real_escape_string($conn, $_POST["otp"]);
   	$pass = mysqli_real_escape_string($conn, $_POST["password"]);
   	$cpass = mysqli_real_escape_string($conn, $_POST["cpassword"]);
	
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

	if($x==0)
	{
		$sel = "SELECT * FROM user_form WHERE OTP='$otp' && ID='$uid'";
		$res = mysqli_query($conn,$sel);
		
		if(($pass != $cpass) || ($cpass != $pass))
		{
	        	echo "Password not matched!";
			exit();
		}
		else
		{	
			$ch=0;	
			$insert = "UPDATE `user_form` SET `Password` = '$pass', `CPassword` = '$cpass', `OTP` = '$ch' WHERE `user_form`.`ID` = $uid ";
        		mysqli_query($conn, $insert); 
			echo "Passwrod Reseted successfully.";
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
