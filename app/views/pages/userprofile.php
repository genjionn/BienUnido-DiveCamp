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
  object-fit: cover;
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
  background-color: #fff;
  padding: 15px 0;
}
.container .profile-head{
  display: flex;
  justify-content: left;
  width: 80%;
  background-image: linear-gradient(to bottom, #d5f0d6, #dff4df, #e9f7e7, #f2fbf1, #ffffff);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  margin-left: 250px;
  padding: 30px 50px;
}
.container .profile-head img{
  border: 1px solid #164a41;
  height: 100px;
  width: 100px;
  padding: 1px 1px;
  border-radius: 50px;
  object-fit: cover;
}
.container .profile-head .edit-profile{
  display: inline-block;
  font-size: 12px;
  padding: 5px 25px;
  line-height: 25px;
}
.container .profile-head .edit-profile h2{
  letter-spacing: 1px;
  color: #164a41;
  font-size: 24px;
  padding: 10px 0px;
  text-align: left;
} 
.container .profile-head .edit-profile input{
  display: flex;
}
.container .profile-head .edit-profile label{
  letter-spacing: 2px;
  border: 1px solid #164a41;
  padding: 5px 15px;
  text-align: left;
  border-radius: 50px;
}
.container .profile-head .edit-profile label:hover{
  background-color: #f1b24a;
}
.container .profile-head .edit-profile i{
  color: #f1b24a;
  text-align: right;
  letter-spacing: 1px;
  font-size: 12px;
}
/* profile information */
.container .profile-info{
  display: flex;
  width: 80%;
  margin-left: 250px;
  padding: 50px 10px;
}
.container .profile-info .profile-content{
  display: inline-block;
  width: 100%;
  height: auto;
  padding: 10px 10px;
}
.container .profile-info .profile-content .profile-input{
  display: inline-block;
  padding: 10px 10px;
  width: auto;
  margin-left: 20px;
}
.container .profile-info .profile-content #email{
  display: flex;
  padding: 10px 10px;
  width: auto;
  margin-left: 20px;
}
.container .profile-info .profile-content #email input{
  width: 900px ;
}
.container .profile-info .profile-content .profile-input input{
  padding: 15px 25px;
  font-size: 14px;
  border-radius: 15px;
  width: 400px;
  border: 2px solid #164a41;
}
.container .profile-info .profile-content .profile-input i{
  border: 2px solid #164a41;
  color: #164a41;
  background-color: #f1b24a;
  padding: 15px 15px;
  font-size: 14px;
  border-radius: 15px;
}
.container .profile-info .profile-content #password{
  display: flex;
  padding: 10px 10px;
  width: auto;
  margin-left: 20px;
}
.container .profile-info .profile-content #password input{
  width: 900px ;
}
.container .profile-info .profile-content button{
  display: inline-block;
  justify-content: center;
  align-items: center;
  padding: 12px 10px;
  text-align: center;
  width: 100px;
  margin: 5px;
  border: none;
  border-radius: 10px;
  letter-spacing: 1px;
  font-size: 16px;
  font-weight: 700;
  color: #fff;
}
.container .profile-info .profile-content .btn-cancel{
  background-color: red;
}
.container .profile-info .profile-content .btn-save{
  background-color: blue;
}
.container .profile-info .profile-content .btn-cancel:hover{
  background-color: darkred;
}
.container .profile-info .profile-content .btn-save:hover{
  background-color: darkblue;
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
  .container .profile-head{
    margin: 0%;
    width: 100%;
  }
  .container .profile-head img{
    width: 80px;
    height: 80px;
  }
  .container .profile-head .edit-profile h2{
    font-size: 16px;
  }
  .container .profile-head .edit-profile{
    letter-spacing: 1px;
    line-height: 20px;
  }
  .container .profile-head .edit-profile label{
    font-size: 10px;
    padding: 2px 8px;
  }
  .container .profile-head .edit-profile i{
    font-size: 10px;
  }
  .container .profile-info{
    width: 100%;
    margin: 0%;
  }
  .container .profile-info .profile-content h3{
    font-size: 14px;
  }
  .container .profile-info .profile-content .profile-input i{
    font-size: 12px;
    padding: 10px 10px;
  }
  .container .profile-info .profile-content .profile-input input{
    font-size: 12px;
    padding: 10px 10px;
    width: 330px;
  }
  .container .profile-info .profile-content #email input{
    width: 330px;
    max-width: 330px;
  }
  .container .profile-info .profile-content #password input{
    width: 330px;
  }
  .container .profile-info .profile-content .btn-cancel{
    letter-spacing: 2px;
    padding: 10px 8px;
    font-size: 12px;
  }
  .container .profile-info .profile-content .btn-save{
    letter-spacing: 2px;
    padding: 10px 8px;
    font-size: 12px;
  }
}
/* media 992px */

@media screen and (max-width: 992px) {
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
  .container .profile-head{
    margin: 0%;
    width: 100%;
  }
  .container .profile-head img{
    width: 80px;
    height: 80px;
  }
  .container .profile-head .edit-profile h2{
    font-size: 16px;
  }
  .container .profile-head .edit-profile{
    letter-spacing: 1px;
    line-height: 20px;
  }
  .container .profile-head .edit-profile label{
    font-size: 10px;
    padding: 2px 8px;
  }
  .container .profile-head .edit-profile i{
    font-size: 10px;
  }
  .container .profile-info{
    width: 100%;
    margin: 0%;
  }
  .container .profile-info .profile-content h3{
    font-size: 14px;
  }
  .container .profile-info .profile-content .profile-input i{
    font-size: 12px;
    padding: 10px 10px;
  }
  .container .profile-info .profile-content .profile-input input{
    font-size: 12px;
    padding: 10px 10px;
    width: 330px;
  }
  .container .profile-info .profile-content #email input{
    width: 750px;
    max-width: 750px;
  }
  .container .profile-info .profile-content #password input{
    width: 750px;
    max-width: 750px;
  }
  .container .profile-info .profile-content .btn-cancel{
    letter-spacing: 2px;
    padding: 10px 8px;
    font-size: 12px;
  }
  .container .profile-info .profile-content .btn-save{
    letter-spacing: 2px;
    padding: 10px 8px;
    font-size: 12px;
  }
}

</style>
</head>
<body>
  
  <div class="sidebar">
    <div class="head">
      <label class="logo"><i class="fa fa-house"></i><span>&nbsp;&nbsp;</span>Dive<b>Camp</b></label>
    </div>
      <center class="profile"><br>
        <img src="../public/img/uploads/<?php echo $_SESSION['picname'];?>" alt=""><br>
        <b><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></b>
      </center>
      <div class="side-nav nav">
        <a class="nav1" href="<?php echo URLROOT; ?>/pages/home" class="menu-btn"><i class="fa fa-desktop"></i><span>&nbsp;&nbsp;</span> Dashboard</a><br>
        <a class="nav2" href="<?php echo URLROOT; ?>/pages/reservation" class="menu-btn"><i class="fa fa-book"></i><span>&nbsp;&nbsp;</span> Reservation</a><br>
        <a class="nav3" href="<?php echo URLROOT; ?>/pages/profile" class="menu-btn"><i class="fa fa-user-circle"></i><span>&nbsp;&nbsp;</span> Profile</a><br>
        <a class="nav4" href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fa fa-power-off"></i><span>&nbsp;&nbsp;</span> Logout</a><br>
      </div>  
  </div>
  <div class="container">
    <div class="profile-head">
      <img src="../public/img/uploads/<?php echo $_SESSION['picname'];?>" alt="">
      <div class="edit-profile">
        <h2><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></h2>
        <form action="<?php echo URLROOT; ?>/pages/profile" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <i>Acceptable formats: .jpg and .png only</i><br><br>
			  <button type="submit" name="submit">Change Profile Picture</button><br>
        </form>
      </div>
    </div>

    <form method="POST" action="<?php echo URLROOT; ?>/pages/profile">
    <div class="profile-info">
      <div class="profile-content">
        <h3>Account Information</h3><br>
        <div class="profile-input">
          <i class="fa fa-user"></i>
          <input type="text" name ="firstname" value="<?php echo $_SESSION['firstname'];?>">
        </div>
        <div class="profile-input">
          <i class="fa fa-user"></i>
          <input type="text" name="lastname" value="<?php echo $_SESSION['lastname'];?>">
        </div>
        <div class="profile-input">
          <i class="fa fa-envelope"></i>
          <input type="email" name="email" value="<?php echo $_SESSION['email'];?>">
        </div>
        <br><br>
        <h3>Password Information</h3><br>
        <div class="profile-input">
          <i class="fa fa-lock"></i>
          <input type="password" placeholder="Current password">
        </div>
        <div class="profile-input">
          <i class="fa fa-lock"></i>
          <input type="password" placeholder="New password">
        </div>
        <div class="profile-input">
          <i class="fa fa-lock"></i>
          <input type="password" placeholder="Confirm new password">
        </div>
        <br><br>
        <center>
          <button class="btn-cancel">Cancel</button>
          <button class="btn-save" type="submit" name="submitUpdate">Update</button>
        </center>
      </div>
    </form>
      
    </div>
  </div>
   
</body>
</html>
