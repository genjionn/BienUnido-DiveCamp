<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/RegistrationPage.css">
   
    <title>Register - DiveCamp Website</title>

  </head>
  
  <body> 
    <h1 class="u-name">DIVE<b> CAMP</b></h1>    
    <div class="container">
        <form action="#">
            <div class="form-content">
                <div class="register-form">
                    <div class="title">Register</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="Firstname" id="firstname" placeholder="Firstname" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" name="Lastname" id="lastname" placeholder="Lastname" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="password" id="pass" placeholder="Password" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <input type="password" name="ConfirmPassword" id="confirmPass" placeholder="Confirm your Password" required>
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Register">
                        </div>
                        <div class="text reg-text">Already have an account? <a href="UserLogin.php"><label>Login now</label></a></div>
                    </div>
                </div>
                <div class="picture-form">        
                    <div class="cover">
                        <center><h1>LOGO</h1></center>
                        <!-- <img src="dc.jpg" alt="logo"> -->
                    </div>
              </div>   
        </form>
    </div>
  </body>
</html>