<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Dashboard</title>

    <style>
		*{padding:0;margin:0;box-sizing:border-box;font-family:'Poppins', sans-serif;overflow:hidden;}
		.header{position:fixed;width:100%;display:flex;justify-content:space-between;align-items:center;padding:15px 30px;background:#7d2ae8;color:#fff;}
		.u-name{font-size:16px;padding-left:17px;}
		.u-name b{color:black;}
		.header i{font-size:16px;cursor:pointer;color:#fff;}
		.header i:hover{color:black;}
		.user-p{text-align:center;padding-left:10px;padding-top:25px;}
		.user-p img{width:100px;border-radius:50%;}
		.user-p h4{color:black;padding:5px 0;letter-spacing:2px;}
		.side-bar{position:relative;top:50px;width:240px;background:#7d2ae8;min-height:100vh;transition:500ms width;}
		.body{display:flex;}
		.section-1{width:100%;background-size:cover;display:flex;flex-direction:column;}
		.section-1 h1{color:black;font-size:30px;}
		.section-1 p{color:black;font-size:20px;background:#fff;padding:7px;border-radius:5px;}
		.side-bar ul{margin-top:20px;list-style:none;}
		.side-bar ul li{font-size:16px;padding:15px 0px;padding-left:20px;transition:500ms background;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
		.side-bar ul li:hover{background:#fff;}
		.side-bar ul li a{text-decoration:none;color:black;cursor:pointer;letter-spacing:2px;}
		.side-bar ul li a i{display:inline-block;padding-right:10px;font-size:16px;}
		#navbtn{display:inline-block;margin-left:50px;font-size:16px;transition:500ms color;}
		#checkbox{display:none;}
		#checkbox:checked ~ .body .side-bar{width:60px;}
		#checkbox:checked ~ .body .side-bar .user-p{visibility:hidden;}
		#checkbox:checked ~ .body .side-bar a span{display:none;}
		.card{box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);transition:0.2s;float:left;width:40%;margin:0px 15px 30px 15px;height:420px;}
		.part2{height:22px;}
		.card:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2);}
		.imgHotel{width:100%;height:250px;object-fit:cover;}
		.cardGrid{background-position:center;display:flex;justify-content:center;align-items:center;}
		.previous{color:black;}
		.next{color:black;}
		#backButton{position:relative;padding:15px 0px;border-radius:50px;border:none;background-color:#009688;color:white;font-size:18px;top:100px;left:50%;width:150px;align-items:center;justify-content:center;text-align:center;}
	</style>

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