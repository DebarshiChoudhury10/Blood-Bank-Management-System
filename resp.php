<?php

session_start();

@include 'config.php';

$otp = mysqli_real_escape_string($conn, $_POST["OTP"]);

$sel = "SELECT * FROM user_form WHERE OTP='$otp'";
$res = mysqli_query($conn,$sel);
if(mysqli_num_rows($res) > 0)
{
	echo "Verified successfully.Change your password.";
	$row = mysqli_fetch_array($res);
	$_SESSION['ID'] = $row['ID'];
	$_SESSION['OTP'] = $row['OTP'];
	exit();
}
else
{
	echo "Incorrect OTP.";
	exit();
}		
?>