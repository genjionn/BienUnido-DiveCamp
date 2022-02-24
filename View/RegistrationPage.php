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
        <form action="../Model/UserRegistrationForm.php" method="POST">
            <div class="form-content">
                <div class="register-form">
                    <div class="title">Register</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <?php if (isset($_GET['error2'])) { ?>
                            <p class="error"><?php echo $_GET['error2']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success2'])) { ?>
                                <p class="success"><?php echo $_GET['success2']; ?></p>
                            <?php } ?>
                            <!--FIRSTNAME-->
                            <?php if (isset($_GET['firstname'])) { ?>
                                <input type="text" 
                                       name="firstname" 
                                       id="firstname" 
                                        placeholder="Firstname"
                                       value="<?php echo $_GET['firstname']; ?>" 
                                       required>
                            <?php }else{ ?>
                                <input id="firstname" 
                                    type="text"
                                    name="firstname"> 
                            <?php }?>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <!--LASTNAME-->
                            <?php if (isset($_GET['lastname'])) { ?>
                                <input type="text" 
                                       name="Lastname" 
                                       id="lastname" 
                                       value="<?php echo $_GET['lastname']; ?>" 
                                       required>
                            <?php }else{ ?>
                            <input id="lastname" 
                                type="text" 
                                name="lastname">
                            <?php }?>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <!--EMAIL-->
                            <?php if (isset($_GET['email'])) { ?>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   value="<?php echo $_GET['email']; ?>" 
                                   required>
                            <?php }else{ ?>
                                <input id="email" 
                                    type="text" 
                                    name="email">
                            <?php }?>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <!--PASSWORD-->
                            <input type="password" name="password" id="pass" placeholder="Password" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <!--RE_PASSWORD-->
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