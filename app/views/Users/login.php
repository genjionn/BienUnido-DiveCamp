<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiveCamp - Login</title>
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
            background-image: url("../img/watermark.png");
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
            border: 1px solid #52575D;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: #F6F4E6;
            box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
            -webkit-box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
            -moz-box-shadow: 0px 0px 37px -12px rgba(0,0,0,0.55);
        }
        .container form .head{
            text-align: center;
            border-bottom: 1px solid #52575D;
            background-color: #FDDB3A;
            padding: 10px 10px;
            color: #52575D;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
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
            border: 1px solid #52575D;
        }
        .container form .content #forget-pass{
            padding-left: 30px;
            color: #52575D;
        }
        .container form .content #forget-pass:hover{
            color: #FDDB3A;
        }
        .container form .content a{
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
        }
        .container form .content span{
            
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container form .content i{
            border: 1px solid #52575D;
            padding: 10px 10px;
            background-color: #FDDB3A;
            border-radius: 10px;
            color: #52575D;
            font-size: 18px;
        }
        .container form .btn{
            margin-bottom: 25px;
        }
        .container form .btn button{
            width: 200px;
            padding: 5px 10px;
            border-radius: 25px;
            background-color: #fff;
            border: 1px solid #52575D;
            margin-bottom: 10px;
        }
        .container form .btn button:hover{
            background-color: #FDDB3A;
            border: 1px solid #FDDB3A;
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
            color: #FDDB3A;
        }

        .text{
            padding: 0px 0px 00px 30px;

            
        }

        /* Modal for Forget Password */
        #forgot-modal {
            left: 59%;
            margin: -250px 0 0 -32%;
            opacity: 0;
            position: absolute;
            top: -50%;
            visibility: hidden;
            width: 50%;
            border: 4px solid #f1b24a;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0 3px 7px rgba(0,0,0,.25);
            box-sizing: border-box;transition: all .4s ease-in-out;
            -moz-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            

        }
        #forgot-modal:target {
            opacity: 1;
            top: 50%;
            visibility: visible;
        }
		#forgot-modal .modal-header {
            background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
            border-bottom: 1px solid #164a41;
            border-radius: 5px 5px 0 0;
        }
        #forgot-modal .modal-header h3{
            letter-spacing: 2px;
            text-align: center;
            padding: 30px;
        }
        #forgot-modal .modal-body p{
            letter-spacing: 1px;
            text-align: center;
        }
        #forgot-modal .modal-body i{
            position: relative;
            font-size: 24px;
            top: 5px;
            left: 45px;
            color: #164a41;
            padding: 10px 10px;
            border-radius: 15px;
        }
        #forgot-modal .modal-body #email{
            padding: 10px 60px;
            width: 400px;
            border: 2px solid #f1b24a;
            border-radius: 15px;
        }
		#forgot-modal h2 {
            text-align: center;	
            margin: 0;
            color: #fff;
        }
		#forgot-modal .btn { 
            float: right; 
        }
		#forgot-modal .modal-body, #forgot-modal .modal-header {
            padding: 20px;
            text-align: right;
            color: #fff;
        }
		.modal-content {
            position: relative;
            z-index: 20;
            border-radius: 5px;
            color: #fff
        }
		#forgot-modal .modal-body { 
            background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
         }
        #forgot-modal .modal-body button{
            width: 100px;
            margin: 5px;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
         }
         #forgot-modal .modal-body a{
             color: #fff;
             text-decoration: none;
         }
         #forgot-modal .modal-body .close{
             background-color: red;
             font-size: 16px;
             font-weight: 700;
             border: 1px solid darkred;
         }
         #forgot-modal .modal-body .close:hover{
             background-color: darkred;
         }
         #forgot-modal .modal-body .next{
             background-color: blue;
             font-size: 16px;
             font-weight: 700;
             border: 1px solid darkblue;
         }
         #forgot-modal .modal-body .next:hover{
            background-color: darkblue;
         }
		#forgot-modal .overlay {
            background-color: #000;
            background: rgba(0,0,0,.8);
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }

        /* Modal for Reset Password */
        #reset-modal {
            left: 59%;
            margin: -250px 0 0 -32%;
            opacity: 0;
            position: absolute;
            top: -50%;
            visibility: hidden;
            width: 50%;
            border: 4px solid #f1b24a;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0 3px 7px rgba(0,0,0,.25);
            box-sizing: border-box;transition: all .4s ease-in-out;
            -moz-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
        }
        #reset-modal:target {
            opacity: 1;
            top: 50%;
            visibility: visible;
        }
		#reset-modal .modal-header {
            background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
            border-bottom: 1px solid #164a41;
            border-radius: 5px 5px 0 0;
        }
        #reset-modal .modal-header h3{
            letter-spacing: 2px;
            text-align: center;
        }
        #reset-modal .modal-body p{
            letter-spacing: 1px;
            text-align: center;
        }
        #reset-modal .modal-body i{
            position: relative;
            font-size: 18px;
            top: 0;
            margin: 10px;
            left: 50px;
            color: #164a41;
            padding: 10px 10px;
            border-radius: 15px;
        }
        #reset-modal .modal-body #new-pass{
            padding: 10px 60px;
            width: 400px;
            border: 2px solid #f1b24a;
            border-radius: 15px;
        }
        #reset-modal .modal-body #confirm-pass{
            padding: 10px 60px;
            width: 400px;
            border: 2px solid #f1b24a;
            border-radius: 15px;
        }
		#reset-modal h2 {
            text-align: center;	
            margin: 0;
            color: #fff;
        }
		#reset-modal .btn { 
            float: right; 
        }
		#reset-modal .modal-body, #reset-modal .modal-header {
            padding: 20px;
            text-align: right;
            color: #fff;
        }
		.modal-content {
            position: relative;
            z-index: 20;
            border-radius: 5px;
            color: #fff
        }
		#reset-modal .modal-body { 
            background-image: linear-gradient(to right, #164a41, #205545, #2d6148, #3c6c49, #4d774a);
         }
        #reset-modal .modal-body button{
            width: 100px;
            margin: 5px;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
         }
         #reset-modal .modal-body a{
             color: #fff;
             text-decoration: none;
         }
         #reset-modal .modal-body .close{
             background-color: red;
             font-size: 16px;
             font-weight: 700;
             border: 1px solid darkred;
         }
         #reset-modal .modal-body .close:hover{
             background-color: darkred;
         }
         #reset-modal .modal-body .back{
             background-color: #f1b24a;
             font-size: 16px;
             font-weight: 700;
             border: 1px solid goldenrod;
         }
         #reset-modal .modal-body .back:hover{
            background-color: goldenrod;
         }
		#reset-modal .overlay {
            background-color: #000;
            background: rgba(0,0,0,.8);
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
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
        /* media for modals */
        @media only screen and (max-width: 1000px) {
            #forgot-modal .modal-content .modal-body i{
                position: absolute;
                top: 128px;
                left: 45px;
                font-size: 18px;
            }
            #forgot-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 0;
                max-width: 400px;
                font-size: 14px;
            }
            #forgot-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
            #reset-modal .modal-content .modal-body i{
                display: none;
            }
            #reset-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 10px;
                max-width: 400px;
                font-size: 16px;
            }
            #reset-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
        }
        @media only screen and (max-width: 900px) {
            #forgot-modal .modal-content .modal-body i{
                position: absolute;
                top: 128px;
                left: 55px;
                font-size: 18px;
            }
            #forgot-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 0;
                max-width: 300px;
                font-size: 14px;
            }
            #forgot-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
            #reset-modal .modal-content .modal-body i{
                display: none;
            }
            #reset-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 10px;
                max-width: 350px;
                font-size: 14px;
            }
            #reset-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
        }
        @media only screen and (max-width: 800px) {
            #forgot-modal .modal-content .modal-body i{
                position: absolute;
                top: 128px;
                left: 80px;
                font-size: 18px;
            }
            #forgot-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 0;
                max-width: 200px;
                font-size: 14px;
            }
            #forgot-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
            #reset-modal .modal-content .modal-body i{
                display: none;
            }
            #reset-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 10px;
                max-width: 300px;
                font-size: 12px;
            }
            #reset-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
        }
        @media screen and (max-width: 700px){
            #forgot-modal .modal-content .modal-body i{
                position: absolute;
                top: 128px;
                left: 60px;
                font-size: 14px;
            }
            #forgot-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 0;
                max-width: 200px;
                font-size: 10px;
            }
            #forgot-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
            #reset-modal .modal-content .modal-body i{
                display: none;
            }
            #reset-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 10px;
                max-width: 250px;
                font-size: 10px;
            }
            #reset-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
        }

        @media screen and (max-width: 600px){
            #forgot-modal .modal-content .modal-body i{
                position: absolute;
                top: 128px;
                left: 25px;
                font-size: 14px;
            }
            #forgot-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 0;
                max-width: 200px;
                font-size: 10px;
            }
            #forgot-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
            /* reset */
            #reset-modal .modal-content .modal-body i{
                display: none;
            }
            #reset-modal .modal-content .modal-body input{
                padding: 5px 0px;
                margin: 10px;
                max-width: 200px;
                font-size: 10px;
            }
            #reset-modal .modal-content .modal-body  button{
                font-size: 12px;
                padding: 5px 5px;
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
            <div class="head">
                <h3> Please Login!</h3>
            </div>
            <div class="content">
                <center>
                    <span><i class="fa fa-envelope"></i><input type="email" name="email" id="email" placeholder="Email *"></span>
                    <span class="invalidFeedback">
                        <?php echo $data['emailError'];?>
                    </span>

                    <span><i class="fa fa-lock" style="padding: 10px 13px;"></i><input type="password" name="password" id="pass" placeholder="Password *"> </span>
                    <span class="invalidFeedback">
                        <?php echo $data['passwordError'];?>
                    </span>
                    
                </center>
                <div class="text"><a href="#forgot-modal">Forgot password?</a></div>
            </div>
            <div class="btn">
                <center>
                    <button name="submit" type="submit" value="Login">Login</button>
                </center>
                <label>Don't have an account?<a href="<?php echo URLROOT; ?>/users/register"> Signup now</a></label>
            </div>
           
        </form>

        <!-- forgot password modal -->
        <div id="forgot-modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Forgot Password?</h3>
				</div>
			<div class="modal-body">
                <p>Please Enter your email address to reset your password!</p>
                <br>
                <center><i class="fa fa-envelope"></i><input type="email" name="email" id="email" placeholder="Your email address.."></center>
                <br>
				<button class="close"><a href="#" >Close</a> </button>
                <button class="next"><a href="#reset-modal">Next</a></button>
			    </div>
		    </div>
		    <div class="overlay"></div>
		</div>
        <!-- Reset modal -->
        <div id="reset-modal">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Reset Password?</h3>
				</div>
			<div class="modal-body">
                <p>Please reset your password!</p>
                <br>
                <center>
                    <i class="fa fa-lock"></i><input type="password" name="new-pass" id="new-pass" placeholder="Your new password.."><br>
                    <i class="fa fa-lock"></i><input type="password" name="confirm-pass" id="confirm-pass" placeholder="Confirm your password..">
                </center>
                <br>
                <button class="back"><a href="#forgot-modal">Back</a></button>
				<button class="close"><a href="#" >Close</a> </button>
			    </div>
		    </div>
		    <div class="overlay"></div>
		</div>    
    </div>
</body>
</html>