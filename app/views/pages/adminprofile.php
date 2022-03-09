<!DOCTYPE html>
<html>
<head>
	<title>DiveCamp-Dashboard</title>
    <style>
		*{margin:0;padding:0;list-style:none;text-decoration:none;box-sizing:border-box;font-family:Poppins,sans-serif}body{background:#fff}.wrapper .header{z-index:1;background:#004f5d;position:fixed;width:calc(100% - 0%);height:70px;display:flex;top:0}.wrapper .header .header-menu{width:calc(100% - 0%);height:100%;display:flex;justify-content:space-between;align-items:center;padding:0 20px}.wrapper .header .header-menu .title{color:#fff;font-size:25px;text-transform:uppercase;font-weight:800}.wrapper .header .header-menu .title span{color:#d4a91c}.wrapper .header .header-menu .sidebar-btn{color:#fff;position:absolute;margin-left:210px;font-weight:800;cursor:pointer;transition:.3s;transition-property:color}.wrapper .header .header-menu .sidebar-btn:hover{color:#d4a91c}.wrapper .header .header-menu ul{display:flex}.wrapper .header .header-menu ul li a{background:#fff;color:#000;display:block;margin:0 10px;font-size:18px;width:34px;height:34px;line-height:35px;text-align:center;border-radius:50%;transition:.3s;transition-property:background,color}.wrapper .header .header-menu ul li a:hover{background:#d4a91c;color:#fff}.wrapper .sidebar{z-index:1;background:#004f5d;position:fixed;top:70px;width:250px;height:calc(100% - 9%);transition:.3s;transition-property:width;overflow-y:auto}.wrapper .sidebar .sidebar-menu{overflow:hidden}.wrapper .sidebar .sidebar-menu .profile img{margin:20px 0;width:100px;height:100px;border-radius:50%}.wrapper .sidebar .sidebar-menu .profile p{color:#fff;font-weight:600;margin-bottom:10px}.wrapper .sidebar .sidebar-menu .item{width:250px;overflow:hidden}.wrapper .sidebar .sidebar-menu .item .menu-btn{display:block;color:#fff;position:relative;padding:10px 20px;transition:.3s;transition-property:color}.wrapper .sidebar .sidebar-menu .item .menu-btn:hover{color:#000;background:#d4a91c}.wrapper .sidebar .sidebar-menu .item .menu-btn i{margin:20px}.wrapper .main-container{width:(100% - 250px);margin-top:70px;margin-left:250px;padding:15px;background-size:cover;height:100vh;transition:.3s}.grid{display:grid;width:100%;border-radius:10px;box-shadow:3px 3px 33px -2px rgba(0,0,0,.41);-webkit-box-shadow:3px 3px 33px -2px rgba(0,0,0,.41);-moz-box-shadow:3px 3px 33px -2px rgba(0,0,0,.41);grid-template-rows:1fr 1fr 1fr 1fr 1fr;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr 1fr;padding:35px 15px;gap:0;height:595px}#acc-info{position:relative;left:20px;grid-row-start:2;grid-column-start:1;grid-row-end:3;grid-column-end:4;width:450px}input{width:270px;border:1px solid;margin:5px;border-radius:10px;padding:10px 10px}#item-1{grid-row-start:1;grid-column-start:4;grid-row-end:2;grid-column-end:5}#item-1 img{display:flex;border:5px solid #004f5d;border-radius:50px;width:150px;height:150px}#item-1 h3{text-align:center}#pass-info{position:relative;right:60px;grid-row-start:2;grid-column-start:5;grid-row-end:3;grid-column-end:8;width:480px}#btn{position:relative;left:365px;grid-row-start:3;grid-column-start:1;grid-row-end:4;grid-column-end:4;width:350px}.cancel{font-size:16px;color:#fff;background-color:red;border:1px solid #8b0000;border-radius:10px;width:150px;padding:10px 15px}.save{font-size:16px;color:#fff;background-color:#00f;border:1px solid #00008b;border-radius:10px;width:150px;padding:10px 15px}button{margin:10px}.cancel:hover{background-color:#8b0000}.save:hover{background-color:#00008b}
	</style>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fdad5daede.js" crossorigin="anonymous"></script>
</head>
<body>
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
				 <li class="item"><a href="AdminHomePage.php" class="menu-btn"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
				 <li class="item" id="profile"><a href="AdminProfile.php" class="menu-btn"><i class="fas fa-circle-user"></i><span>Profile</span></a></li>
				 <li class="item" id="logout"><a href="AdminLogin.php" class="menu-btn"><i class="fas fa-power-off"></i><span>Logout</span></a></li>
			</div>
		</div>
		<div class="main-container">
            <div class="grid">
				<div id="item-1">
					<img src="img/dc.jpg" alt="profile"><br>
					<h3>Kyle Autida</h3>
					<input type="file" id="file" accept="images/*" style="display: none;">
					<center><label for="file">Edit Profile</label></center><br>
				</div>
				<div id="acc-info">
					<h3>Account Information</h3>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>First name</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="First name"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>Last name</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Last name"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>Email Address</label>
					<input type="email" placeholder="Email Address"><br>
				</div>
				<div id="pass-info">
					<h3>Change Password</h3>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>Current Password</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Current Password"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>New Password</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="New Password"><br>
					&nbsp;&nbsp;&nbsp;&nbsp;<label>Confirm Password</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Confirm Password"><br>
				</div>
				<div id="btn"><br>
					<button class="cancel">Cancel</button>
					<button class="save" type="submit">Save</button>
				</div>
			</div>
        </div>
	</div>
 </body>
</html>