<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            font-family: 'Poppins'sans-serif;
            font-size: 15px;
            scroll-behavior: smooth;
            background-image: linear-gradient(to right, #164a41, #1e5345, #275b48, #31644a, #3c6c4c, #487652, #548157, #608b5d, #6f9a69, #7ea975, #8db881, #9dc88d);
        }
        .head {
            position: sticky;
            top: 0;
            background-image: linear-gradient(to right, #164a41, #1e5345, #275b48, #31644a, #3c6c4c, #487652, #548157, #608b5d, #6f9a69, #7ea975, #8db881, #9dc88d);
        }
        .head {
            max-width: 100%;
            font-size: 24px;
            text-align: left;
            padding: 20px 200px;
        }
        .head .logo{
            color: #9dc88d;
        }
        .head .logo b{
            color: #f1b24a;
        }
        /* form */
        .container{
            display: flex;
            justify-content: center;
            padding: 30px 10px;
            width: 100%;
            height: 100%;
        }
        .container h2{
            color: #fff;
        }
        .container hr{
            color: #f1b24a;
            background-color: #f1b24a;
            max-width: 20px;
            height: 5px;
            border: 1px solid #f1b24a;
        }
        .container form{
            display: block;
            background-color: #164a41;
            border: 2px solid #4d774e;
            width: 750px;
            height: auto;
            padding: 20px 35px;
            border-radius: 15px;
        }
        .container form .logo{
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 55%;
            top: 96px;
            width: 350px;
            margin: 0%;
            padding: 0%;
            height: 490px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            border: 2px solid #4d774e;
            background-color: #f1b24a;
        }
        .input-boxes{
            display: inline-block;
            height: auto;
            width: auto;
            padding: 10px 10px;
        }
        .input-boxes .input-box{
            padding: 10px 10px;
        }
        .input-boxes .input-box i{
            position: relative;
            left: 42px;
            border: none;
            padding: 10px 10px;
            border-radius: 25px;
            color: #164a41;
        }
        .input-boxes .input-box input{
            width: 300px;
            padding: 10px 50px;
            border-radius: 25px;
            color: #164a41;
            border: 1px solid #f1b24a;
            background-color: whitesmoke;
        }
        .input-boxes .button input{
            margin-left: 85px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 15px;
            max-width: 200px;
            color: #164a41;
        }
        .input-boxes .button input:hover{
            background-color: #f1b24a;
            animation: pulse 1s;
        }
        .input-boxes .text{
            color: #fff;
        }
        .input-boxes .text a{
            color: #9dc88d;
            text-decoration: none;
        }
        .input-boxes .text a:hover{
            color: #f1b24a;
            text-decoration: underline;
        }
        /* media */
        @media only screen and (max-width: 600px) {
            .head{
                padding: 20px 100px;
            }
            .head .logo{
                font-size: 18px;
            }
            .container{
                font-size: 12px;
            }
            .container form{
                width: 600px;
                float: left;
            }
            .container form .logo{
                max-width: 1000px;
                display: none;
            }
            .input-boxes .input-box i{
                font-size: 10px;
            }
            .input-boxes .input-box input{
                font-size: 10px;
            }

        }
    </style>
</head>
<body>
    <div class="head">
        <label class="logo"><i class="fa fa-mask"></i>&nbsp;Dive&nbsp;<b>Camp</b></label>
    </div>
    <div class="container">
        <form action="" method="POST">
            <h2>Register</h2>
            <hr>
            <div class="input-boxes">
                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="firstname" id="firstname" placeholder="Firstname *">  
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['firstnameError'];?>
                </span>

                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" name="lastname" id="lastname" placeholder="Lastname *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['lastnameError'];?>
                </span>

                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['emailError'];?>
                </span>

                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="pass" placeholder="Password *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['passwordError'];?>
                </span>

                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirmpassword" id="confirmPass" placeholder="Confirm Password *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['confirmpasswordError'];?>
                </span>
                <br>
                <div class="button input-box">
                    <input name="submit" type="submit" value="Sign in">
                </div>
                <br>
                <div class="text login-text">Already have an account? <a href="<?php echo URLROOT; ?>/users/login"><label>Login now</label></a></div>
            </div>

        </form>
    </div>       
</body>
</html>