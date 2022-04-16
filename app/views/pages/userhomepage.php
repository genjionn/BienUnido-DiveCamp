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
      <h1> Dashboard </h1><br>
    </div>
  </div>
</body>
</html>
	