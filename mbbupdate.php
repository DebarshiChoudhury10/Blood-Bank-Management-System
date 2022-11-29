<?php

@include 'config.php';

$a=0;

if(empty($_POST["bbnameUp"]))
{
	echo "Please enter the Blood Bank Name.";
	echo "<br>";
	$a++;
}
if(empty($_POST["pcodeUp"]))
{
	echo "Please enter the Pincode.";
	echo "<br>";
	$a++;	
}

if(empty($_POST["contactUp"]))
{
	echo "Please enter Contact Number.";
	echo "<br>";
	$a++;		
} 
if(empty($_POST["addressUp"]))
{
	echo "Please enter the Address.";
	echo "<br>";
	$a++;		
}
if(empty($_POST["bloodaUp"]))
{
	echo "Please enter the Blood Availability.";
	echo "<br>";
	$a++;		
}
if($a==0)
{
	$x=0;
	$srno = mysqli_real_escape_string($conn, $_POST["srnoUp"]);
	$bbname = mysqli_real_escape_string($conn, $_POST["bbnameUp"]);
   	$pcode = mysqli_real_escape_string($conn, $_POST["pcodeUp"]);
   	$contact = mysqli_real_escape_string($conn, $_POST["contactUp"]);
   	$address = mysqli_real_escape_string($conn, $_POST["addressUp"]);
   	$blooda = mysqli_real_escape_string($conn, $_POST["bloodaUp"]);

	if(!preg_match("/^[a-zA-Z._-]{3,30}([\s]{1}[a-zA-Z._-]{1,20})*$/",$bbname))
	{
		echo "Only Alphabets are allowed for Blood Bank Name.";
		echo "<br>";
		$x++;
	}
	
	if(!preg_match("/^[1-9]{1}[0-9]{2}\\s{0,1}[0-9]{3}$/",$pcode))
	{
		echo "Only Digits are allowed for Pincode andlength must be 6.";
		echo "<br>";
		$x++;
	}
	
	if(!preg_match("/^[0-9]{1}[0-9]{9}$/",$contact))
	{
		echo "Invalid contact No.";
		echo "<br>";
		$x++;
	}

	if($x==0)
	{
		$sel = "SELECT * FROM blood_form WHERE BBName='$bbname' && Pincode='$pcode' && Address='$address' && Contact='$contact' && Availability='$blooda' ";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "It is Unchanged.If you don't want to update please press cancel.";
			exit();
		}	
		else
		{
			$insert = "UPDATE `blood_form` SET `BBName` = '$bbname', `Pincode` = '$pcode', `Address` = '$address', `Contact` = '$contact', `Availability` = '$blooda' WHERE `blood_form`.`NO` = $srno";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM blood_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `blood_form` SET `NO` = '$number' WHERE 	`blood_form`.`NO` = $id ";
				mysqli_query($conn, $sql);
				$number++;
			} 
			echo "Blood Bank Updated successfully.";
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

?>
