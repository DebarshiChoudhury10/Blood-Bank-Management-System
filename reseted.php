<?php
session_start();
if (isset($_SESSION['ID']))
{
	 $_SESSION['ID'];
}
else
{
	$_COOKIE['ID'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="imgstyle.css">
	<link rel="stylesheet" href="res.css">
	<link rel="stylesheet" href="respa.css">
	<link rel="stylesheet" href="modal.css">
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"> 
	<title>BBMS-Project</title>
	<link rel="icon" type="image/x-icon" href="image/blood.ico">
</head>
<body>
	
	<section id="reset" class="logpage loginpage">
		<div id="log-success" class="reg-success">
			<img src="tick.jpg">
			<h2>Thank You!<h2>
			<div id="lsuccess-msg"></div>
			<button type="button" class="buttons" onclick='closelPopup()'>OK</button>
		</div>
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
		<!--<h2 class="text-center text-big">Reset Password</h2>
  		<p class="text-cen"><em>We'd love your feedback!</em></p>-->
		<div class="form-box">
                	<div class='button-box'>
                    		<div id='logbtn'></div>
                    			<button type='button' onclick='login()'class='toggle-btn'>Reset Password</button>
                		</div>
                	<form id='login' class='input-group-login' method="post">
                    		<div id='lerror-msg' ></div>
				<input type="hidden" id="uid" name="uid" value='<?php echo $_SESSION['ID']?>' readonly>
				<input type="hidden" id="otp" name="otp" value='<?php echo $_SESSION['OTP']?>' readonly>
		    		<input type='password' name='password' id="password" class='input-field' placeholder='New Password' required >
		    		<input type='password' name='cpassword' id="cpassword" class='input-field' placeholder='Confirm Password' required>
		    		<button type='submit' name='loginbtn' id='loginbtn' class='submit-btn'>Reset</button>
				<div class='rem'><a href="B.php">Go back to BBMS</a></div>
			</form>
            	</div>
	</section>

	<footer>
		<p class="text-footer">Copyright &copy; 2022 - All Rights Reserved</p>
	</footer>
	<script src="popup.js"></script>
	<script src="modaladd.js"></script>
	<?php include('reseted.js'); ?>
</body>
</html>
