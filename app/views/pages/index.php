<html>
<head>
<style>
	*,:after,:before{margin:0;padding:0;box-sizing:border-box;font-family:Poppins,sans-serif}p{font-size:24px}button{font-size:18px;width:200px;padding:15px 0;text-align:center;margin:20px 10px;border-radius:25px;font-weight:700;border:2px solid #fff;background:0 0;color:#fff;cursor:pointer}button:hover{background-color:#ffe9a3;color:#000}.cover{width:100%;height:100%;background-image:linear-gradient(rgba(0,0,0,.4),rgba(83.1,66.3,11)),url("img/bg.jpg");background-size:cover;background-position:center}.u-name{width:120px;cursor:pointer;font-size:26px;color:#ffe9a3}.u-name b{color:#004f5d}.navbar{width:85%;margin:auto;padding:15px;display:flex;align-items:center;justify-content:space-between}.navbar ul li{list-style:none;display:inline-block;margin:0 20px;position:relative}.navbar ul li:hover{padding:10px 0;color:#000;background:0 0}.navbar ul li a{text-decoration:none;color:#fff;text-transform:uppercase}.navbar ul li::after{content:'';height:2px;width:100%;background:#fff;position:absolute;left:0;bottom:-10px;transition:.5s}.navbar ul li:hover::after{background:#d4891c}.content{width:100%;position:absolute;top:50%;transform:translateY(-50%);text-align:center;color:#fff}.content h1{font-size:50px;margin-top:80px}.content h1 b{color:#fff}.content h1 .website-txt{color:#fff}.content h2{color:#fff;font-size:25px}.content .camp{color:#fff}.content p{font-size:18px;color:#d3d3d3;margin:20px auto;font-weight:100;line-height:35px}
</style>
	<title><?php echo SITENAME?></title>
</head>
<body>
	<div class="cover">
		<div class="navbar">
			<h1 class="u-name">DIVE <b>CAMP</b></h1>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Bedroom</a></li>
				<li><a href="#">Dining</a></li>
				<li><a href="#">Kitchen</a></li>
				<li><a href="#">Foods</a></li>
			</ul>
		</div>
		<div class="content">
			<h1><b>Welcome</b> in our <b class="website-txt">website</b> </h1><br>
			<h2>New here?</h2>
			<p>Signup and discover great experience and be more relaxed<br> here in Dive<b class="camp">Camp</b> resort.</p>
			<div>
				<a href="<?php echo URLROOT; ?>/users/login"><button type="button">Login</button></a>
				<a href="<?php echo URLROOT; ?>/users/register"><button type="button">Signup</button></a>
			</div>
		</div>
	</div>
</body>
</html>