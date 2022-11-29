<?php

@include 'config.php';

$a=0;

if(empty($_POST["bbname"]))
{
	echo "Please enter the Blood Bank Name.";
	echo "<br>";
	$a++;
}
if(empty($_POST["pcode"]))
{
	echo "Please enter the Pincode.";
	echo "<br>";
	$a++;	
}

if(empty($_POST["contact"]))
{
	echo "Please enter Contact Number.";
	echo "<br>";
	$a++;		
} 
if(empty($_POST["address"]))
{
	echo "Please enter the Address.";
	echo "<br>";
	$a++;		
}
if(empty($_POST["blooda"]))
{
	echo "Please enter the Blood Availability.";
	echo "<br>";
	$a++;		
}
if($a==0)
{
	$x=0;
	$bbname = mysqli_real_escape_string($conn, $_POST["bbname"]);
   	$pcode = mysqli_real_escape_string($conn, $_POST["pcode"]);
   	$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
   	$address = mysqli_real_escape_string($conn, $_POST["address"]);
   	$blooda = mysqli_real_escape_string($conn, $_POST["blooda"]);

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
		$sel = "SELECT * FROM blood_form WHERE BBName='$bbname' && Pincode='$pcode' ";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "Blood Bank already Added!";
			exit();
		}	
		else
		{
			$insert = "INSERT INTO blood_form(BBName, Pincode, Address, Contact, Availability) VALUES('$bbname','$pcode','$address','$contact', '$blooda')";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM blood_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `blood_form` SET `NO` = '$number' WHERE 	`blood_form`.`NO` = $id ";
				mysqli_query($conn, $sql);
				$number++;
			}
			echo "Blood Bank added successfully.";
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
