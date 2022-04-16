<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME?></title>
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
            font-family: 'Poppins',sans-serif;
            font-size: 15px;
            scroll-behavior: smooth;
            overflow-x:hidden;
        }
        section {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* nav */
        nav {
            position: sticky;
            top: 0;
            background: #616161;
            max-width: 100%;
            margin: 0 auto;
            text-align: center;
        }
        .left .logo{
            display: inline-block;
            border: 2px solid red;
            background-color: #fff;
            height: auto;
        }
        .left .logo img{
            width: 100px;
            height: 100px;
        }
        nav ul .nav-left{ 
            text-align: left;
            padding: 20px 10px;
            width: 50%;
            display: inline-block;
        }
        nav ul .nav-left li {
            display: inline-block;

        }
        nav ul .nav-right{
            text-align: right;
            padding: 20px 10px;
            width: 45%;
            display: inline-block;
        }
        nav ul .nav-right li {
            margin: 5px;
            display: inline-block;

        }
        nav ul li a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 30px;
            color: #fff;
            font-size: 14px;
        }
      
        nav ul li.active {
            background-color: #933b27;
            transition: 0.3s;
            color: #fff;
            animation: pulse 1s;
        }
        nav ul li.active a {
            color: #fff;
        }
        #home{
            background-image: url("img/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            display: block;
            text-align: center;
        }
        #home .text{
            padding-top: 250px;
            height: 100vh;
        }
        #home .text h1{
            font-size: 32px;
        }
        #home .text .arrow{
            font-size: 28px;
            position: absolute;
            bottom: 5px;
        }
        #home .text a{
            text-decoration: none;
            color: white;
        }
        #home .text a:hover{
            color: #fbc337;
        }
        #room{
            padding-top: 100px;
            padding-left: 15px;
            padding-right: 15px ;
            padding-bottom: 15px;
        }
        #room .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            margin: 20px;
            padding: 10px 10px;
        }
        #room .container .card1{
            border: 1px solid gray;
            height: 525px;
            width: 400px;
            margin: 20px;
            border-radius: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            display: inline-block;
        }
        #room .container .card1 img{
            width: 350px;
            height: 300px;
        }
        #room .container .card1 a{
            text-decoration: none;
            color: #000;
        }
        #room .container .card1 i{
            padding-left: 10px;
        }
        #room .container .card2{
            border: 1px solid gray;
            padding: 10px 10px;
            border-radius: 10px;
            height: 525px;
            width: 400px;
            margin: 20px;
            display: inline-block;
        }
        #room .container .card2 img{
            width: 350px;
            height: 300px;
        }
        #room .container .card2 a{
            text-decoration: none;
            color: #000;
        }
        #room .container .card2 i{
            padding-left: 10px;
        }
        #room .container .card3{
            border: 1px solid gray;
            padding: 10px 10px;
            border-radius: 10px;
            height: 525px;
            width: 400px;
            margin: 20px;
            display: inline-block;
        }
        #room .container .card3 img{
            width: 350px;
            height: 300px;
        }
        #room .container .card3 a{
            text-decoration: none;
            color: #000;
        }
        #room .container .card3 i{
            padding-left: 10px;
        }
        #room .container a .btn{
            width: 150px;
            border: none;
            background-color: #16558f;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 14px 10px;
        }

        #about{
            padding: 10px 10px;
        }
        #about table{  
            width: 100%;
            height: 100%;
            padding-top: 82px;
        }
        #about table td{ 
            width: 50%;
        }
        #about table td p{
            text-align: justify ;
            line-height: 25px;
        }
        #contact table{
            width: 100%;
            height: 100%;
        }
        #contact img{
            width: 75%;
            height: 75%;
        }
        #contact .contact-text{
            color: #933b27;
            width: 100%;
            height: 100%;
            padding-top: 180px;
            text-align: center;
        }
        #contact .contact-text h1{
            font-size: 34px;
        }
        #contact .contact-text .contact-inp{
            text-align: left;
            padding: 15px 10px;
        }
        #contact .contact-text .contact-inp input{
            border: 2px solid #933b27;
            border-radius: 10px;
            padding: 10px 10px;
            width: 100%;
            max-width: 100%;
            font-size: 14px;
            font-family: 'Poppins',sans-serif;
            margin: 10px;
            outline: #933b27;
        }
     
        #contact .contact-text .contact-inp textarea{
            border: 2px solid #933b27;
            border-radius: 10px;
            padding: 10px 10px;
            margin: 10px;
            max-width: 100%;
            font-size: 14px;
            width: 100%;
            font-family: 'Poppins',sans-serif;
            outline: #933b27;
        }
        #contact .contact-text .contact-inp button{
            padding: 15px 10px;
            width: 250px;
            border: none;
            font-weight: 600;
            color: #933b27;
            font-size: 16px;
            background-color: #fbc337;
            border-radius: 10px;
        }

        /* media */
        @media screen and (max-width: 992px) {
            #room{
                display: flex;
            }
            #room .container .card1{
                font-size: 14px;
                width: auto;
                height: auto;
            }
            #room .container .card1 img{
                width: 250px;
                height: 200px;
            }
            #room .container .card2{
                font-size: 14px;
                width: auto;
                height: auto;
            }
            #room .container .card2 img{
                width: 250px;
                height: 200px;
            }
            #room .container .card3{
                font-size: 14px;
                width: auto;
                height: auto;
            }
            #room .container .card3 img{
                width: 250px;
                height: 200px;
            }
            #about{
                display: flex;
            }
            #about img{
                width: 400px;
                height: 400px;
            }
            #about .about-content{
                font-size: 14px;
                width: 100%;
                height: 100vh;
                padding-top: 100px;
            }
          
        }
        @media screen and (max-width: 600px) {
            #room{
                display: flex;
            }
            #room .container .card1{
                margin: 0px;
                font-size: 12px;
                width: auto;
                height: auto;
            }
            #room .container .card1 img{
                width: 150px;
                height: 100px;
            }
            #room .container .card1 .btn{
                width: 100px;
                font-size: 12px;
                padding: 5px 5px;
            }
            #room .container .card2{
                margin: 0px;
                font-size: 12px;
                width: auto;
                height: auto;
            }
            #room .container .card2 img{
                width: 150px;
                height: 100px;
            }
            #room .container .card2 .btn{
                width: 100px;
                font-size: 12px;
                padding: 5px 5px;
            }
            #room .container .card3{
                margin: 0px;
                font-size: 12px;
                width: auto;
                height: auto;
            }
            #room .container .card3 img{
                width: 150px;
                height: 100px;
            }
            #room .container .card3 .btn{
                width: 100px;
                font-size: 12px;
                padding: 5px 5px;
            }
            #about{
                display: flex;
            }
            #about img{
                width: 200px;
                height: 200px;
            }
            #about .about-content{
                font-size: 10px;
                width: 100%;
                height: 100vh;
                padding-top: 150px;
            }
            #about .about-content p{
                line-height: 15px;
            }
          
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <div class="nav-left">
                <li class="home active"><a href="#home">Home</a></li>
                <li class="room"><a href="#room">Rooms</a></li>
                <li class="about"><a href="#about">About us</a></li>
                <li class="contact"><a href="#contact">Contact us</a></li>
            </div>
            <div class="nav-right">
                <li><a href="<?php echo URLROOT; ?>/users/login" style="background-color: #16558f; color: #fff;"> Login</a></li>
                <li><a href="<?php echo URLROOT; ?>/users/register" style="background-color: #fbc337; color: #000;">Sign Up</a></li>
            </div>
        </ul>
    </nav>

    <section id="home">     
        <div class="text">
            <h1>Welcome to our website</h1><br>
            <h3>New here?</h3><br>
            <p>Sign Up and discover great experience and be more relaxed <br> here in DiveCamp resort.</p>
            <a href="#room"><i class="arrow fa fa-arrow-down"></i></a>
        </div>
    </section>

    <section id="room">
        <div class="container">
            <div class="card1">
                    <a href="">
                        <center>
                            <img src="img/room1.jpg" alt="">
                            <h3>Small Room</h3><br>
                        </center>

                        <i class=" fa fa-location-dot"></i>&nbsp;&nbsp;<label>Location: Bien Unido, Bohol</label><br>
                        <i class="fa fa-peso-sign"></i>&nbsp;&nbsp;<label>Starting from: <i class="fa fa-peso-sign"></i> 2000</label><br>
                        <i class="fa fa-star"></i>&nbsp;&nbsp;<label>Rating : 8/10</label><br><br>
                        <center>
                            <button class="btn">Book Now</button>
                        </center>
                    </a>
            </div>
            <div class="card2">
                <a href="">
                    <center>
                        <img src="img/room2.jpg" alt="">
                        <h3>Medium Room</h3><br>
                    </center>

                    <i class=" fa fa-location-dot"></i>&nbsp;&nbsp;<label>Location: Bien Unido, Bohol</label><br>
                    <i class="fa fa-peso-sign"></i>&nbsp;&nbsp;<label>Starting from: <i class="fa fa-peso-sign"></i> 2000</label><br>
                    <i class="fa fa-star"></i>&nbsp;&nbsp;<label>Rating : 8/10</label><br><br>
                    <center>
                        <button class="btn">Book Now</button>
                    </center>
                </a>
            </div>
            <div class="card3">
                <a href="">
                    <center>
                        <img src="img/room3.jpg" alt="">
                        <h3>Large Room</h3><br>
                    </center>

                    <i class=" fa fa-location-dot"></i>&nbsp;&nbsp;<label>Location: Bien Unido, Bohol</label><br>
                    <i class="fa fa-peso-sign"></i>&nbsp;&nbsp;<label>Starting from: <i class="fa fa-peso-sign"></i> 2000</label><br>
                    <i class="fa fa-star"></i>&nbsp;&nbsp;<label>Rating : 8/10</label><br><br>
                    <center>
                        <button class="btn">Book Now</button>
                    </center>
                </a>
            </div>
            
        </div>
    </section>
    <section id="about">
        <table>
            <tr>
                <td>
                   <center>
                        <img src="img/dc-logo.png" alt="">
                   </center>
                </td>
                <td style="vertical-align: top; padding: 30px 20px;">
                    <div class="about-content">
                        <h1>About Us</h1><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum <br><br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p> 
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <section id="contact">
       <table>
           <tr>
               <td style="padding-top: 80px; width: 40%;">
                   <center>
                       <img src="img/contact.png" alt="">
                   </center>
               </td>
               <td style="padding: 10px 10px; width: 60%;">
                    <div class="contact-text">
                        <h1>Contact Us</h1>
                        <h3>For all queries, please e-mail us using the form below.</h3>
                        <div class="contact-inp">
                            <h5>How can we help you?</h5>
                            <input type="text" placeholder="Email Address"><br>
                            <input type="text" placeholder="Subject"><br>
                            <textarea name="message" placeholder="Message"></textarea><br>
                            <center>
                                <a href=""><button>Send Message</button></a>
                            </center>
                        </div>
                    </div>
                    
               </td>
           </tr>
       </table>
    </section>

    <script>
        const sections = document.querySelectorAll("section");
        const navLi = document.querySelectorAll("nav ul li");
        window.onscroll = () => {
        var current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
            current = section.getAttribute("id"); }
        });

        navLi.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
            li.classList.add("active");
            }
        });
        };
    </script>
</body>
</html>