<?php
include '../Controller/db_conn.php';

session_start();
error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: UserHomePage.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; //query
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result); //Fetching from query if data exist
		$_SESSION['email'] = $row['email'];
		header("Location: UserHomePage.php");
	} else {
		echo "<script>alert('Credentials are Invalid.')</script>";
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
    <link rel="stylesheet" href="css/UserLogin.css">
  
    <title>Login - DiveCamp Website</title>

  </head>
  
  <body>
    <h1 class="u-name">DIVE<b> CAMP</b></h1> 
    <div class="container">
        <form action="" method="POST">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
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
                        <div class="text login-text">Don't have an account? <a href="RegistrationPage.php"><label>Signup now</label></a></div>
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