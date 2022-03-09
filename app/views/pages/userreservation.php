<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Reservation</title>
    <style>
		*{margin:0;padding:0;list-style:none;text-decoration:none;box-sizing:border-box;font-family:Poppins,sans-serif}body{background:#fff}.wrapper .header{z-index:1;background:#e1a84b;position:fixed;width:calc(100% - 0%);height:70px;display:flex;top:0}.wrapper .header .header-menu{width:calc(100% - 0%);height:100%;display:flex;justify-content:space-between;align-items:center;padding:0 20px}.wrapper .header .header-menu .title{color:#fff;font-size:25px;text-transform:uppercase;font-weight:800}.wrapper .header .header-menu .title span{color:#004f5d}.wrapper .header .header-menu .sidebar-btn{color:#fff;position:absolute;margin-left:210px;font-weight:800;cursor:pointer;transition:.3s;transition-property:color}.wrapper .header .header-menu .sidebar-btn:hover{color:#004f5d}.wrapper .header .header-menu ul{display:flex}.wrapper .header .header-menu ul li a{background:#fff;color:#000;display:block;margin:0 10px;font-size:18px;width:34px;height:34px;line-height:35px;text-align:center;border-radius:50%;transition:.3s;transition-property:background,color}.wrapper .header .header-menu ul li a:hover{background:#004f5d;color:#fff}.wrapper .sidebar{z-index:1;background:#e1a84b;position:fixed;top:70px;width:250px;height:calc(100% - 9%);transition:.3s;transition-property:width;overflow-y:auto}.wrapper .sidebar .sidebar-menu{overflow:hidden}.wrapper .sidebar .sidebar-menu .profile img{margin:20px 0;width:100px;height:100px;border-radius:50%}.wrapper .sidebar .sidebar-menu .profile p{color:#000;font-weight:600;margin-bottom:10px}.wrapper .sidebar .sidebar-menu .item{width:250px;overflow:hidden}.wrapper .sidebar .sidebar-menu .item .menu-btn{display:block;color:#000;position:relative;padding:10px 20px;transition:.3s;transition-property:color}.wrapper .sidebar .sidebar-menu .item .menu-btn:hover{color:#fff;background:#004f5d}.wrapper .sidebar .sidebar-menu .item .menu-btn i{margin:20px}.wrapper #hide-sidebar{display:none}.wrapper .main-container{width:(100% - 250px);margin-top:70px;margin-left:250px;padding:15px;background-size:cover;height:100vh;transition:.3s}.card{padding:15px 15px;box-shadow:0 4px 8px 0 rgba(0,0,0,.2);border-radius:25px;transition:.2s;float:left;width:40%;margin:0 15px 30px 15px;height:420px}.main-container h1{text-align:center}.card a{text-decoration:none;color:inherit}.card p{font-size:14px}.part2{height:22px}.card:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,.2)}.imgHotel{width:100%;height:250px;object-fit:cover}.cardGrid{background-position:center;display:flex;justify-content:center;align-items:center}.previous{color:#000}.next{color:#000}#modal{left:35%;margin:-250px 0 0 -32%;opacity:0;position:absolute;top:-50%;visibility:hidden;width:95%;box-shadow:0 3px 7px rgba(0,0,0,.25);box-sizing:border-box;transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out}#modal:target{opacity:1;top:50%;visibility:visible}#modal .modal-header{border-bottom:1px solid #e1a84b;border-radius:5px 5px 0 0}#modal h2{text-align:center;margin:0;color:#fff}#modal .btn{float:right}#modal .modal-body,#modal .modal-header{padding:10px;color:#fff}.modal-content{background:#e1a84b;position:relative;z-index:20;border-radius:5px;color:#fff}#modal .modal-body{background:#004f5d}#modal .overlay{background-color:#000;background:rgba(0,0,0,.8);height:100%;left:0;position:fixed;top:0;width:100%;z-index:10}.modal-body a{color:#fff;text-decoration:none;display:inline-block;padding:5px 10px;border-radius:5px;background-color:#e74c3c}.column{float:left;width:50%}input[type=date],select,textarea{width:100%;padding:12px;border:1px solid #004f5d;border-radius:15px;resize:vertical}input[type=number],select,textarea{width:100%;padding:12px;border:1px solid #004f5d;border-radius:15px;resize:vertical}label{padding:12px 12px 12px 0;display:inline-block}
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
				<li class="item" id="profile"><a href="<?php echo URLROOT; ?>/pages/profile" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				<li class="item" id="logout"><a href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
		<div class="main-container">
		 <h1>
			 RESERVATION
		 </h1>
		 <br>
		 <div class="cardGrid">
			 <div class="card" >
				 <a href="#modal">
					<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					<center><h4>Rare Hotel</h4></center>
					<p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bien Unido, Bohol</p>
					<p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					<p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
			 <div class="card" >
				 <a href="#modal">
					<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					<center><h4>Rare Hotel</h4></center>
					<p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bien Unido, Bohol</p>
					<p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					<p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
			 <div class="card" >
				 <a href="#modal">
					<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					<center><h4>Rare Hotel</h4></center>
					<p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bien Unido, Bohol</p>
					<p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					<p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
			 <div class="card">
				 <a href="#modal">
					<img src="img/hotel.jpg" alt="Avatar" style="width:100%;"	class="imgHotel">
					<center><h4>Rare Hotel</h4></center>
					<p><i class="fa fa-location-dot" aria-hidden="true"></i>&nbsp;&nbsp;Location: Bien Unido, Bohol</p>
					<p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;Starting from: ₱ 2000</p>
					<p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Ratings: 8/10</p>
				 </a>
			 </div>
		 </div>
		 <div id="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Room Reservation</h3>
				</div>
			<div class="modal-body">
			<div class="column" style="background-color:#004F5D;">
				<h3>Column 1</h3>
				<p>Some text..</p>
			</div>
			<div class="column" style="background-color:#004F5D;">
					<div class="row">
						<h2	>ROOM RESERVATION</h2>
						<div class="col-25">
							<label for="fname">Check-in Date</label>
						</div>
						<div class="col-75">
							<input type="date" id="fname" name="firstname" placeholder="Your first name..">
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Check-out Date</label>
						</div>
						<div class="col-75">
							<input type="date" id="lname" name="lastname" placeholder="Your last name..">
						</div>
					</div>
					<div class="row">
						<div class="column">
							<div class="col-25">
								<label for="lname">Adult</label>
							</div>
							<div class="col-75">
								<input type="number" min="0">
							</div>
						</div>
						<div class="column">
							<div class="col-25">
								<label for="lname">Children (age 0-17)</label>
							</div>
							<div class="col-75">
								<input type="number" min="0">
							</div>
						</div>
					</div>
			</div>
				<a href="#" >Close</a> 
			</div>
		</div>
		<div class="overlay"></div>
		</div>
	</div>
 </body>
</html>