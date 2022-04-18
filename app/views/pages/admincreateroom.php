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

.container .content .addRoom-btn{
  padding: 15px 10px;
}
.container .content .addRoom-btn a{
  text-decoration: none;
  font-size: 14px;
  color:#fff;
}
.container .content .addRoom-btn button{
  border:none;
  padding: 15px 10px;
  width: 150px;
  border-radius: 10px;
  font-family: "Poppins", sans-serif;
  margin:10px;
}
.container .content .addRoom-btn #create{
  background: #16558f;
}
.container .content .addRoom-btn #delete{
  background: #933b27;
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
  padding: 15px 20px;
  margin-top: 15px;
  width: 150px;
  font-size: 14px;
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


/* Modal for VIew Image */
#viewImage-modal {
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

#viewImage-modal:target {
  opacity: 1;
  top: 50%;
  visibility: visible;
  }

#viewImage-modal .modal-body {
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
#viewImage-modal .modal-body { 
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
#viewImage-modal .modal-body .exit{ 
  display:block;
  padding: 5px 10px;
}
#viewImage-modal .modal-body .exit button{ 
  padding:5px 10px;
  background:#933b27;
  border:none;
  border-radius: 100px;
}
#viewImage-modal .modal-body .exit i{ 
  color:white;
}
#viewImage-modal .modal-body form{
  display: block;
}
#viewImage-modal .modal-body .image{
  width: auto;
  height: auto;
  padding: 10px 10px;
  text-align: center;
}

#viewImage-modal .modal-body .image img{
  width: 250px;
  height: 250px;
}
#viewImage-modal .modal-body .image table td{
  border:none;
  text-align: left;
  padding-left:15px;
}
#viewImage-modal .overlay {
  background-color: #000;
  background: rgba(0,0,0,.8);
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10;
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
<!-------------------NEED Front END Design -->
  <div class="container">
    <div class="content">
      <h1> Create Room</h1><br>
        <div id="addroom-modal">
          <div class="modal-content">
            <div class="modal-header">
              <table>
                <tr>
                  <td style="width: 90%;">
                    <h2>Create Room</h2>
                  </td>
                  <td style="width: 10%;"> 
                    <button class="close"><a href="#" ><i class="fa fa-xmark"></i></a> </button>
                  </td>
                </tr>
              </table>
            </div>
          <!--ADD ROOM MODAL -->
          <div class="modal-body">
            <form action="<?php echo URLROOT; ?>/pages/admincreateroom" method="POST" id="roomform" enctype="multipart/form-data">
                <div class="row-one">
                  <input type="file" name="roomimage" value="Upload Image">
                    <span class="invalidFeedback" style="color:red;">
                      <?php echo $data['roomimgError'];?>
                    </span>
                    <br>
                    <input type="text" placeholder="Enter name room" name="roomname">
                    <span class="invalidFeedback" style="color:red;">
                      <?php echo $data['roomnameError'];?>
                    </span>
                </div>
                <div class="row-two">
                  <input type="text" placeholder="Enter room description" name="roomdesc">
                  <span class="invalidFeedback" style="color:red;">
                  <?php echo $data['roomdescError'];?>
                  </span>
                  
                  <input type="text" placeholder="Enter room location" name="roomlocation">
                  <span class="invalidFeedback" style="color:red;">
                    <?php echo $data['roomlocationError'];?>
                  </span>
                </div>
                <div class="row-three">
                  <input type="text" placeholder="Enter room price" name="roomprice">
                  <span class="invalidFeedback" style="color:red;">
                  <?php echo $data['roompriceError'];?>
                  </span>
                  <input type="text" placeholder="Enter No. of Available Room" name="roomavail">
                  <span class="invalidFeedback" style="color:red;">
                    <?php echo $data['roomavailError'];?>
                  </span>
                </div>
                <center>
                  <div class="button input-box">
                    <input name="AddRoom" type="submit" value="Add Room" id="roominsert"> 
                  </div>
                </center>      
            </form>
            </div>
            </div>
            <div class="overlay"></div>
        </div>
        <!-- TABLE DATA -->
      <div class="table">
      <div class="addRoom-btn">
        <form method="POST" action='<?php echo URLROOT; ?>/pages/admincreateroom' enctype="multipart/form-data">
        <button id="create"><a href="#addroom-modal">Create Rooms</a></button>
        <button id="delete" type="submit" name="MultiDelete">Delete Rooms</button><!--Can delete multiple rooms-->
          <table>
            <tr>
              <th>Select</th>
              <th>Room Picture</th>
              <th>Room name</th>
              <th>Room description</th>
              <th>Room location</th>
              <th>Room Rating</th>
              <th>Room Available</th>
              <th>Room Price</th>
              <th>Action</th>
            </tr>
              <span class="invalidFeedback" style="color:red;">
                <?php echo $data['roomupdateError'];?>
              </span>
              <?php $RoomRecords = $_SESSION['getrooms'];
              foreach($RoomRecords as $row){
              ?>
              <tr>
                <td><input type="checkbox" name="sel_del[]" value="<?php echo $row->roomid ?>"></td>
                <td style="width:13%;">
                  <center>
                    <!--<a href="#viewImage-modal">View Image</a> -->
                    <img src="../public/img/roomimg/<?php echo $row->roomimage ?>"><br><input type="file" name="UpdateRoomImage">
                    <input type="hidden" name="roomimgname"  value="<?php echo $row->roomimage ?>">
                  </center>
                </td>
                <td><input style="border:none" type="text" name="roomname"  value="<?php echo $row->roomname ?>"></td>
                <td><input style="border:none" type="text" name="roomdesc"  value="<?php echo $row->roomdesc ?>"></td>
                <td><input style="border:none" type="text" name="roomlocation"  value="<?php echo $row->roomlocation ?>"></td>
                <td><?php echo $row->rating ?></td>
                <td><input style="border:none" type="text" name="roomavail"  value="<?php echo $row->roomsavailable ?>"><button>🔍</button></td>
                <td><input style="border:none" type="text" name="roomprice"  value="<?php echo $row->roomprice ?>"></td>
                <td>
                  <input type="hidden" name="roomid"  value="<?php echo $row->roomid ?>">
                  <input type="submit" name="UpdateRoom"  value="Edit">
                  <input type="submit" name="DeleteRoom"  value="Delete">
                </td>
              </tr>
              <?php } ?>
          </table>
              <!-- MODAL (di lng mag modal kai ang pag pasa sa value to modal kai mo gamit bootstrap
              instead resize lng ang images na ma display kanang uniform na sizes gamay lng siya) 
              
        <div id="viewImage-modal">
          <div class="modal-content">
            <div class="modal-body">
              <div class="exit">
                <button class="close"><a href="#" ><i class="fa fa-xmark"></i></a> </button>
              </div>
              <form action="<?php echo URLROOT; ?>/pages/admincreateroom" method="POST" id="roomform" enctype="multipart/form-data">
                <div class="image">
                  <img src="../public/img/roomimg/<?php echo $row->roomimage ?>">
                  <h2>Room name</h2>
                  <table>
                    <tr>
                      <td>Room Description</td>
                    </tr>
                    <tr>
                      <td>Location</td>
                    </tr>
                      <td>Room Available</td>
                    </tr>
                    <tr>
                      <td>Room Price</td>
                    </tr>
                  </table>
                </div>
              </form>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
              -->
        </form>
      </div>
      </div>
    </div>  
  </div>
</body>
</html>
  