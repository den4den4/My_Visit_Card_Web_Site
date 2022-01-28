<?php
session_start();
if(isset($_SESSION['mail']))
{
    include("../User_session_logo/user_logo.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Montserrat:wght@200&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../Img/logoSw.png" />
    <link rel="stylesheet" href="main_style.css">
    <script src="main_script.js"></script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Denys Tsymbalenko Software Developer</title>
</head>

<body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <header>
        <div class="NameAndSoftware">
            <div class="MyName">Denys Tsymbalenko</div>
            <div class="logoSoftware">Software developer {&lt; / &gt;};</div>
        </div>
        <div id="amp-burger" class="sh_hd">
            <div class="lines">
                <input type="checkbox" class="checkbox" onclick="ShowMenu()">
                <div class="lines-icon" data-menu="">
                    <div class="icon-left"></div>
                    <div class="icon-right"></div>
                </div>
            </div>
            <div class="text">MENU</span></div>
    </header>
    <section class="nav">
        <div class="navigation black topBotomBordersOut">
            <div id="menu">
                <a href="main.php">Home</a>
                <a href="../About_page/about.php"> About</a>
                <a href="../Resume_page/resume_page.php">Resume</a>
                <a href="../Contact_page/contact_page.php">Contact</a>
                <a href="../Login_page/login_page.php">Login</a>
                <a href="../Sign_up/sign_up_page.php">SingUp</a>

            </div>
        </div>
    </section>
    <section class="Smoke">
        <span>H</span><span>e</span><span>l</span><span>l</span><span>o</span><span>&nbsp;</span><span>S</span><span>t</span><span>r</span><span>a</span><span>n</span><span>g</span><span>e</span><span>r</span><span>&nbsp;</span><span>!</span>
    </section>
    <section class="texts">
        <div>
            <p class="Junior">I 'm junior software developer and I use Web technologies such as HTML/CSS, Javascript,
                PHP and MySQL database
                to build this site. If you want to explore my skills you can go to 'Resume'.</p>
        </div>
    </section>
    <div class="picture">
        <div class="myrow">
            <div class="tdimension">
                <a href="#">
                </a>
            </div>
        </div>

        <div>
            <p class="funny_text">Some facts about this project 😀</p>
        </div>
        <section class="wow fadeIn animated">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                        data-wow-duration="300ms"
                        style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;"> <i
                            class="fa fa-code medium-icon"></i> <span id="anim-number-pizza"
                            class="counter-number"></span>
                        <span class="timer counter alt-font appear" data-to="980" data-speed="7000">5332</span>
                        <p class="counter-title">Strings of code</p>
                    </div>
                    <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
                        data-wow-duration="900ms"
                        style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;"> <i
                            class="fa fa-book medium-icon"></i> <span class="timer counter alt-font appear"
                            data-to="810" data-speed="7000">755</span> <span class="counter-title">Study hours</span>
                    </div>
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated"
                        data-wow-duration="600ms"
                        style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;"> <i
                            class="fa fa-coffee medium-icon"></i> <span class="timer counter alt-font appear"
                            data-to="980" data-speed="7000">987</span> <span class="counter-title">Coffee drinked</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
                        data-wow-duration="1200ms"
                        style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;"> <i
                            class="fa fa-bug medium-icon"></i> <span class="timer counter alt-font appear" data-to="600"
                            data-speed="7000">281</span> <span class="counter-title">Bugs fixed</span> </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="Cube_logo">
                <div class="cube">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                    <div class="five"></div>
                    <div class="six"></div>
                </div>
            </div>
            <div class="MySotial">
                <ul>
                    <li><a href="https://www.facebook.com/den.tsimbalenko"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://github.com/den4den4"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/den-tsymbalenko-940603180/"><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/den4den4/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="Designed_logo">Designed by Denys Tsymbalenko</div>
        </footer>
        <script src="main_script.js"></script>
</body>

</html>