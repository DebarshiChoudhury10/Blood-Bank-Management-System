<?php include('detailmbb.php') ?>
<?php
session_start();
if (isset($_SESSION['user_name']))
{
	 $_SESSION['user_name'];
}
else
{
	$_COOKIE['user_name'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">	
	<link rel="stylesheet" href="servicesbbd.css">
	<link rel="stylesheet" href="imgstyle.css">
	<link rel="stylesheet" href="mbb.css">
	<link rel="stylesheet" href="modal.css">
	<!--<link rel="stylesheet" href="form.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	--><link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"> 
	<title>BBMS-Project</title>
	<link rel="icon" type="image/x-icon" href="image/blood.ico">
</head>
<body>
	<nav class="navbar">
		<ul class="nav-list">
			<div class="logo"><img src="image/blood.ico" alt="logo">BBMS</div>
				<div class="na"><h3> <?php if (isset($_SESSION['user_name']))
{
	echo $_SESSION['user_name'];
}?></h3></div>
			<div class="menu">	
				<li><button class='mbtn' onclick='home()' style="width:auto;"><a href="U.php#home"><i class="fas fa-home"></i>Home</a></button></li>
				<li><button class='mbtn' onclick='about()' style="width:auto;"><a href="U.php#about"><i class="fas fa-user"></i>About Us<i class="fa fa-angle-down"></i></a></button>
					<div class="sub-menu-1">
						<ul>
				      			<li><button class='mbtn' onclick='bbms()' style="width:auto;"><a href="U.php#BBMS">Mission</a></button></li>
				      			<li><button class='mbtn' onclick='mission()' style="width:auto;"><a href="U.php#Mission">Vision</a></button></li>
				      			<li><button class='mbtn' onclick='vision()' style="width:auto;"><a href="U.php#Vision">Team</a></button></li>
						</ul>
			   		</div></li>
				<li><button class='mbtn' onclick='services()' style="width:auto;"><a href="U.php#services"><i class="fas fa-clone"></i>Services<i class="fa fa-angle-down"></i></a></button>
					<div class="sub-menu-2">
						<ul>
				      			<li><button class='mbtn' onclick='ra()' style="width:auto;"><a href="bcom.php">Blood Group Compatibility</a></button></li>
				      			<li><button class='mbtn' onclick='mbb()' style="width:auto;"><a href="BBD.php">Blood Bank Directory</a></button></li>
				      			<li><button class='mbtn' onclick='uln()' style="width:auto;"><a href="BGA.php">Blood Group Availability</a></button></li>
							<li><button class='mbtn' onclick='uln()' style="width:auto;"><a href="IC.php">Issue Complaint</a></button></li>
							<li><button class='mbtn' onclick='mbrtp()' style="width:auto;"><a href="BRTP.php">Blood Request of Thalassemia Patient</a></button></li>
						</ul>
			   		</div></li>
				<li><button class='mbtn' onclick='contact()' style="width:auto;"><a href="U.php#contact"><i class="fas fa-phone"></i>Contact Us</a></li>
				<li><button class='mbtn' style="width:auto;"><a href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout</a></button></li>
			</div>
		</ul>
		
			<div class="rightnav">
				<input type="texto" name="search" id="search">
				<button class="btn btn-sm">Search</button>
			</div>
		
	</nav>

	<section id="recorda" class="serad">
		<div class="ser-paras">
			<h2 class="text-center text-big">Blood Group Availability</h2>
			<div id="serdis" class="serad-box">
				<div class="serdet">
				<h3 class="sectionSubTag text-small">Blood Groups Availability Details</h3>
				</div>
					<div id="rel">
					<table class='table' id='myTable'>
						<thead>
							<tr>
								<th scope='col'>S.No</th>
								<th scope='col'>Blood Bank Name</th>
								<th scope='col'>Blood Availability</th>
								<th scope='col'>Contact</th>
							</tr>
						</thead>
						<tbody>
							<?php if(mysqli_num_rows($result) > 0)
							{	$sno = 0;
								while( $row = mysqli_fetch_assoc($result))
								{
									$sno = $sno+1;
									echo "<tr>
									<th scope='row'>". $sno . "</th>
									<td>". $row['BBName'] . "</td>
									<td>". $row['Availability'] . "</td>
									<td>". $row['Contact'] . "</td>
									</tr>";
								}
							} ?>
						</tbody>
					</table>
					</div>
			</div>
		</div>
		
	</section>

	<footer>
		<p class="text-footer">Copyright &copy; 2022 - All Rights Reserved</p>
	</footer>
	<script>
		$(document).ready( function () {
    			$('#myTable').DataTable();
		});
	</script>
	<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>
</html>
