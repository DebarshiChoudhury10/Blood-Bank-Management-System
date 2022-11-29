<?php

@include 'config.php';


$sno = $_POST['data'];
$select = "SELECT * FROM notice_form WHERE NO ='$sno' ";
$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result) > 0)
{
	$sel = "DELETE FROM `notice_form` WHERE `NO` = $sno ";
	$res = mysqli_query($conn, $sel);

	if($result)
	{
		echo "Deleted Successfully.";
		$query=mysqli_query($conn,"SELECT * FROM notice_form");
		$number=1;
		while($row=mysqli_fetch_array($query)){
			$id=$row['NO'];
			$sql = "UPDATE `notice_form` SET `NO` = '$number' WHERE `notice_form`.`NO` = $id ";
			mysqli_query($conn, $sql);
			$number++;
		} 
		exit();
	}
	else
	{
		$err=mysqli_error($conn);
		echo "Not deleted successfully due to this error --> $err"; 
	}
}
else
{
	echo "No such records.";
	exit();
}
?>