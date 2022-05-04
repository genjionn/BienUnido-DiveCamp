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
  margin-left: 230px;
  padding: 5px 10px;
}
.container .content h1{
  color: #933b27;
  text-align: center;
  width: auto;
  letter-spacing: 4px;
  border-top-right-radius: 10px;
  padding: 30px 0px;
  text-shadow: 2px 2px lightgray;
}

.container .content .addRoom-btn a{
  text-decoration: none;
  font-size: 12px;
  color:#fff;
}
.container .content .addRoom-btn button{
  border:none;
  padding: 5px 10px;
  width: 120px;
  border-radius: 10px;
  font-family: "Poppins", sans-serif;
  margin:5px;
}
.container .content #btn button{
  background:red;
  color:#fff;
}
.container .content .addRoom-btn #search-inp{
  padding: 5px 10px;
  border-radius: 10px;
  border: 1px solid gray;
  width: 500px;
}
.container .content .addRoom-btn #search{
  background: #fbc337;
  color:#000;
}
.container .content .addRoom-btn #search:hover{
  background: goldenrod;
  color:#fff;
}
.container .content .addRoom-btn #create{
  background: #16558f;
}
.container .content .addRoom-btn #create:hover{
  background: darkblue;
}
.container .content .addRoom-btn #delete{
  background: #933b27;
}
.container .content .addRoom-btn #delete:hover{
  background: darkred;
}


/* Modal for Add Rooms */
#addroom-modal {
  left: 59%;
  margin: -250px 0 0 -32%;
  opacity: 0;
  position: absolute;
  top: -50%;
  visibility: hidden;
  width: 50%;
  border: 0px solid transparent;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  box-shadow: 0 3px 7px rgba(0,0,0,.25);
  box-sizing: border-box;transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  
}

#addroom-modal:target {
  opacity: 1;
  top: 50%;
  visibility: visible;
  }
#addroom-modal .modal-header {
  margin: 0%;
  padding: 0%;
  background: #fbc337;
  border-bottom: 1px solid #000;
  border-radius: 5px 5px 0 0;
}
#addroom-modal .modal-header table{
  background:transparent;
  width: 100%;
}
#addroom-modal .modal-header button{
  padding: 5px 5px;
  width: 35px;
  background:#933b27;
  border:none;
  border-radius: 100px;
}
#addroom-modal .modal-header i{
  color: #fff;
}
#addroom-modal .modal-header h2{
  letter-spacing: 2px;
  text-align: center;
  color:#000;
}
#addroom-modal .modal-body p{
  letter-spacing: 1px;
  text-align: center;
}

#addroom-modal h2 {
  text-align: center;	
  margin: 0;
  color: #fff;
}
#addroom-modal .btn { 
  float: right; 
}
#addroom-modal .modal-body, #addroom-modal .modal-header {
  padding: 20px;
  text-align: right;
  color: #000;
}
.modal-content {
  position: relative;
  z-index: 20;
  border-radius: 5px;
  color: gray;
  display: block;
}
#addroom-modal .modal-body { 
  background: whitesmoke;
}
#addroom-modal .modal-body form{
  display: block;
}
#addroom-modal .modal-body form .row-one{
  display:flex;
  width: 100%;
}
#addroom-modal .modal-body form .row-one input{
  font-family: 'Poppins',sans-serif;
  display: inline-block;
  border:1px solid #000;
  padding: 10px 10px;
  margin: 5px;
  border-radius: 10px;
  width: 350px;
}
#addroom-modal .modal-body form .row-two{
  display:flex;
  width: 100%;
}
#addroom-modal .modal-body form .row-two input{
  font-family: 'Poppins',sans-serif;
  display: inline-block;
  border:1px solid #000;
  padding: 10px 10px;
  margin: 5px;
  border-radius: 10px;
  width: 350px;
}
#addroom-modal .modal-body form .row-three{
  display:flex;
  width: 100%;
}
#addroom-modal .modal-body form .row-three input{
  font-family: 'Poppins',sans-serif;
  display: inline-block;
  border:1px solid #000;
  padding: 10px 10px;
  margin: 5px;
  border-radius: 10px;
  width: 350px;
}
#addroom-modal .modal-body form .button input{
  font-family: 'Poppins',sans-serif;
  letter-spacing: 2px;
  padding: 5px 20px;
  margin-top: 15px;
  width: 150px;
  font-size: 12px;
  font-weight: 600;
  color: white;
  border:none;
  border-radius: 10px;
  background: #16558f;
}
#addroom-modal .modal-body form .button input:hover{
  background: darkblue;
}
#addroom-modal .overlay {
  background-color: #000;
  background: rgba(0,0,0,.8);
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
}
.table table{
  width: 100%;
  border-collapse: collapse;
}
.table table th{
  border:2px solid lightgray;
  background:#fbc337;
}
.table table td{
  border:2px solid lightgray;
}


/* Modal for Multiple Delete */
#multidel-modal {
  left: 59%;
  margin: -250px 0 0 -32%;
  opacity: 0;
  position: absolute;
  top: -50%;
  visibility: hidden;
  width: 50%;
  border: 0px solid transparent;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  box-shadow: 0 3px 7px rgba(0,0,0,.25);
  box-sizing: border-box;transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  
}

#multidel-modal:target {
  opacity: 1;
  top: 50%;
  visibility: visible;
  }

#multidel-modal .modal-body {
  padding: 20px;
  text-align: right;
  color: #000;
}
.modal-content {
  position: relative;
  z-index: 20;
  border-radius: 5px;
  color: gray;
  display: block;
}
#multidel-modal .modal-body { 
  display:block;
  justify-content: center;
  align-items: center;
  overflow-y:scroll;
  scroll-behavior: smooth;
  overflow-x:hidden;
  background-image: url("../img/background.png");
  background-size:cover;
  margin:0%;
  padding:0%;
}
#multidel-modal .modal-body .exit{ 
  display:block;
  padding: 5px 10px;
}
#multidel-modal .modal-body .exit button{ 
  padding:5px 10px;
  background:red;
  border:none;
  border-radius: 100px;
}
#multidel-modal .modal-body .exit i{ 
  color:white;
}
#multidel-modal .modal-body form{
  display: block;
}
#multidel-modal .modal-body .image{
  width: auto;
  height: auto;
  padding: 10px 10px;
  text-align: center;
}

#multidel-modal .modal-body .image img{
  width: 250px;
  height: 250px;
}
#multidel-modal .modal-body .image table td{
  border:none;
  text-align: left;
  padding-left:15px;
}
#multidel-modal .overlay {
  background-color: #000;
  background: rgba(0,0,0,.8);
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
}

/* Modal Available room */
#available-modal {
  left: 59%;
  margin: -250px 0 0 -32%;
  opacity: 0;
  position: absolute;
  top: -50%;
  visibility: hidden;
  width: 50%;
  border: 0px solid transparent;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  box-shadow: 0 3px 7px rgba(0,0,0,.25);
  box-sizing: border-box;transition: all .4s ease-in-out;
  -moz-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  
}

#available-modal:target {
  opacity: 1;
  top: 50%;
  visibility: visible;
  }

#available-modal .modal-body {
  padding: 20px;
  text-align: right;
  color: #000;
}
.modal-content {
  position: relative;
  z-index: 20;
  border-radius: 5px;
  color: gray;
  display: block;
}
#available-modal .modal-body { 
  display:block;
  justify-content: center;
  align-items: center;
  overflow-y:scroll;
  scroll-behavior: smooth;
  overflow-x:hidden;
  background-image: url("../img/background.png");
  background-size:cover;
  margin:0%;
  padding:0%;
}
#available-modal .modal-body .exit{ 
  display:block;
  padding: 5px 10px;
}
#available-modal .modal-body .exit button{ 
  padding:5px 10px;
  background:red;
  border:none;
  border-radius: 100px;
}
#available-modal .modal-body .exit i{ 
  color:white;
}
#available-modal .modal-body form{
  display: block;
}
#available-modal .modal-body .image{
  width: auto;
  height: auto;
  padding: 10px 10px;
  text-align: center;
}

#available-modal .modal-body .image img{
  width: 250px;
  height: 250px;
}
#available-modal .modal-body .image table td{
  border:none;
  text-align: left;
  padding-left:15px;
}
#available-modal .overlay {
  background-color: #000;
  background: rgba(0,0,0,.8);
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
}
/* search table */
#search-table td input{
  text-align: center;
  font-size: 12px;
  padding: 5px 0px;
  outline-color: blue;
}
#search-table td{
  width: 13%;
  max-width: 13%;
}
/* main table */
.main-table{
  font-size: 12px;
} 
.main-table td{
  width: 13%;
  max-width: 13%;
  text-align: center;
}
.main-table td input{
  font-size: 12px;
  outline-color: blue;
  padding:5px 5px;
  text-align: center;
}
/* multiple delete table */
table input[type="checkbox"]{
  width: 20px;
  height: 20px;
}
form #delete-rooms{
  padding: 10px 10px;
  background: #933b27;
  border:none;
  color: white;
  display:flex;
  float: left;
  margin-left: 20px;
  border-radius: 5px;
}
form #delete-rooms:hover{
  background: darkred;
}
/* Action */
.btn{
  display:flex;
}
.btn input{
  margin:5px;
  padding: 5px 5px;
  width: 50px;
 
}
.btn .update{
  padding: 5px;
  border-radius: 10px;
  border: none;
  background: #16558f;
  color: white;
}
.btn .del{
  padding: 5px;
  border-radius: 10px;
  border: none;
  background: #933b27;
  color: white;
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
        <a class="nav1"  href="<?php echo URLROOT; ?>/pages/adminhomepage" class="menu-btn"><i class="fas fa-desktop"></i><span>&nbsp;&nbsp;</span> Dashboard</a><br>
        <a class="nav2" href="<?php echo URLROOT; ?>/pages/admincreateroom" class="menu-btn"><i class="fa fa-book"></i><span>&nbsp;&nbsp;</span> Create Room</a><br>
        <a class="nav3" href="<?php echo URLROOT; ?>/pages/adminprofile" class="menu-btn"><i class="fa fa-user-circle"></i><span>&nbsp;&nbsp;</span> Profile</a><br>
        <a class="nav4" href="<?php echo URLROOT; ?>/users/logout" class="menu-btn"><i class="fa fa-power-off"></i><span>&nbsp;&nbsp;</span> Logout</a><br>
      </div>  
  </div>
  <div class="container">
    <div class="content">
      <h1>View User Reservation</h1><br>
          <table class="main-table" >
            <tr>
              <th>User Email</th>
              <th>CheckIn Date</th>
              <th>CheckOut Date</th>
              <th>No. of Adult</th>
              <th>No. of Child</th>
              <th>Contact No.</th>
            </tr>  
            <?php  foreach($data['viewreserves'] as $reserves){ ?>
            <tr>
              <th><?php echo $reserves->email; ?></th>
              <th><?php echo $reserves->checkin_date; ?></th>
              <th><?php echo $reserves->checkout_date; ?></th>
              <th><?php echo $reserves->number_of_adult; ?></th>
              <th><?php echo $reserves->number_of_child; ?></th>
              <th><?php echo $reserves->mobile_number; ?></th>
            </tr> 
            <?php }?>
          </table>
      </div>
      </div>
    </div>  
  </div>
</body>
</html>
  