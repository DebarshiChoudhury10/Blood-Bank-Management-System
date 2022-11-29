<?php

@include 'config.php';

$a=0;

if(empty($_POST["notice"]))
{
	echo "Notice field cannot be left blank.";
	echo "<br>";
	$a++;
}

if($a==0)
{
	$x=0;
	$notice = mysqli_real_escape_string($conn, $_POST["notice"]);
	$date = mysqli_real_escape_string($conn, $_POST["date"]);
	if($x==0)
	{
		$sel = "SELECT * FROM notice_form WHERE Notice='$notice'";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "Notice Already Present!";
			exit();
		}	
		else
		{
			$insert = "INSERT INTO notice_form(Notice, Date) VALUES('$notice','$date')";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM notice_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `notice_form` SET `NO` = '$number' WHERE `notice_form`.`NO` = $id ";
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
