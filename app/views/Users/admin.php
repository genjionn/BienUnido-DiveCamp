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
            padding: 60px 10px;
            width: 100%;
            height: 100%;
        }
        .container h2{
            color: #164a41;
        }
        .container hr{
            color: #fff;
            background-color: #fff;
            max-width: 20px;
            height: 5px;
            border: 1px solid #f1b24a;
        }
        .container form{
            display: block;
            background-color: #f1b24a;
            border: 2px solid #164a41;
            width: 750px;
            height: 400px;
            padding: 20px 35px;
            border-radius: 15px;
        }
        .container form .logo{
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 55%;
            top: 126px;
            width: 350px;
            margin: 0%;
            padding: 0%;
            height: 400px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            border: 2px solid #164a41;
            background-color: #164a41;
        }
        .input-boxes{
            display: inline-block;
            height: auto;
            width: auto;
            padding: 40px 10px;
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
            border: 1px solid #164a41;
            background-color: whitesmoke;
        }
        .input-boxes .button input{
            margin-left: 85px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 15px;
            max-width: 200px;
            color: #fff;
            background-color: #487652;
        }
        .input-boxes .button .btn-login{
            color: #fff;
        }
        .input-boxes .button input:hover{
            color: white;
            background-color: #275b48;
            animation: pulse 1s;
        }
        .input-boxes .text a{
            color: #164a41;
            text-decoration: none;
        }
        .input-boxes .text a:hover{
            color: #3c6c4c;
            text-decoration: underline;
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
    <div class="head">
        <label class="logo"><i class="fa fa-mask"></i>&nbsp;Dive&nbsp;<b>Camp</b></label>
    </div>
    <div class="container">
        <form action="<?php echo URLROOT; ?>/users/admin" method="POST">
            <h2>Login as Admin</h2>
            <hr>
            <div class="input-boxes">
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['emailError'];?>
            </span>

                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="password" id="pass" placeholder="Password *">
                </div>
                <span class="invalidFeedback">
                    <?php echo $data['passwordError'];?>
                </span>

                <div class="text"><a href="#forgot-modal">Forgot password?</a></div><br><br>
                <div class="button input-box">
                    <input class="btn-login" name="submit" type="submit" value="Login">
                </div>
            </div>

            <div class="logo">
                <h2>Logo</h2>
               <!-- <img src="dc.jpg" alt=""> -->
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