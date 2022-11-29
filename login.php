<?php

@include 'config.php';

session_start();

$a=0;

if(empty($_POST["email"]))
{
	echo "Please enter the Username or the email.";
	echo "<br>";
	$a++;
}

if(empty($_POST["password"]))
{
	echo "Please enter your Password";
	echo "<br>";
	$a++;		
} 

if($a==0)
{
   	$email = mysqli_real_escape_string($conn, $_POST['email']);
   	$pass = mysqli_real_escape_string($conn, $_POST['password']);
   	$user_type = $_POST['user_type'];

   	$select = " SELECT * FROM user_form WHERE (User_Name = '$email' OR Email = '$email') && password = '$pass' && User_Type = '$user_type' ";
   	$result = mysqli_query($conn, $select);
   	if(mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		if($row['User_Status'] == 'ACTIVE')
		{
      		if($row['User_Type'] == 'admin')
		{
			$_SESSION['admin_name'] = $row['Full_Name'];
			$_SESSION['email'] = $row['Email'];
	  		echo "admin Login Successful";
			exit();
		}		
		elseif($row['User_Type'] == 'user')
		{
			$_SESSION['user_name'] = $row['Full_Name'];
			$_SESSION['email'] = $row['Email'];
			echo "user Login Successful";
			exit();
      		}
		}
		else
		{
			echo "Your Account has been Disabled, please contact Admin!";
			exit();
		}     
   	}
	else
	{
      		echo "Incorrect Email or Password or User Type!";
		exit();
   	}
}
else
{
	exit();
}
?>