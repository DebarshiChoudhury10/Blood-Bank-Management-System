<?php

@include 'config.php';

$a=0;

if(empty($_POST["blooda"]))
{
	echo "Please enter Details of Thalassemia Patient Details.";
	echo "<br>";
	$a++;		
}
if($a==0)
{
	$x=0;
	$name = mysqli_real_escape_string($conn, $_POST["name"]);
   	$email = mysqli_real_escape_string($conn, $_POST["email"]);
   	$request = mysqli_real_escape_string($conn, $_POST["blooda"]);
	$date = mysqli_real_escape_string($conn, $_POST["date"]);

	if($x==0)
	{
			$insert = "INSERT INTO request_form(Name, Email, Request, Date) VALUES('$name','$email','$request','$date')";
        		mysqli_query($conn, $insert);
			$query=mysqli_query($conn,"SELECT * FROM request_form");
			$number=1;
			while($row=mysqli_fetch_array($query)){
				$id=$row['NO'];
				$sql = "UPDATE `request_form` SET `NO` = '$number' WHERE `request_form`.`NO` = $id ";
				mysqli_query($conn, $sql);
				$number++;
			}
			echo "Request Sent Successfully.We will inform you Shortly. (Issue Complain If you don't get email within 48hours.)";
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
