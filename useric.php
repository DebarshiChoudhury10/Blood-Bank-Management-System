<?php

@include 'config.php';

$a=0;

if(empty($_POST["blooda"]))
{
	echo "Please Write your Issues.";
	echo "<br>";
	$a++;		
}
if($a==0)
{
	$x=0;
	$name = mysqli_real_escape_string($conn, $_POST["name"]);
   	$email = mysqli_real_escape_string($conn, $_POST["email"]);
   	$report = mysqli_real_escape_string($conn, $_POST["blooda"]);
	$date = mysqli_real_escape_string($conn, $_POST["date"]);

	if($x==0)
	{
			$insert = "INSERT INTO report_form(Name, Email, Report, Date) VALUES('$name','$email','$report','$date')";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM report_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `report_form` SET `NO` = '$number' WHERE `report_form`.`NO` = $id ";
				mysqli_query($conn, $sql);
				$number++;
			}
			echo "Issue/Report Sent Successfully.We will inform you Shortly. (within 24hours.)";
			exit(); 
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
