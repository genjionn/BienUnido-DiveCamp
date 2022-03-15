<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-family: 'Poppins'sans-serif;
  font-size: 15px;
  scroll-behavior: smooth;
  overflow-y: scroll;
  scroll-behavior: smooth;
}

.head {
  display: inline-block;
  margin-left: 25px;
  font-size: 18px;
  text-align: left;
  padding: 40px 20px;
}
.head .logo{
  color: #9dc88d;
}
.head .logo b{
  color: #f1b24a;
}
/* sidebar */
.sidebar {

  margin: 0; 
  padding: 0px 0px;
  width: 230px;
  background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
  position: fixed;
  height: 100%;
  overflow: auto;
  overflow-x: hidden;
}
.sidebar .profile img{
  margin: 20px;
  height: 100px;
  width: 100px;
  border: 4px solid #164a41;
  border-radius: 50px;
}
.sidebar b{
  color: #fff;
  float: center;
}
.sidebar .side-nav{
  display: inline-block;
  margin: 50px 0;
}
.sidebar .side-nav i{
  border-radius: 50px;
  border: 2px solid #f1b24a;
  padding: 5px 5px;
  background-color: #f1b24a;
  color: #164a41;
}
.sidebar .side-nav a{
  width: 230px;
  display: block;
  letter-spacing: 1px;
  text-decoration: none;
  color: #fff;
  font-size: 14px;
  padding: 10px 30px;
  justify-content: center;
  align-items: center;
}
.sidebar .side-nav a:hover{
  background:#fff;
  padding: 10px 30px;
  color: #164a41; 
}
.sidebar .side-nav i:hover{
  background: #164a41;;
  border: 2px solid #164a41;
  color: #f1b24a; 
}
/* container */
.container{
  width: 100%;
  height: auto;
  padding: 10px 0;
}
.container .content{
  line-height: 30px;
  display: block;
  height: auto;
  width: auto;
  margin-left: 240px;
  padding: 5px 10px;
}
.container .content h1{
  color: #164a41;
  text-align: center;
  width: auto;
  background-image: linear-gradient(to bottom, #d5f0d6, #dff4df, #e9f7e7, #f2fbf1, #ffffff);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  padding: 50px 0px;
}
.container .content .card{
  display: inline-block;
  padding: 20px 30px;
  border-radius: 25px;
  margin: 15px;
  box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
  -webkit-box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
}
.container .content .card img{
  border: 2px solid #f1b24a;
  width: 250px;
  height: 250px;
}
.container .content .card h4{
  text-align: center;
}
.container .content .card a{
  color: #164a41;
  text-decoration: none;
  text-align: left;
}
/* Modal */
#modal {left: 35%;margin: -250px 0 0 -32%;opacity: 0;position: absolute;top: -50%;visibility: hidden;width: 95%;box-shadow: 0 3px 7px rgba(0,0,0,.25);box-sizing: border-box;transition: all .4s ease-in-out;-moz-transition: all .4s ease-in-out;-webkit-transition: all .4s ease-in-out;}
		#modal:target {opacity: 1;top: 50%;visibility: visible;}
		#modal .modal-header {border-radius: 5px 5px 0 0}
		#modal h2 {text-align: center;	margin: 0;color: #fff;}
		#modal .btn { float: right; }
		#modal .modal-body, #modal .modal-header {padding: 10px;color: #fff;}
		.modal-content {background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);position: relative;z-index: 20;border-radius: 5px;color: #fff}
		#modal .modal-body {background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a); }
		#modal .overlay {background-color: #000;background: rgba(0,0,0,.8);height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 10;}
		.modal-body a {color: #fff;text-decoration: none;display: inline-block;padding: 5px 10px;border-radius: 5px;background-color: #E74C3C; }		
/* media */

@media screen and (max-width: 600px) {
  html{
    overflow-x: hidden;
  }
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    font-size: 12px;
  }
  .sidebar .head{
    margin-left: 50px;
    font-size: 14px;
  }
  .sidebar .profile img{
    height: 80px;
    width: 80px;
  }
  .sidebar .side-nav a{
    font-size: 12px;
    width: 510px;
  }
  .container .content{
      width: 95%;
      margin: 2%;
  }
}

.column {
  float: left;
  width: 50%;
  padding: 10px; /* Should be removed. Only for demonstration */
}
input[type=date], select, textarea {width: 100%;padding: 12px;border: 1px solid #004F5D;border-radius: 15px;resize: vertical;}
		input[type=number], select, textarea {width: 100%;padding: 12px;border: 1px solid #004F5D;border-radius: 15px;resize: vertical;}
</style>
</head>
<body>
  
<div class="sidebar">
    <div class="head">
      <label class="logo"><i class="fa fa-house"></i><span>&nbsp;&nbsp;</span>Dive<b>Camp</b></label>
    </div>
      <center class="profile"><br>
        <img src="profile.jpg" alt=""><br>
        <b><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></b>
      </center>
      <div class="side-nav nav">
        <a class="nav1"  href="<?php echo URLROOT; ?>/pages/home" class="menu-btn"><i class="fas fa-desktop"></i><span>&nbsp;&nbsp;</span> Dashboard</a><br>
        <a class="nav2" href="<?php echo URLROOT; ?>/pages/reservation" class="menu-btn"><i class="fa fa-book"></i><span>&nbsp;&nbsp;</span> Reservation</a><br>
        <a class="nav3" href="<?php echo URLROOT; ?>/pages/profile" class="menu-btn"><i class="fa fa-user-circle"></i><span>&nbsp;&nbsp;</span> Profile</a><br>
        <a class="nav4" href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fa fa-power-off"></i><span>&nbsp;&nbsp;</span> Logout</a><br>
      </div>  
  </div>
  <div class="container">
    <div class="content">
      <h1> RESERVATION </h1><br>
      <center>
        <div class="card">
          <a href="#modal">
            <img src="../img/hotel.jpg" alt="">
            <h4>Rare Hotel</h4>
            <p><i class="fa fa-location-dot" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Location: Bien Unido, Bohol</p>
            <p><i class="fa fa-peso-sign" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Starting from: ₱ 2000</p>
            <p><i class="fa fa-star" aria-hidden="true"></i><span>&nbsp;</span>Ratings: 8/10</p>
          </a>
      </div>
      <div class="card">
        <a href="#modal">
          <img src="../img/hotel.jpg" alt="">
          <h4>Rare Hotel</h4>
          <p><i class="fa fa-location-dot" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Location: Bien Unido, Bohol</p>
          <p><i class="fa fa-peso-sign" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Starting from: ₱ 2000</p>
          <p><i class="fa fa-star" aria-hidden="true"></i><span>&nbsp;</span>Ratings: 8/10</p>
        </a>
    </div>
    <div class="card">
      <a href="#modal">
        <img src="../img/hotel.jpg" alt="">
        <h4>Rare Hotel</h4>
        <p><i class="fa fa-location-dot" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Location: Bien Unido, Bohol</p>
        <p><i class="fa fa-peso-sign" aria-hidden="true"></i><span>&nbsp;&nbsp;</span>Starting from: ₱ 2000</p>
        <p><i class="fa fa-star" aria-hidden="true"></i><span>&nbsp;</span>Ratings: 8/10</p>
      </a>
    </div>
      </center>
    </div>
    <div id="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Room Reservation</h3>
				</div>
			<div class="modal-body">

			<div class="column">
				<h3>Column 1</h3>
				<p>Some text..</p>
			</div>
			<div class="column">
				
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