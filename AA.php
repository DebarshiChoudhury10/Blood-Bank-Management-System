<?php include('details.php') ?>
<?php
session_start();
if (isset($_SESSION['admin_name']))
{
	 $_SESSION['admin_name'];
}
else
{
	$_COOKIE['admin_name'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">	
	<link rel="stylesheet" href="services.css">
	<link rel="stylesheet" href="imgstyle.css">
	<link rel="stylesheet" href="form.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"> 
	<title>BBMS-Project</title>
	<link rel="icon" type="image/x-icon" href="image/blood.ico">
</head>
<body>
	<nav class="navbar">
		<ul class="nav-list">
			<div class="logo"><img src="image/blood.ico" alt="logo">BBMS</div>
				<div class="na"><h3> <?php if (isset($_SESSION['admin_name']))
{
	echo $_SESSION['admin_name'];
}?></h3></div>
			<div class="menu">	
				<li><button class='mbtn' onclick='home()' style="width:auto;"><a href="A.php#home"><i class="fas fa-home"></i>Home</a></button></li>
				<li><button class='mbtn' onclick='about()' style="width:auto;"><a href="A.php#about"><i class="fas fa-user"></i>About Us<i class="fa fa-angle-down"></i></a></button>
					<div class="sub-menu-1">
						<ul>
				      			<li><button class='mbtn' onclick='bbms()' style="width:auto;"><a href="#BBMS">Mission</a></button></li>
				      			<li><button class='mbtn' onclick='mission()' style="width:auto;"><a href="#Mission">Vision</a></button></li>
				      			<li><button class='mbtn' onclick='vision()' style="width:auto;"><a href="#Vision">Team</a></button></li>
						</ul>
			   		</div></li>
				<li><button class='mbtn' onclick='services()' style="width:auto;"><a href="A.php#services"><i class="fas fa-clone"></i>Services<i class="fa fa-angle-down"></i></a></button>
					<div class="sub-menu-2">
						<ul>
				      			<li><button class='mbtn' onclick='ra()' style="width:auto;"><a href="#recorda">Record Accessibility</a></button></li>
				      			<li><button class='mbtn' onclick='mbb()' style="width:auto;"><a href="MBB.php#managebb">Manage Blood Banks</a></button></li>
				      			<li><button class='mbtn' onclick='uln()' style="width:auto;"><a href="ULN.php">Update Latest Notification</a></button></li>
							<li><button class='mbtn' onclick='mbrtp()' style="width:auto;"><a href="#managebrtp">Manage Blood Request of Thalassemia Patient</a></button></li>
						</ul>
			   		</div></li>
				<li><button class='mbtn' onclick='contact()' style="width:auto;"><a href="A.php#contact"><i class="fas fa-phone"></i>Contact Us</a></li>
				<li><button class='mbtn' style="width:auto;"><a href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout</a></button></li>
			</div>
		</ul>
		
			<div class="rightnav">
				<input type="text" name="search" id="search">
				<button class="btn btn-sm">Search</button>
			</div>
		
	</nav>
	

	<section id="recorda" class="serad">
		
		<div class="ser-paras">
			<h2 class="text-center text-big">Record Accessibility</h2>
			
			
			<div id="serdis" class="serad-box">
				<div class="serdet">
				<h3 class="sectionSubTag text-small">User Details</h3>
				</div>
					<div id="rel">
					<table class='table' id='myTable'>
						<thead>
							<tr>
								<th scope='col'>S.No</th>
								<th scope='col'>User Name</th>
								<th scope='col'>Full Name</th>
								<th scope='col'>Email ID</th>
								<th scope='col'>User Type</th>
								<th scope='col'>User Status</th>
								<th scope='col'>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php if(mysqli_num_rows($result) > 0)
							{
								while( $row = mysqli_fetch_assoc($result))
								{
									echo "<tr>
									<th scope='row'>". $row['ID'] . "</th>
									<td>". $row['User_Name'] . "</td>
									<td>". $row['Full_Name'] . "</td>
									<td>". $row['Email'] . "</td>
									<td>". $row['User_Type'] . "</td>
									<td>". $row['User_Status'] . "</td>
									<td><button type='button' id='blockbtn' class='seract seractb block'>Block</button><button type='button' id='unblockbtn' class='seract seractub unblock'>Unblock</button></td>
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
	<script src="btn.js"></script>
	<script src="popup.js"></script>
	<script src="menuselectad.js"></script>
	<script src="submenuselectad.js"></script>
	<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<?php include('action.js'); ?>
</body>
</html>
