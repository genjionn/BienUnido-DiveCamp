<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Reservation</title>

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
		.wrapper #hide-sidebar{display: none;}
		/* Card */
		.wrapper .main-container{width:(100% - 250px);margin-top:70px;margin-left:250px;padding:15px;background-size:cover;height:100vh;transition:0.3s;}
		.card{padding:15px 15px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);border-radius:25px;transition:0.2s;float:left;width:40%;margin:0px 15px 30px 15px;height:420px;}
		.main-container h1{text-align:center;}
		.card a{text-decoration:none;color:inherit;}
		.card p{font-size:14px;}
		.part2{height:22px;}
		.card:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);}
		.imgHotel{width:100%;height:250px;object-fit:cover;}
		.cardGrid{background-position:center;display:flex;justify-content:center;align-items:center;}
		.previous{color:black;}
		.next{color:black;}
		/* Modal */
		.main-container .modal-container{position: relative; bottom: 115%; width: 100%; height: 95%; background:#004F5D; border-radius: 15px; display: none;}
		.main-container .modal-container .modal-header{ background: #E1A84B; width: 100%; margin: 0; border-radius: 15px 15px 0 0;}
		.main-container .modal-container .modal-header h2{text-align: center; }
		.close {position: relative; font-size: 18px; left: 1025px;background: none;color:#000; cursor: pointer;text-decoration: none; padding: 10px 10px;margin: 0;}
	</style>

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
				 <li class="item"><a href="<?php echo URLROOT; ?>/pages/home" class="menu-btn"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
				 <li class="item" id="reservation"><a href="<?php echo URLROOT; ?>/pages/reservation" class="menu-btn"><i class="fas fa-book"></i><span>Reservation</span></a></li>
				 <li class="item" id="contact-us"><a href="<?php echo URLROOT; ?>/pages/contact" class="menu-btn"><i class="fas fa-message"></i><span>Contact us</span></a></li>
				 <li class="item" id="about"><a href="<?php echo URLROOT; ?>/pages/about" class="menu-btn"><i class="fas fa-circle-info"></i><span>About us</span></a></li>
				 <li class="item" id="profile"><a href="profile" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				 <li class="item" id="logout"><a href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
 
		<div class="main-container">
		 <h1>
			 RESERVATION
		 </h1>
		 <br>
		 <div class="cardGrid">
			 <div class="card" onclick="document.getElementById('modal').style.display='block'">
				 <a href="#modal">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
 
			 <div class="card" onclick="document.getElementById('modal').style.display='block'">
				 <a href="#modal">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
 
			 <div class="card" onclick="document.getElementById('modal').style.display='block'">
				 <a href="#modal">
					 <img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					 <center><h4>Rare Hotel</h4></center>
					 <p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bohol</p>
					 <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					 <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
			 <div class="card" onclick="document.getElementById('modal').style.display='block'">
				 <a href="#modal">
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
		<div class="main-container">
			<div id="modal" class="modal-container">
				<div class="modal-header">
					<i class="close fa fa-circle-xmark" onclick="document.getElementById('modal').style.display='none'"></i>
					<h2>Room Reservation</h2><br>
				</div>
			</div>
		</div>
	</div>
 </body>
</html>