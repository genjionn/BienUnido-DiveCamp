<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-About</title>
    <style>
		*{margin:0;padding:0;list-style:none;text-decoration:none;box-sizing:border-box;font-family:Poppins,sans-serif}body{background:#fff}.wrapper .header{z-index:1;background:#e1a84b;position:fixed;width:calc(100% - 0%);height:70px;display:flex;top:0}.wrapper .header .header-menu{width:calc(100% - 0%);height:100%;display:flex;justify-content:space-between;align-items:center;padding:0 20px}.wrapper .header .header-menu .title{color:#fff;font-size:25px;text-transform:uppercase;font-weight:800}.wrapper .header .header-menu .title span{color:#004f5d}.wrapper .header .header-menu .sidebar-btn{color:#fff;position:absolute;margin-left:210px;font-weight:800;cursor:pointer;transition:.3s;transition-property:color}.wrapper .header .header-menu .sidebar-btn:hover{color:#004f5d}.wrapper .header .header-menu ul{display:flex}.wrapper .header .header-menu ul li a{background:#fff;color:#000;display:block;margin:0 10px;font-size:18px;width:34px;height:34px;line-height:35px;text-align:center;border-radius:50%;transition:.3s;transition-property:background,color}.wrapper .header .header-menu ul li a:hover{background:#004f5d;color:#fff}.wrapper .sidebar{z-index:1;background:#e1a84b;position:fixed;top:70px;width:250px;height:calc(100% - 9%);transition:.3s;transition-property:width;overflow-y:auto}.wrapper .sidebar .sidebar-menu{overflow:hidden}.wrapper .sidebar .sidebar-menu .profile img{margin:20px 0;width:100px;height:100px;border-radius:50%}.wrapper .sidebar .sidebar-menu .profile p{color:#000;font-weight:600;margin-bottom:10px}.wrapper .sidebar .sidebar-menu .item{width:250px;overflow:hidden}.wrapper .sidebar .sidebar-menu .item .menu-btn{display:block;color:#000;position:relative;padding:10px 20px;transition:.3s;transition-property:color}.wrapper .sidebar .sidebar-menu .item .menu-btn:hover{color:#fff;background:#004f5d}.wrapper .sidebar .sidebar-menu .item .menu-btn i{margin:20px}.wrapper .main-container{width:(100% - 250px);margin-top:70px;margin-left:250px;padding:15px;background-size:cover;height:100vh;transition:.3s}.about-picture{height:150px;width:150px;margin:0 auto;margin-top:15px;box-shadow:5px 5px 10px gray}.card-dodong{padding:10px;margin-top:15px;max-height:800px;height:100%;transition:.35s;border:1px solid #dcdcdc;box-shadow:5px 5px 10px #dcdcdc}.card-dodong:hover{transform:translateY(-.25em)}.a-get{transition:.5s}.a-get:focus:hover,.a-get:hover{transform:translateY(-.4em)}@media (max-width:1200px){.about-picture{height:100px;width:100px}.card-dodong{font-size:12px;height:100%}}@media (max-width:768px){.border-mid{display:none}}
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
		<h4 class="display-4 text-center">THE TEAM</h4>
		<hr>
		<div class="container" >
			<div class="row">
				<div class="col-md-4">
					<div class="card card-dodong">
						<div style="border-radius: 50%;" class="bg-image hover-overlay ripple about-picture" data-mdb-ripple-color="light">
							<img src="{% static 'img/image1.jpg' %}"
								class="img-fluid" height="100%"/>
							<a href="#!">
								<div class="mask" style="background: rgba(251, 251, 251, 0.15);"></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title text-center">John Philip Samson</h4>
							<p class="card-text text-center"><strong>Front-end Developer</strong></p>
							<p class="card-text text-md-left">
							<b>Professional Goals:</b> <i>Web Developer</i> <br>
							<b>Hobbies:</b> Playing Online Games, Basketball, Taking care of pets, Watching movies <br>
							<b>Skills:</b> Listening, Communication, Adaptability skills <br>
							<b>Areas of Expertise:</b> <i>Python, Wordpress, Html, Css, Java</i>
							</p>
						</div>
						<hr>
						<li class="nav-item me-3 me-lg-0 d-flex flex-row justify-content-center mb-2" style="list-style: none; text-align: center;">
							<a class="nav-link a-get" href="https://www.facebook.com/EphilipsY" rel="nofollow"
								target="_blank">
								<i class="fab fa-facebook text-primary fa-2x"></i>
							</a>
							<a class="nav-link a-get" href="#" rel="nofollow">
								<i class="fab fa-twitter text-primary fa-2x"></i>
							</a>
							<a class="nav-link a-get" href="https://github.com/EphilipsY" rel="nofollow">
								<i class="fab fa-github text-dark fa-2x"></i>
							</a>
						</li>
					</div>
				</div>
			</div>
		</div>	
	</div>
 </body>
</html>