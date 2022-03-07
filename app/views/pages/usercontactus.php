<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-ContactUs</title>

    <style>
		*{margin:0;padding:0;list-style:none;text-decoration:none;box-sizing:border-box;font-family:"Poppins",sans-serif;}
		body{background:#fff;}
		.wrapper .header{z-index:1;background:#E1A84B;position:fixed;width:calc(100% - 0%);height:70px;display:flex;top:0;}
		.wrapper .header .header-menu{width:calc(100% - 0%);height:100%;display:flex;justify-content:space-between;align-items:center;padding:0 20px;}
		.wrapper .header .header-menu .title{color:white;font-size:25px;text-transform:uppercase;font-weight:800;}
		.wrapper .header .header-menu .title span{color:#004F5D;}
		.wrapper .header .header-menu .sidebar-btn{color:white;position:absolute;margin-left:210px;font-weight:800;cursor:pointer;transition:0.3s;transition-property:color;}
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
		.contact{font-family: "Lato", Arial, sans-serif;font-size: 16px;line-height: 1.8;font-weight: normal;position: relative;min-height: 100vh;padding: 50px 100px;display: flex;justify-content: center;align-items: center;flex-direction: column;background-size: cover;}
		.contact .content{max-width: 800px;text-align: center;}
		.contact .content h2{font-size: 36px;font-weight: 500px;color: #333;}
		.contact .content p{font-weight: 300px;color: #333;}
		.container{width: 100%;display: flex;justify-content: center;align-items: center;margin-top: 30px;}
		.container .contactInfo{width: 50%;display: flex;flex-direction: column;}
		.container .contactInfo .box{position: relative;padding: 20px 0px;display: flex;}
		.container .contactInfo .box .icon{min-width: 60px;height: 60px;background: #fff;display: flex;justify-content: center;align-items: center;border-radius: 50%;font-size: 22px;}
		.container .contactInfo .box .text{display: flex;margin-left: 20px;font-size: 20px;color: #000000;flex-direction: column;font-weight: 500;}
		.container .contactInfo .box .text h3{font-weight: 500;color: #000000;}
		.contactForm{width: 40%;padding: 40px;background: #3c3d47;border-radius: 10px;}
		.contactForm h2{padding-bottom: 10px;font-size: 30px;color: #fff;font-weight: 500;}
		.contactForm .inputBox{position: relative;width: 100%;margin-top: 10px;}
		.contactForm .inputBox input,
		.contactForm .inputBox textarea{width: 100%;padding: 5px 0;font-size: 16px;margin: 10px 0;border: none;border-bottom: 2px solid #333; outline: none;resize: none;}
		.contactForm .inputBox span{position: absolute;left: 0;padding: 0px 0;font-size: 16px;margin: 10px 0;pointer-events: none;transition: 0.5s;color: #00bcd4;}
		.contactForm .inputBox input:focus ~ span,
		.contactForm .inputBox input:valid ~ span,
		.contactForm .inputBox textarea:focus ~ span,
		.contactForm .inputBox textarea:valid ~ span{color: #00bcd4;font-size: 12px;transform: translateY(-20px);}
		.contactForm .inputBox input[type="submit"]{width: 100px;background: #01d28e;color: #fff;border: none;cursor: pointer;padding: 10px;font-size: 18px;border-radius: 10px;}
		@media (max-width: 991px){
		.contact{padding: 50px;}.container{flex-direction: column;}
		.container .contactInfo{margin-bottom: 40px;}
		.container .contactInfo,
		.contactForm{width: 100%;}}
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
			<section class="contact">
				<div class="content">
 			<h2>Contact Us</h2>
			<p>DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, DiveCamp, .</p>
		</div>	
			<div class="container">
				<div class="contactInfo">
					<div class="box">
						<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h3>Address</h3>
							<p>Puerto San Pedro, Bien Unido, Bohol</p>
						</div>
					</div>
					<div class="box">
						<div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i>
						</div>
							<div class="text">
							<h3>Phone</h3>
							<p>09074555173</p>
						</div>
					</div>
					<div class="box">
						<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
							<div class="text">
							<h3>Email</h3>
							<p>info_bienunido@yahoo.com.ph</p>
						</div>
					</div>
				</div>
				<div class="contactForm">
					<form>
						<h2>How can we help you?</h2>
						<div class="inputBox">
							<input type="text" name="required">
							<span>Full Name</span>
						</div>
						<div class="inputBox">
							<input type="text" name="required">
							<span>Email</span>
						</div>
						<div class="inputBox">
							<textarea required="required"></textarea>
							<span>Type your message</span>
						</div>
						<div class="inputBox">
							<input type="submit" name="" value="Send">
						</div>
					</form>
				</div>
			</div>
		</section>	
	</div>
 </body>
</html>