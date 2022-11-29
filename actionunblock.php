<?php

@include 'config.php';


	$uid = $_POST['data'];
	$usertype = $_POST['data1'];
	$userstatus = $_POST['data2'];
	$select = "SELECT * FROM user_form WHERE ID ='$uid' ";
	$result = mysqli_query($conn, $select);
	if(mysqli_num_rows($result) > 0)
	{
		if(($_POST["data1"] == 'user') && ($_POST["data2"] == 'INACTIVE'))
		{
			$ustatus="ACTIVE";
			echo "$ustatus";
			$query= "UPDATE user_form SET User_Status = '$ustatus' WHERE `user_form`.`ID` = '$uid' ";
			mysqli_query($conn,$query);
		}	
		if($_POST["data1"] == 'admin')
		{	
			echo "You don't have the Action Permission for Admin.";
			exit();
		}
	}

?>