<?php
include '../Controller/db_conn.php';

error_reporting(0); //Hides undefined values in the textbox
session_start();

if (isset($_SESSION['email'])) { //If user Changes the URL or press back ReEnter Page will apear instead of the Page itself
    header("Location: AdminHomePage.php");
}

if (isset($_POST['submit'])) { //Model
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

	if ($password == $confirmpassword) { //Checks if password and confirm password is equal
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) { //If email doesnt exist creates a user
			$sql = "INSERT INTO users (firstname, lastname, email, password)
					VALUES ('$firstname', '$lastname', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) { //After Registering popup success msg and empty textbox
				echo "<script>alert('User Successfully Registered.')</script>";
				$firstname = "";
                $lastname = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confirmpassword'] = "";
			} else { 
				echo "<script>alert('Something went wrong.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}	
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <style>
        *, *:before, *:after{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif;}
        body{ min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 30px; width: 100%; height: 100%; background-image: linear-gradient(rgba(0,0,0,0.40),rgba(0,79,93,1.00)),url("../img/bg.jpg"); background-size: cover; background-position: center;}
        .u-name { position: relative; right: 75px; bottom: 300px; width: 135px; cursor: pointer; font-size: 26px; color: #fff;}
        .u-name b { position: relative; bottom: 10px; color: #D4A91C;}
        .container .cover h1{ position: relative; top: 250px; color: #D4A91C;}
        .container{ position: relative; max-width: 850px; width: 100%; padding: 40px 50px; background-color: whitesmoke; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); perspective: 2700px;}
        .container .cover{ position:absolute; top: 0; left: 60%; height: 100%; width: 40%; z-index: 98; background: #004F5D; transition: all 1s ease; transform-style: preserve-3d; transform-origin: left;}
        .container form{ height: 100%; width: 100%; background: whitesmoke;}
        .container .cover img{ position: absolute; height: 100%; width: 100%; object-fit: cover; z-index: 12;}
        .container .form-content{ display: flex; align-items: center; justify-content: space-between;}
        .form-content .register-form,
        .form-content .signup-form{ width: calc(100% / 2 - 25px);}
        form .form-content .title{ position: relative; font-size: 26px; font-weight: 600; color: #333;}
        form .form-content .title::before{ content: ''; position: absolute; left: 0; bottom: 0; height: 3px; width: 25px; background:#D4A91C;}
        form .signup-form .form-content .title::before{width: 20px;}
        form .form-content .input-boxes{ margin-top: 30px;}
        form .form-content .input-box{ display: flex; align-items: center; margin: 15px 20px; height: 50px; width: 100%;}
        .form-content .input-box input{ height: 100%; width: 100%; outline: none; border-radius: 15px; border:1px solid #004F5D; border-top: 2px solid rgba(0, 0, 0, 0.2); border-bottom: 2px solid rgba(0, 0, 0, 0.2); border-left: 2px solid rgba(0, 0, 0, 0.2); border-right: 2px solid rgba(0, 0, 0, 0.2); padding: 0 30px; font-size: 17px; font-weight: 500; transition: all 0.3s ease;}
        .form-content .input-box input:focus,
        .form-content .input-box input:valid{border-color: #004F5D;}
        .form-content .input-box i{ position: absolute; color: #004F5D; font-size: 17px;}
        form .form-content .button{ color: #fff; margin-top: 40px; }
        form .form-content .button input{ color: #fff; font-size: 20px; background: #00839b; border-radius: 15px; padding: 0; cursor: pointer; transition: all 0.4s ease;}
        form .form-content .button input:hover{ color: #D4A91C; font-size: 20px; background: #004F5D;}
        form .form-content label{ color: #D4A91C; cursor: pointer;}
        form .form-content label:hover{ text-decoration: underline;}
        form .form-content .reg-text{ text-align: center; margin-top: 25px;}
        .container #flip{ display: none;}
        @media (max-width: 730px){.container .cover{display:none;}.form-content .register-form,.form-content .picture-form{width: 100%;}.form-content .picture-form{display: none;}}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
   
    <title>Register - DiveCamp Website</title>

  </head>
  
  <body> 
    <h1 class="u-name">DIVE<b> CAMP</b></h1>    
    <div class="container">
        <form action="" method="POST">
            <div class="form-content">
                <div class="register-form">
                    <div class="title">Admin Register</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <!--FIRSTNAME-->
                            <input type="text" name="firstname" id="firstname" placeholder="Firstname" value="<?php echo $firstname;?>" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <!--LASTNAME-->
                            <input type="text" name="lastname" id="lastname" placeholder="Lastname" value="<?php echo $lastname;?>" required>
                        </div>
                        <div class="input-box">
                            <i class="fa-solid fa-envelope"></i>
                            <!--EMAIL-->
                            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email;?>" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <!--PASSWORD-->
                            <input type="password" name="password" id="pass" placeholder="Password" required>
                        </div>
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <!--RE_PASSWORD-->
                            <input type="password" name="confirmpassword" id="confirmPass" placeholder="Confirm your Password" required>
                        </div>
                        <div class="button input-box">
                            <input name="submit" type="submit" value="Register">
                        </div>
                        <div class="text reg-text">Already have an account? <a href="AdminLogin.php"><label>Login now</label></a></div>
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