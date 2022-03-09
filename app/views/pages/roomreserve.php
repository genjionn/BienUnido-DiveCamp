<!doctype html>
<html lang="en">
  <head>
    <style>
        *,:after,:before{margin:0;padding:0;box-sizing:border-box;font-family:Poppins,sans-serif}body{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:30px;width:100%;height:100%;background-image:linear-gradient(rgba(0,0,0,.4),#004f5d),url("../img/bg.jpg");background-size:cover;background-position:center}.u-name{position:relative;right:75px;bottom:300px;width:135px;cursor:pointer;font-size:26px;color:#fff}.u-name b{position:relative;bottom:10px;color:#d4a91c}.container{position:relative;max-width:850px;width:100%;padding:10px 50px;background-color:#f5f5f5;box-shadow:0 5px 10px rgba(0,0,0,.2);perspective:2700px}.container .cover{position:absolute;top:0;left:60%;height:100%;width:40%;z-index:98;background:#004f5d;transition:all 1s ease;transform-style:preserve-3d;transform-origin:left}.container .cover h1{position:relative;top:180px;color:#d4a91c}.container form{height:100%;width:100%;padding:20px 0;background:#f5f5f5}.container .cover img{position:absolute;height:100%;width:100%;object-fit:cover;z-index:12}.container .form-content{display:flex;align-items:center;justify-content:space-between}.form-content .login-form,.form-content .signup-form{width:calc(100% / 2 - 25px)}form .form-content .title{position:relative;font-size:26px;font-weight:600;color:#333}form .form-content .title::before{content:'';position:absolute;left:0;bottom:0;height:3px;width:25px;background:#e3bf48}form .signup-form .form-content .title::before{width:20px}form .form-content .input-boxes{margin-top:30px}form .form-content .input-box{display:flex;align-items:center;margin:15px 20px;height:50px;width:100%}.form-content .input-box input{height:100%;width:100%;outline:0;border-radius:15px;padding:0 30px;font-size:17px;font-weight:500;border-top:2px solid rgba(0,0,0,.2);border-bottom:2px solid rgba(0,0,0,.2);border-left:2px solid rgba(0,0,0,.2);border-right:2px solid rgba(0,0,0,.2);transition:all .3s ease}.form-content .input-box input:focus,.form-content .input-box input:valid{border-color:#004f5d}.form-content .input-box i{position:absolute;color:#e3bf48;font-size:17px}form .form-content .button{color:#fff;margin-top:40px}form .form-content .button input{color:#fff;font-size:20px;background:#00839b;border-radius:15px;padding:0;cursor:pointer;transition:all .4s ease}form .form-content .button input:hover{color:#d4a91c;background:#004f5d}form .form-content label{color:#d4a91c;cursor:pointer}form .form-content label:hover{text-decoration:underline}form .form-content .login-text{text-align:center;justify-content:center;margin-top:25px}form .text a{color:#d4a91c}.container #flip{display:none}@media (max-width:730px){.container .cover{display:none}.form-content .login-form,.form-content .picture-form{width:100%}.form-content .picture-form{display:none}}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Admin Login - DiveCamp Website</title>
  </head>
  <body>
    <h1 class="u-name">DIVE<b> CAMP</b></h1> 
    <div class="container">
        <form action="" method="POST">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login as Admin</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" id="email" placeholder="Email Address" value="<?php echo $email;?>" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" id="pass" placeholder="Password" required>
                        </div>
                        <div class="text"><a href="#">Forgot password?</a></div>
                        <div class="button input-box">
                            <input name="submit" type="submit" value="Login">
                        </div>
                        <div class="text login-text">Don't have an account? <a href="AdminRegister.php"><label>Signup now</label></a></div>
                    </div>
                </div>
                <div class="picture-form">        
                    <div class="cover">
                        <center><h1>LOGO</h1></center>
                       <!-- <img src="" alt="logo"> -->
                    </div>
              </div>   
        </form>
    </div>
  </body>
</html>