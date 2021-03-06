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
  font-family: 'Poppins',sans-serif;
  font-size: 15px;
  scroll-behavior: smooth;
  overflow-y: scroll;
  scroll-behavior: smooth;
}

.head {
  display: inline-block;
  margin-left: 30px;
  font-size: 18px;
  text-align: left;
  padding: 40px 20px;
}
.head .logo{
  color: #933b27;
  font-size: 22px;
  font-weight: 600;
  text-shadow: 2px 2px lightgray;
}
.head .logo b{
  color: #16558f;
}
/* sidebar */
.sidebar {
  margin: 0; 
  padding: 0px 0px;
  width: 230px;
  background: #fbc337;
  position: fixed;
  height: 100%;
  overflow: auto;
  overflow-x: hidden;
}
.sidebar .profile img{
  margin: 20px;
  height: 100px;
  width: 100px;
  border: 2px solid #ffffff;
  border-radius: 50px;
  object-fit:cover;
}
.sidebar b{
  color: #000;
  float: center;
}
.sidebar .side-nav{
  display: inline-block;
  margin: 50px 0;
}
.sidebar .side-nav i{
  border-radius: 50px;
  border: 2px solid #fff;
  padding: 10px 10px;
  background-color: #933b27;
  color: #fbc337;
}
.sidebar .side-nav a{
  width: 230px;
  display: block;
  letter-spacing: 1px;
  text-decoration: none;
  color: #000;
  font-size: 14px;
  padding: 10px 30px;
  justify-content: center;
  align-items: center;
}
.sidebar .side-nav a:hover{
  background:#16558f;
  padding: 10px 30px;
  color: #fff; 
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
  color: #933b27;
  text-align: center;
  width: auto;
  letter-spacing: 4px;
  /* background-image: linear-gradient(to bottom, #ffeb6e, #f8f193, #f4f6b5, #f4f9d6, #ffffff); */
  border-top-right-radius: 10px;
  padding: 30px 0px;
  text-shadow: 2px 2px lightgray;
}
.container .content .card{
  display: inline-block;
  padding: 20px 30px;
  border-radius: 10px;
  margin: 15px;
  box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
  -webkit-box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
  -moz-box-shadow: 1px 1px 16px -5px rgba(0,0,0,0.75);
}
.container .content .card img{
  width: 250px;
  height: 250px;
}
.container .content .card h4{
  text-align: center;
}
.container .content .card a{
  color: #000;
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
      <label class="logo">Dive<b>&nbsp;Camp</b></label>
    </div>
      <center class="profile"><br>
      <img src="../public/img/uploads/<?php echo $_SESSION['picname'];?>" alt=""><br>
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
        <?php echo $data['roomid'];
        foreach($data['rooms'] as $room): ?>
        <div class="card">
          <form method="POST">
            <img src="../public/img/roomimg/<?php echo $room->roomimage ?>" alt="img">
            <input type="hidden" name="roomid" value="<?php echo $room->roomid ?>">
            <h2><?php echo $room->roomname; ?></h2>
            <p><?php echo $room->roomsavailable?><span> room/s left</span></p>
            <p><i class="fa fa-peso-sign" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo number_format($room->roomprice, 2); ?><span></span></p>
            <p><i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $room->rating ?>/10 <span>rating</span></p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $room->roomlocation ?></p>
            <button id="" type="submit" name="ReserveRoom">Reserve</button>
          </form>
        </div>     
      <?php endforeach; ?>
    </center>
    </div>
    <!-- <div id="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Room Reservation</h3>
				</div>
			<div class="modal-body">
			<div class="column">
				<h3></h3>
				<p></p>
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
								<label for="lname">Children (age 12 and below)</label>
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
		</div> -->
  </div>
  <script type="text/javascript">
    $(document).ready(function()){
      $('')
    }
  </script>
  </body>
</html>