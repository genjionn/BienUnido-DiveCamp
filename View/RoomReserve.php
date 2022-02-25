<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Dashboard</title>

    <link rel="stylesheet" type="text/css" href="css/RoomReserve.css?v=<?php echo time(); ?>" />

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
	
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">DIVE <b>CAMP</b>
			<label for="checkbox">
				<i id="navbtn" class="fa-solid fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/dc.jpg">
				<h4>Profile</h4>
			</div>
			<ul>
				<li>
					<a href="UserHomePage.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>Reservation</span>
					</a>
				</li>
				<li>
					<a href="UserContactUs.php">
						<i class="fa fa-message" aria-hidden="true"></i>
						<span>Contact us</span>
					</a>
				</li>
				<li>
					<a href="UserAbout.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>About</span>
					</a>
				</li>
				<li>
					<a href="UserProfile.php">
						<i class="fa fa-user" aria-hidden="true"></i>
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="LandingPage.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<button onclick="history.back()" id="backButton">Go Back</button>


	</div>



</body>
</html>