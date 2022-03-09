<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Profile</title>

    <style>
		*{margin:0;padding:0;list-style:none;text-decoration:none;box-sizing:border-box;font-family:"Poppins",sans-serif;}
		body{background:#fff;}
		.wrapper .header{z-index:1;background:#E1A84B;position:fixed;width:calc(100% - 0%);height:70px;display:flex;top:0;}
		.wrapper .header .header-menu{width:calc(100% - 0%);height:100%;display:flex;justify-content:space-between;align-items:center;padding:0 20px;}
		.wrapper .header .header-menu .title{color:white;font-size:25px;text-transform:uppercase;font-weight:800;}
		.wrapper .header .header-menu .title span{color:#004F5D;}
		.wrapper .header .header-menu .sidebar-btn{color:white;position:absolute;margin-left:210px;font-weight:800;cursor:pointer;transition:0.3s;transition-property:color;}
		.wrapper .header .header-menu .sidebar-btn #hide-sidebar{display:none;}
		.wrapper .header .header-menu .sidebar-btn:hover{color:#004F5D;}
		.wrapper .header .header-menu ul{display:flex;}
		.wrapper .header .header-menu ul li a{background:#fff;color:#000;display:block;margin:0 10px;font-size:18px;width:34px;height:34px;line-height:35px;text-align:center;border-radius:50%;transition:0.3s;transition-property:background, color;}
		.wrapper .header .header-menu ul li a:hover{background:#004F5D;color:#fff;}
		.wrapper .sidebar{z-index:1;background:#E1A84B;position:fixed;top:70px;width:250px;height:calc(100% - 9%);transition:0.3s;transition-property:width;overflow-y:auto;}
		.wrapper .sidebar .sidebar-menu{overflow:hidden;}
		.wrapper .sidebar .sidebar-menu .profile img{margin:20px 0;width:100px;height:100px;border-radius:50%;}
		.wrapper .sidebar .sidebar-menu .profile p{color:#000;font-weight:600;margin-bottom:10px;}
		.wrapper .sidebar .sidebar-menu .item{width:250px;overflow:hidden;}
		.wrapper .sidebar .sidebar-menu .item .menu-btn{display:block;color:#000;position:relative;padding:10px 20px;transition:0.3s;transition-property:color;}
		.wrapper .sidebar .sidebar-menu .item .menu-btn:hover{color:#fff;background:#004F5D;}
		.wrapper .sidebar .sidebar-menu .item .menu-btn i{margin:20px;}
		.wrapper .main-container{width:(100% - 250px);margin-top:70px;margin-left:250px;padding:15px;background-size:cover;height:100vh;transition:0.3s;}
		/* Profile */
		.main-container{background:#fff;}
		.main-container .profile-grid{display:flex;height: auto;width:100%;padding: 20px 20px;background: #fff;border-radius:15px;box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);-webkit-box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);-moz-box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);}
		.main-container .profile-grid img{display: block;width: 100px;height: 100px;border-radius: 100px;}
		.main-container .profile-grid .u-info{padding: 15px 20px;display: inline-block;}
		.main-container .profile-grid .u-info label{border: 1px solid #004F5D;border-radius: 100px;width: 150px;text-align:center;padding: 0 5px;}
		.main-container .profile-grid .u-info i{font-size: 12px;}
		.main-container .profile-grid input{display:none;}
		.main-container .profile-info{display:block;height: auto;width:100%;padding: 20px 20px;background: #fff;border-top-right-radius: 15px;border-top-left-radius: 15px;box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);-webkit-box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);-moz-box-shadow: -2px 0px 21px 1px rgba(0,0,0,0.56);}
		input[type=text], select, textarea {width: 100%;padding: 12px;border: 1px solid #004F5D;border-radius: 15px;resize: vertical;}
		input[type=email], select, textarea {width: 100%;padding: 12px;border: 1px solid #004F5D;border-radius: 15px;resize: vertical;}
		input[type=password], select, textarea {width: 100%;padding: 12px;border: 1px solid #004F5D;border-radius: 15px;resize: vertical;}
		label {padding: 12px 12px 12px 0;display: inline-block;}
		input[type=submit] {width: 100px;margin: 5px;background-color: blue;color: white;padding: 15px 20px;border: 1px solid darkblue;border-radius: 15px;cursor: pointer;float: right;}
		input[type=button] {width: 100px;margin: 5px;background-color: red;color: white;padding: 15px 20px;border: 1px solid darkred;border-radius: 15px;cursor: pointer;float: right;}
		input[type=button]:hover {background-color: darkred;}
		input[type=submit]:hover {background-color: darkblue;}
		.profile-info form {border-top-right-radius: 15px;border-top-left-radius: 15px;background-color: #f2f2f2;padding: 20px;}
		.col-25 {font-size: 14px;float: left;width: 15%;margin-top: 6px;margin-left: 50px;}
		.col-75 {float: left;width: 70%;margin-top: 10px;}
		.row:after {content: "";display: table;clear: both;}

		@media screen and (max-width: 600px) {.col-25, .col-75, input[type=submit], input[type=button],input[type=text] {font-size: 12px;width: 100px;height: 50px;margin-top: 0;}body h3{font-size:14px;}
		.main-container .profile-grid{width: 100%;margin-top: 0;}
		.main-container .profile-grid img{width: 50px;height:50px;margin-top: 0;}
		.main-container .profile-grid .u-info h2{font-size: 12px;}
		.main-container .profile-grid .u-info label{border-width:1px;font-size: 10px;width: 100%;margin-top: 0;}}
		/* Media queries */
</style>

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<div class="header-menu">
				<div class="title">Dive <span>Camp</span></div>
				<div class="sidebar-btn">
				 <input type="checkbox" name="hide-sidebar" id="hide-sidebar" value="true" />
					<label for="hide-sidebar">
						<i id="navbtn" class="fa-solid fa-bars" aria-hidden="true"></i>
					</label>
				</div>
				<ul>
					<li><a href="#"><i class="fas fa-desktop"></i></a></li>
					<li><a href="#"><i class="fas fa-book"></i></a></li>
					<li><a href="#"><i class="fas fa-power-off"></i></a></li>
				 </ul>
			</div>
		</div>
		<div class="sidebar">
			<div class="sidebar-menu">
				<center class="profile">
					<img src="img/dc.jpg" alt="">
					<p>Profile</p>
				</center>
				<li class="item"><a href="<?php echo URLROOT; ?>/pages/home" class="menu-btn"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
				<li class="item" id="reservation"><a href="<?php echo URLROOT; ?>/pages/reservation" class="menu-btn"><i class="fas fa-book"></i><span>Reservation</span></a></li>
				<li class="item" id="contact-us"><a href="<?php echo URLROOT; ?>/pages/contact" class="menu-btn"><i class="fas fa-message"></i><span>Contact us</span></a></li>
				<li class="item" id="about"><a href="<?php echo URLROOT; ?>/pages/about" class="menu-btn"><i class="fas fa-circle-info"></i><span>About us</span></a></li>
				<li class="item" id="profile"><a href="<?php echo URLROOT; ?>/pages/profile" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				<li class="item" id="logout"><a href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
		<div class="main-container">
			<div class="profile-grid">
				<img src="img/dc.jpg" alt="">
				<div class="u-info">
					<h2>Profile Picture</h2>
					<input type="file" id="file">
					<label for="file">Edit Profile</label><br>
					<i>Acceptable formats: .jpg and .png only</i>
				</div>
			</div>
			<br>
			<div class="profile-info">
				<form action="#">
					<!-- Account Information -->
					<div class="row">
						<h3>Account Information</h3>
						<div class="col-25">
							<label for="fname">First Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="fname" name="firstname" placeholder="Your first name..">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Last Name</label>
						</div>
						<div class="col-75">
							<input type="text" id="lname" name="lastname" placeholder="Your last name..">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Email Address</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Your email address..">
						</div>
					</div>
					<br>
					<!-- Password Information -->
					<div class="row">
						<h3>Password Information</h3>
						<div class="col-25">
							<label for="fname">Current Password</label>
						</div>
						<div class="col-75">
							<input type="password" id="current-pass" name="current-pass" placeholder="Your current password..">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">New Password</label>
						</div>
						<div class="col-75">
							<input type="password" id="new-password" name="new-password" placeholder="Your new password..">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Confirm Password</label>
						</div>
						<div class="col-75">
							<input type="password" id="confirm-pass" name="confirm-pass" placeholder="Confirm your pasasword..">
						</div>
					</div>
					<br>
					<div class="row">
					<input type="submit" value="Save">
						<input type="button" value="Cancel">		
					</div>
 				</form>
			</div>
		</div>
	</div>
</body>
</html>