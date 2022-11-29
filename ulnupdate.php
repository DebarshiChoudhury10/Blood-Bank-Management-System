<?php

@include 'config.php';

$a=0;

if(empty($_POST["noticeUp"]))
{
	echo "Please enter the Blood Bank Name.";
	echo "<br>";
	$a++;
}

if($a==0)
{
	$x=0;
	$srno = mysqli_real_escape_string($conn, $_POST["srnoUp"]);
	$notice = mysqli_real_escape_string($conn, $_POST["noticeUp"]);
   	$date = mysqli_real_escape_string($conn, $_POST["dateUp"]);

	if($x==0)
	{
		$sel = "SELECT * FROM notice_form WHERE Notice='$notice' ";
		$res = mysqli_query($conn,$sel);
		if(mysqli_num_rows($res) > 0)
		{
			echo "It is Unchanged.If you don't want to update please press cancel.";
			exit();
		}	
		else
		{
			$insert = "UPDATE `notice_form` SET `Notice` = '$notice', `Date` = '$date' WHERE `notice_form`.`NO` = $srno";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM notice_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `notice_form` SET `NO` = '$number' WHERE `notice_form`.`NO` = $id ";
				mysqli_query($conn, $sql);
				$number++;
			} 
			echo "Notice Updated successfully.";
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
