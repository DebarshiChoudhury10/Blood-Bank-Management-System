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
		<div id="modaladds" class="modal-op">
			<img src="update.jpg">
			<!--<h2>Update<h2>-->
			<div id="modal-msg"></div>
			<div class="container">
  				<form id='managebbu' method="post">
    					<div class="row">
      						<div class="col-25">
        						<label class="lab modlab" for="lname">OTP</label>
      						</div>
      						<div class="col-75">
       	 						<input type="text" id="OTP" name="OTP" >
     					 	</div>
    					</div>
    					<div class="row addbu">
      						<button type="submit" name="addbtn" id="addbutnup" class="addbutn" >Submit</button>
						<button type="submit" name="addbtn" id="addbutn" class="addbutn" onclick='closembPopup()'>Cancel</button>
    					</div>
  				</form>
			</div>
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
		    		<input type='email' name='email' id="email" class='input-field' placeholder='Email Id' required >
		    		<input type='password' name='uname' id="uname" class='input-field' placeholder='Enter User Name' required>
		    		<button type='submit' name='loginbtn' id='loginbtn' class='submit-btn'>Send OTP</button>
		 	</form>
            	</div>
	</section>

	<footer>
		<p class="text-footer">Copyright &copy; 2022 - All Rights Reserved</p>
	</footer>
	<script src="popup.js"></script>
	<script src="modaladd.js"></script>
	<?php include('respass.js'); ?>
	<?php include('resp.js'); ?>
</body>
</html>
