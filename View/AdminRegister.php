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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/AdminRegister.css?v=<?php echo time(); ?>" />
   
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