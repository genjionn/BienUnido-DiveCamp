<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiveCamp - Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            padding: 0%;
            margin: 0%;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-image: url("../img/watermark_bg.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
        .container form{
            margin: 0%;
            width: 480px;
            height: auto;
            border: 1px solid #000;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #F6F4E6;
            box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
            -webkit-box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
            -moz-box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
        }
        .container form .head{
            text-align: center;
            border-bottom: 1px solid #000;
            background-color: #fbc337;
            padding: 10px 10px;
            color: #000;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            margin-bottom: 25px;
        }
        .container form .content{
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
        }
        .container form .content input{
            margin: 10px;
            width: 350px;
            padding: 10px 10px;
            border-radius:10px ;
            border: 1px solid #000;
        }

        .container form .content a{
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
        }
        .container form .content span{
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container form .content i{
            border: 1px solid #000;
            padding: 10px 10px;
            background-color: #fbc337;
            border-radius: 10px;
            color: #000;
        }
        .container form .btn{
            margin-bottom: 25px;
        }
        .container form .btn button{
            width: 200px;
            padding: 5px 10px;
            border-radius: 25px;
            background-color: #fff;
            border: 1px solid #000;
            margin-bottom: 10px;
            font-size:16px;
            font-weight:700;
        }
        .container form .btn button:hover{
            background-color: #fbc337;
            border: 1px solid #000;
            color: #000;
        }
        .container form .btn button a{
            color: #52575D;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
        }
        .container form .btn label{
            padding-left: 30px;
            font-weight: 700;
            font-size: 14px;
        }
        .container form .btn a{
            text-decoration: none;
            color: #52575D;
        }
        .container form .btn a:hover{
            color: #fbc337;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="head">
                <h3> Please Register!</h3>
            </div>
            <div class="content">
                <center>
                    <span><i class="fa fa-user" style="padding: 10px 13px;"></i><input type="text" name="firstname" id="firstname" placeholder="Firstname *" required>  </span>
                    <span class="invalidFeedback">
                        <?php echo $data['firstnameError'];?>
                    </span>

                    <span><i class="fa fa-user" style="padding: 10px 13px;"></i><input type="text" name="lastname" id="lastname" placeholder="Lastname *" required></span>
                    <span class="invalidFeedback">
                        <?php echo $data['lastnameError'];?>
                    </span>

                    <span><i class="fa fa-envelope"></i><input type="email" name="email" id="email" placeholder="Email *" required></span>
                    <span class="invalidFeedback">
                        <?php echo $data['emailError'];?>
                    </span>

                    <span><i class="fa fa-lock" style="padding: 10px 13px;"></i><input type="password" name="password" id="pass" placeholder="Password *" required></span>
                    <span class="invalidFeedback">
                        <?php echo $data['passwordError'];?>
                    </span>

                    <span><i class="fa fa-lock" style="padding: 10px 13px;"></i> <input type="password" name="confirmpassword" id="confirmPass" placeholder="Confirm Password *" required></span>
                    <span class="invalidFeedback">
                        <?php echo $data['confirmpasswordError'];?>
                    </span>

                </center>
            
            </div>
            <div class="btn">
                <center>
                    <button name="submit" type="submit" value="Sign in">Sign Up</button>
                </center>
                <label>Already't have an account?<a href="<?php echo URLROOT; ?>/users/login"> Login now</a></label>
            </div>
           
        </form>
    </div>
</body>
</html>