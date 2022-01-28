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
    <link rel="stylesheet" href="../Main_page/main_style.css">
    <link rel="stylesheet" href="about_style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About_page</title>
</head>

<body>
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
                <a href="../Main_page/main.php">Home</a>
                <a href="./about.php"> About</a>
                <a href="../Resume_page/resume_page.php">Resume</a>
                <a href="../Contact_page/contact_page.php">Contact</a>
                <a href="../Login_page/login_page.php">Login</a>
                <a href="../Sign_up/sign_up_page.php">SingUp</a>

            </div>
        </div>
    
        <div class="biography">
               <h2 class="chronology_title">Timeline chronology</h2>
        </div>
         <section id="timeline">
             <article>
                 <div class="inner">
                     <span class="date">
                         <span class="year">2012</span>
                     </span>
                     <h2>Aliyah to Israel</h2>
                     <p>Return to 'Eretz Israel from Ukraine.</p>
                 </div>
             </article>
             <article>
                 <div class="inner">
                     <span class="date">
                         <span class="year">2013</span>
                     </span>
                     <h2>IDF</h2>
                     <p>Military in Israel Defence Force. Lone soldier.</p>
                 </div>
             </article>
             <article>
                 <div class="inner">
                     <span class="date">
                         <span class="year">2017</span>
                     </span>
                     <h2>University of Haifa</h2>
                     <p>Pre-academic program.</p>
                 </div>
             </article>
             <article>
                     <div class="inner">
                         <span class="date">
                             <span class="year">2018</span>
                         </span>
                         <h2>IEC - Israel Electric Company</h2>
                         <p>Operator of plotter machines in typography center.</p>
                     </div>  
             </article>
             <article>
                <div class="inner">
                    <span class="date">
                        <span class="year">2019</span>
                    </span>
                    <h2>Technion School of Practical Engineers</h2>
                    <p>Practical Software Engineer.</p>
               </div>
             </article>
             <article>
                 <div class="inner">
                     <span class="date">
                         <span class="year">Now</span>
                     </span>
                     <h2>Some title</h2>
                        <p>In this article can be your company😀</p>
                 </div>
             </article>
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
        <script src="../Main_page/main_script.js"></script>
</body>

</html>