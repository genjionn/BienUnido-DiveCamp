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
            font-family: 'Poppins'sans-serif;
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
        #home {
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding: 200px 0px ;
            color: #000;
            margin-top: auto;
            margin-bottom: auto;
            height:800px;
            width: 100%;
            background-image: url("img/bckg.png");
            background-size:cover;
        }
        #home h1{
            font-size: 40px;
        }
        #home p{
            font-size: 18px;
            line-height: 30px;
        }
        #home a{
            color: #000;
            text-decoration: none;
        }
        #home button{
            font-size: 16px;
            font-weight: 800;
            width: 150px;
            padding: 10px 10px;
            margin: 10px;
            border: 2px solid #f1b24a;
            border-radius: 100px;
            background-color: transparent;
            color: #000;
        }
        #home button:hover{
            background-color: #f1b24a;
            animation: pulse 1s;
        }
        #room {
            background-color: #fff;
        }
        #dining {
            background-color: #fff;
        }
        /* about */
        #about{
            margin:10px;
        }
        #about table{
            width: 100%;
            height: 100vh;
        }
        #about table td{
            width: 50%;
        }
        #about table td .image{
            display:flex;
            justify-content: center;
            align-items: center;
            padding:10px 10px;
            margin-top: 70px;
        }
        #about table td img{
            width: 80%;
            height: 80vh;
        }
        #about table td .content{
            width: 100%;
            height: 100vh;
            padding: 20px 10px;
        }
        #about table td .head{
            font-size: 18px;
            margin-top: 100px;
            margin-bottom:10px;
        }
        #about table td .text{
            padding:10px 10px;
            margin-bottom: 5px;
        }
        #about table td .text p{
            font-size: 12px;
            line-height: 20px;
        }
        #about .sec-table{
            width:100%;
            height:auto;
        }
        #about .sec-table #team{
            padding:10px 10px;
            font-size:12px;
            text-align: center;
        }
        /* contact */
        #contact{
            background-image: url("img/bckg.png");
            background-size:cover;
           
        }
        #contact .contact-container{
            display: flex;
            justify-content: left;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        #contact .contact-container .image{   
            width: auto;
            height: auto;
        }
        #contact .contact-container img{
            height: 350px;
            width: 350px;
            margin-right: 20px;
        }
        #contact .contact-container .contact-content{
            width: 70%;
            height: auto;
            padding: 10px 20px;
            display: inline-block;
        }
        #contact .contact-container .contact-content h1{
            text-align: center;
            font-size: 32px;
            color: #720000;
        }
        #contact .contact-container .contact-content h3{
            padding: 10px 0px;
            text-align: center;
            color: #720000;
        }
        #contact .contact-container .contact-content h4{
            padding-top: 30px;
            padding-left: 10px;
            color: #720000;
        }
        #contact .contact-container .contact-content .contact-input input{
            padding: 10px 10px;
            margin: 10px;
            width: 95%;
            border: 2px solid #720000;
            border-radius: 10px;
        }
        #contact .contact-container .contact-content .contact-input textarea{
            padding: 10px 10px;
            margin: 10px;
            width: 95%;
            max-width: 95%;
            height: 80px;
            max-height: 80px;
            border: 2px solid #720000;
            border-radius: 10px;
        }
        #contact .contact-container .contact-content button{
            padding: 15px 10px;
            margin: 5px;
            width: 350px;
            border: none;
            background-color: #7c0505;
            border-radius: 10px;
        }
        #contact .contact-container .contact-content button:hover{
            background-color: #720000;
        }
        #contact .contact-container .contact-content a{
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        /* nav */
        nav {
            position: sticky;
            top: 0;
            background: #f1b24a;
        }
        nav {
            max-width: 100%;
            margin: 0 auto;
            text-align: center;
            padding: 20px 10px;
        }
        nav ul .left .logo{ 
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 100px;
            float: left;
            font-size: 24px;
            color: #720000;
        }
        nav ul .left .logo:hover{ 
            cursor: pointer;
        }
        nav ul .left b{
            color: #000072;
        }
        nav ul .right{
            margin-left: auto;
            text-align: right;
            padding: 0px 10px;
            width: 50%;
        }
        nav ul .right li {
            display: inline-block;
            border-radius:5px;
        }
        nav ul li a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 30px;
            color: #000;
            font-size: 14px;
        }
        nav ul li a:hover {
            background-color: #720000;
            border-radius:30px;
            color: #fff;
            animation: pulse 1s;
        }
        nav ul li.active {
            background-color: #720000;
            border-radius:30px;
            transition: 0.3s;
            color: #fff;
            animation: pulse 1s;
        }
        nav ul li.active a {
            color: #fff;
        }

        /* media */
        @media screen and (max-width: 800px) {
            #contact .contact-container .image img{
                display: none;
                width: 200px;
                height: 200px;
            }
            #contact .contact-container .contact-content{
                position: relative;
                top:50px;
                width: 100%;
                height: auto;
            }
        }
        @media screen and (max-width: 600px) {
            #home h1{
                font-size: 26px;
            }
            #home h3{
                font-size: 18px;
            }
            #home p{
                font-size: 14px;
            }
            #home button{
                width: 100px;
                padding: 5px 5px;
                font-size: 12px;
            }
            @media screen and (max-width:1200px){
                #about .inner-container{
                    padding: 80px;
                }
            }

            @media screen and (max-width:1000px){
                #about .about-section{
                    background-size: 100%;
                    padding: 100px 40px;
                }
                #about .inner-container{
                    width: 100%;
                }
            }

            @media screen and (max-width:600px){
                #about .about-section{
                    padding: 0;
                }
                #about .inner-container{
                    padding: 60px;
                }
            }
            /* Room */

            /* Dining */

            /* About us */
      
            /* Contact us */
            #contact .contact-container .image img{
                display: none;
                margin: 0%;
            }
            #contact .contact-container .contact-content{
                position: relative;
                top: 100px;
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <div class="left"> 
                <li class="logo"><i class="fa fa-house"></i>&nbsp;Dive&nbsp;<b>Camp</b></li>
            </div>
           
            <div class="right">
                <li class="home active"><a href="#home">Home</a></li>
                <li class="room"><a href="#room">Rooms</a></li>
                <li class="dining"><a href="#dining">Dining</a></li>
                <li class="about"><a href="#about">About us</a></li>
                <li class="contact"><a href="#contact">Contact us</a></li>
            </div>
            
        </ul>
    </nav>

    <section id="home">
        <h1>welcome to our website</h1><br>
        <h3>New here?</h3><br>
        <p>Signup and discover great experience and be more relaxed <br> here in DiveCamp resort.</p><br><br>
        <button class="btn-login"><a href="<?php echo URLROOT; ?>/users/login"> Login</button></a>
        <button class="btn-signup"><a href="<?php echo URLROOT; ?>/users/register"> Sign Up</button></a>
    </section>

    <section id="room">
        <h1>Rooms</h1>
    </section>

    <section id="dining">
        <h1>Dining</u></h1>
    </section>

    <section id="about">
        <table>
            <tr>
                <td>
                    <div class="image">
                        <img src="img/pic.jpg" alt="">
                    </div>
                </td>
                <td>
                    <div class="content">
                        <div class="head">
                           <h1>About Us</h1>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    
                    <table class="sec-table">
                        <tr>
                            <th colspan="2" style="padding:10px 10px;">Team Developers</th>
                        </tr>
                        <tr>
                            <td id="team">Autida, Christian Kyle</td>
                            <td id="team">Frontend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Co, Cris</td>
                            <td id="team">Backend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Genobaten, Jon Anthony</td>
                            <td id="team">Backend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Lumayag, Kyle Jhunelle</td>
                            <td id="team">Backend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Moneza, Michael</td>
                            <td id="team">Backend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Repunte, Christiane</td>
                            <td id="team">Frontend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Samson, John Philip</td>
                            <td id="team">Frontend Developer</td>
                        </tr>
                        <tr>
                            <td id="team">Tercero, Gede Edriane</td>
                            <td id="team">Backend Developer</td>
                        </tr>
                    </table>
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <section id="contact">
       <div class="contact-container">
        <div class="image">
            <img src="img/message.png" alt="">
        </div>
        <div class="contact-content">
            <h1>Contact Us</h1>
            <h3>For all queries, please email us using the form below.</h5>
            <h4>How can we help you?</h3>
            <div class="contact-input">
                <input type="email" name="email" id="email" placeholder="Email address"><br>
                <input type="text" name="subject" id="subject" placeholder="Subject"><br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <center>
                <button><a href="">Send Message</a></button>
            </center>
            
        </div>
       </div>
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