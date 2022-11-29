<?php include('ulndata.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="imgstyle.css">
	<link rel="stylesheet" href="form.css">
	<script src="jquery-3.6.1.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"> 
	<title>BBMS-Project</title>
	<link rel="icon" type="image/x-icon" href="image/blood.ico">
</head>
<body>
	<nav class="navbar">
		<ul class="nav-list">
			<div class="logo"><img src="image/blood.ico" alt="logo">BBMS</div>
			<div class="menu">	
				<li><button class='mbtn' onclick='home()' style="width:auto;"><a href="B.php#home"><i class="fas fa-home"></i>Home</a></button></li>
				<li><button class='mbtn' onclick='about()' style="width:auto;"><a href="B.php#about"><i class="fas fa-user"></i>About Us<i class="fa fa-angle-down"></i></a></button>
					<div id="sub-menu-1" class="sub-menu-1">
						<ul>
				      			<li><button class='mbtn' onclick='bbms()' style="width:auto;"><a href="#BBMS">Mission</a></button></li>
				      			<li><button class='mbtn' onclick='mission()' style="width:auto;"><a href="#Mission">Vision</a></button></li>
				      			<li><button class='mbtn' onclick='vision()' style="width:auto;"><a href="#Vision">Team</a></button></li>
						</ul>
			   		</div></li>
				<li><button class='mbtn' onclick='services()' style="width:auto;"><a href="B.php#services"><i class="fas fa-clone"></i>Services</a></button></li>
				<li><button class='mbtn' onclick='contact()' style="width:auto;"><a href="B.php#contact"><i class="fas fa-phone"></i>Contact Us</a></li>
				<li><button class='mbtn' onclick='loginto()' style="width:auto;"><a href="#loginform"><i class="fas fa-sign-in-alt"></i>Login</a></button></li>
			</div>
		</ul>
		<div class="rightnav">
			<input type="text" name="search" id="search">
			<button class="btn btn-sm">Search</button>
		</div>	
	</nav>

	<section id="home" class="background firstsection">
		<div class="box-main" id='home-page'>
			<div class="firstHalf" >
				<div class="slider">
	        			<div class="slides">
		     				<input type="radio" name="radio-btn" id="radio1">
		     				<input type="radio" name="radio-btn" id="radio2">
		    				<input type="radio" name="radio-btn" id="radio3">
		     				<input type="radio" name="radio-btn" id="radio4">
		     				<input type="radio" name="radio-btn" id="radio5">
		     				<input type="radio" name="radio-btn" id="radio6">
		     				<div class="slide first">
		         				<img src="image1.jpg" alt="" >
		     				</div>
		     				<div class="slide">
		         				<img src="image2.jpg" alt="" >
		    	 			</div>
		     				<div class="slide">
		         				<img src="image3.jpg" alt="" >
		     				</div>
		     				<div class="slide">
		         				<img src="image4.jpg" alt="" >
		    				</div>
	 	     				<div class="slide">
		         				<img src="image5.jpg" alt="" >
		     				</div>
		     				<div class="slide">
		         				<img src="image6.jpg" alt="" >
		     				</div>
		     				<div class="navigation-auto">
		        				<div class="auto-btn1"></div>
		         				<div class="auto-btn2"></div>
	  	         				<div class="auto-btn3"></div>
		         				<div class="auto-btn4"></div>
		        	 			<div class="auto-btn5"></div>
		         				<div class="auto-btn6"></div>
		     				</div>
	         			</div>
	     	 			<div class="navigation-manual">
		     				<label for="radio1" class="manual-btn"></label>
		     				<label for="radio2" class="manual-btn"></label>
	   	     				<label for="radio3" class="manual-btn"></label>
		     				<label for="radio4" class="manual-btn"></label>
		    				<label for="radio5" class="manual-btn"></label>
		     				<label for="radio6" class="manual-btn"></label>
	         			</div>
				</div>
			</div>
			<div class="secondHalf">
				<div id='notifiction-page' class='notification-box'>
		 			<div class='noti'><h1><u><center>Notifications</center></u></h1></div>
		 			<div >
		     			<marquee behavior="scroll" direction="up" scrolldelay="2" scrollamount="2" loop="-1">
		 				<?php if(mysqli_num_rows($result) > 0)
							{
								while( $row = mysqli_fetch_assoc($result))
								{
									echo "<p>". $row['NO'] . ". ". $row['Notice'] . "</p><br />";
								}
							} ?>
					</marquee>
			 		</div>
     	     			</div>
			</div>
		</div>
	</section>
	<section id="about">
		<section class="ab text-big">About Us</section>
		<section id="BBMS" class="secright">
			<div class="paras">
				<p class="sectionTag text-big">Blood Bank Management System</p>
				<p class="sectionSubTag text-small">The project BBMS is developed to manage Blood banks as well as to find the nearest blood 
				bank to donate blood and purchase blood. The basic purpose of SRS is to describe the complete behavior of the 
				application proposed. The system is to be very simple that can be used by anyone as well as novice. The aim of the
				system is to make the process of obtaining blood from a blood bank hassle free and corruption free and make the 
				system of blood bank management effective.</p>
			</div>
			<div class="thumbnail">
				<img src="bloodquote1.jpg" alt="Blood Quote" class="imgFluid">
			</div>
		
		</section>
		<section id="Mission" class="secright left">
			<div class="paras">
				<p class="sectionTag text-big">Mission</p>
				<p class="sectionSubTag text-small">The project BBMS is developed to manage Blood banks as well as to find the nearest blood 
				bank to donate blood and purchase blood. The basic purpose of SRS is to describe the complete behavior of the 
				application proposed. The system is to be very simple that can be used by anyone as well as novice. The aim of the
				system is to make the process of obtaining blood from a blood bank hassle free and corruption free and make the 
				system of blood bank management effective.</p>
			</div>
			<div class="thumbnail">
				<img src="mission.jpg" alt="Blood Quote" class="imgFluid">
			</div>
		
		</section>
		<section  id="Vision" class="secright">
			<div class="paras">
				<p class="sectionTag text-big">Vision</p>
				<p class="sectionSubTag text-small">The project BBMS is developed to manage Blood banks as well as to find the nearest blood 
				bank to donate blood and purchase blood. The basic purpose of SRS is to describe the complete behavior of the 
				application proposed. The system is to be very simple that can be used by anyone as well as novice. The aim of the
				system is to make the process of obtaining blood from a blood bank hassle free and corruption free and make the 
				system of blood bank management effective.</p>
			</div>
			<div class="thumbnail">
				<img src="download.jpg" alt="Blood Quote" class="imgFluid">
			</div>
		
		</section>
	</section>

	<section id="services" class="services">
		<h2 class="text-center text-big">Services</h2>
		<h3 class="text-l text-b"><i class="fas fa-user"></i>User</h3>
		<section class="secleft">
			<div class="total">
				<ul>
					<li>Issue Complaint</li>
					<li>Blood Bank Directory</li><br>
					<li>Blood Group Availability</li>
					<li>Thalassemia Patient</li><br>	
					<li>Blood Group Compatibility</li>
					<li>Quick Support</li>				
				</ul>
			</div>
		</section>
		<h3 class="text-l text-b"><img src="set2.png" alt="Blood Quote" class="icoimg fa-fw">Admin</h3>
		<section class="secleft">
			<div class="total">
				<ul>
					<li>Record Accessibility</li>
					<li>Manage Blood Banks</li><br>
					<li>Update Latest Notifications</li>
					<!--<li>Issue Handling</li><br>-->
					<li>Manage Blood Request of Thalassemia Patient</li><br>	
				</ul>
			</div>
		</section>
	</section>
	
	<section id="contact" class="contact">
		<h2 class="text-center text-big">Contact Us</h2>
		<!--<div>
			<input type="text" name="name" id="name">
		</div>-->
  		<p class="text-cen"><em>We'd love your feedback!</em></p>
			<div class="secright">
    				<div class="contact-img">
      					<img src="map.jpg" class="imgFluid" style="width:100%">
    				</div>
    				<div class="paras">
      					<!--<div class="info">-->
        				<div class="report-section"><i class="fa fa-map-marker fas fa-fw "> </i>Kolkata, INDIA</div>
        				<div class="report-section"><i class="fa fa-phone fas fa-fw "></i>Phone: +91 7987563399</div>
        				<div class="report-section"><i class="fa fa-envelope fas fa-fw "></i>Email: debarshichoudhury@gmail.com<br></div>
		      			<div class="report-section"><i class="fas fa-comments fa-fw"></i><!--<i class="fab fa-whatsapp"></i><i class="fab fa-whatsapp-square"></i>-->Report your Issues</div>
      					<form class="info" action="/action_page.php" target="_blank">
      		  				<div class="reportpage">
         						<div class="fhalf">
            							<input class="inputf" type="text" placeholder="Name" required name="Name">
         						</div>
          						<div class="shalf">
            							<input class="inputf" type="text" placeholder="Email" required name="Email">
          						</div>
        					</div>
       						<input class="full inputf" type="text" placeholder="Message" required name="Message">
    			    			<div class="subbtn"><button class="sbtn btn-sm" type="submit"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button></div>
     	 				</form>
    				</div>
  			</div>
	</section>
	
	<section id="loginform" class="logpage loginpage">
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
		<!--<h2 class="text-center text-big">log in</h2>
  		<p class="text-cen"><em>We'd love your feedback!</em></p>-->
		<div class="form-box">
                	<div class='button-box'>
                    		<div id='logbtn'></div>
                    			<button type='button' onclick='login()'class='toggle-btn'>Log In</button>
                    			<button type='button' onclick='register()'class='toggle-btnn'>Register</button>
                	</div>
			<div class="social-icons">
				<img src="gp.png">
				<img src="fb.png">
				<img src="tw.png">
			</div>
                	<form id='login' class='input-group-login' method="post">
                    		<div id='lerror-msg' ></div>
		    		<input type='email' name='email' id="email" class='input-field' placeholder='Email Id or User Name' required >
		    		<input type='password' name='password' id="password" class='input-field' placeholder='Enter Password' required>
		    		<select name="user_type" id="option" class='input-field field-select' required>
					<option value="">Please Choose....</option>
        				<option value="user">User</option>
        				<option value="admin">Admin</option>
     		    		</select>
		    		<input type='checkbox' class='check-box'><span>Remember Password</span>
				<div class='rem'><a href="reset.php">Reset Forgot Password</a></div>
		    		<button type='submit' name='loginbtn' id='loginbtn' class='submit-btn'>Log in</button>
		 	</form>
		 	<form id='register' class='input-group-register' method="post">
		     		<input type='text' name='username' id="username" class='input-field' placeholder='User Name' required>
			     	<input type='text' name='fullname' id="fullname" class='input-field' placeholder='Name' required>
			     	<input type='email' name='email' id="email" class='input-field' placeholder='Email Id' required>
			     	<input type='password' name='password' id="password" class='input-field' placeholder='Enter Password' required>
		    	 	<input type='password' name='cpassword' id="cpassword" class='input-field' placeholder='Confirm Password'  required>
		     		<select name="user_type" id="option" class='input-field field-select' required>
			 		<option value="">Please Choose....</option>
        		 		<option value="user">User</option>
        		 		<option value="admin">Admin</option>
     		    		</select>
		     		<input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                    		<button type='submit' name='registerbtn' id='registerbtn' class='submit-btn'>Register</button>
				</div>
	         	</form>
            	</div>
	</section>

	<footer>
		<p class="text-footer">Copyright &copy; 2022 - All Rights Reserved</p>
	</footer>
	<script src="prevnext.js"></script>
	<script src="btn.js"></script>
	<script src="popup.js"></script>
	<script src="menuselect.js"></script>
	<?php include('main.js'); ?>
 	<?php include('mains.js'); ?>
</body>
</html>
