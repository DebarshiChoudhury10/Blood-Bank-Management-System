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
	<link rel="stylesheet" href="uln.css">
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
		<div id="reg-success" class="reg-success">
			<img src="tick.jpg">
			<h2>Thank You!<h2>
			<div id="success-msg"></div>
			<button type="button" class="buttons" onclick='closePopup()'>OK</button>
		</div>
		<div id="reg-error" class="reg-success">
			<img src="cross.jpg">
			<h2>ERROR!<h2>
			<div id="error-msg"></div>
			<button type="button" class="buttonc" onclick='closedPopup()'>OK</button>
		</div>
		<div id="reg-exc" class="reg-success">
			<img src="yellow.jpg">
			<h2>Invalid!<h2>
			<div id="exc-msg"></div>
			<button type="button" class="buttone" onclick='closedPopups()'>OK</button>
		</div>
		<div class="ser-paras">
			<h2 class="text-center text-big">Blood Request For Thalassemia Patient</h2>
			<div class="container">
  				<form id='managebb' method="post">
    					<div class="row">
      						<div class="col-25">
							<input type="hidden" id="date" name="date">
        						<label class="lab" for="fname">Name</label>
      						</div>
      						<div class="col-75">
        						<input type="text" id="name" name="name" value='<?php echo $_SESSION['user_name']?>' readonly>
      						</div>
    					</div>
    					<div class="row">
      						<div class="col-25">
        						<label class="lab" for="lname">Email</label>
      						</div>
      						<div class="col-75">
        						<input type="text" id="email" name="email" value='<?php echo $_SESSION['email']?>' readonly>
      						</div>
    					</div>
    					<div class="row">
      						<div class="col-25">
        						<label class="lab" for="subject">Blood Request</label>
      						</div>
      						<div class="col-75">
        						<textarea id="blooda" name="blooda" placeholder="Write Blood Group and Details..." style="height:400px"></textarea>
      						</div>
    					</div>
    					<div class="row addbt">
      						<button type="submit" name="addbtn" id="addbtn" class="addbtn" value="Add">SEND</button>
    					</div>
  				</form>
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
	<script>
		const d = new Date();
		date.value = d;
	</script>
	<script src="popup.js"></script>
	<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<?php include('userbrtp.js'); ?>
</body>
</html>
