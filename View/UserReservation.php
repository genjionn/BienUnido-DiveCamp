<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Reservation</title>

    <link rel="stylesheet" type="text/css" href="css/User_Reservation.css?v=<?php echo time(); ?>" />

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
	
</head>
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
				 <li class="item"><a href="UserHomePage.php" class="menu-btn"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
				 <li class="item" id="reservation"><a href="UserReservation.php" class="menu-btn"><i class="fas fa-book"></i><span>Reservation</span></a></li>
				 <li class="item" id="contact-us"><a href="UserContactUs.php" class="menu-btn"><i class="fas fa-message"></i><span>Contact us</span></a></li>
				 <li class="item" id="about"><a href="UserAbout.php" class="menu-btn"><i class="fas fa-circle-info"></i><span>About us</span></a></li>
				 <li class="item" id="profile"><a href="UserProfile.php" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				 <li class="item" id="logout"><a href="UserLogin.php" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
 
		<div class="main-container">
		 <h1>
			 RESERVATION
		 </h1>
		 <br>
		 <div class="cardGrid">
			 <div class="card" >
				 <a href="RoomReserve.php">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
 
			 <div class="card" >
				 <a href="RoomReserve.php">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
 
			 <div class="card" >
				 <a href="RoomReserve.php">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
			 <div class="card" >
				 <a href="RoomReserve.php">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
		 </div>
		 <div>
			 <center>
				 <a href="#" class="previous">&laquo; Previous</a>
				 <a href="#" class="next">Next &raquo;</a>
			 </center>
		 </div>
		</div>
	</div>
 </body>
</html>