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
         <link rel="stylesheet" href="resume_style.css">
        <link rel="stylesheet" href="../Main_page/main_style.css">
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Resume_page</title>
</head>
<body>
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
                    <a href="../About_page/about.php"> About</a>
                    <a href="./resume_page.php">Resume</a>
                    <a href="../Contact_page/contact_page.php">Contact</a>
                    <a href="../Login_page/login_page.php">Login</a>
                    <a href="../Sign_up/sign_up_page.php">SingUp</a>

                </div>
            </div>



  
              <div class="thumb">
                  <div class="info">
                      <h3>Hello!</h3>
                  </div>
              </div>

           
                <div class="resume_text">

                    <h2>About me:</h2>
                    High-motivated graduate of Technion College with strong desire to study. Persistent and purposeful
                    in achieving goals. Punctual and decent in work and life. Highly responsible, enthusiastic and a
                    fast-pace worker. Independent and team player. Self and fast learner, thirsty for knowledge and
                    challenges.
                    <h2>Programming languages:</h2>
                    C, C#, SQL, Java, Python, PHP, HTML, CSS
                    <h2>Work environment and programs:</h2>
                    MS SQL, MongoDB, Visual Studio, Eclipse, Windows, Linux, MS Office, phpMyAdmin
                    <h2>Skills:</h2>
                     &emsp;&bull; Object Oriented Programming. <br>
                     &emsp;&bull; Entity Framework, .NET Framework(ASP.NET, ADO.NET, LINQ). <br>
                     &emsp;&bull; Familiar with Source Version Control tools like Git and Bitbucket. <br>
                     &emsp;&bull; Knowledge of algorithms and their complexity. <br>
                     &emsp;&bull; Linux OS and Bash\Shell scripts, DOS. <br>
                     &emsp;&bull; Global system vision and understanding of logical tasks. <br>
                     &emsp;&bull; Ability to planning and diagram building (UML, DFD, ERD, Activity, Sequence, Class
                     diagrams). <br>
                     &emsp;&bull; TCP-IP/OSI models and Network protocols (TCP, UDP, HTTP/S, DHCP, DNS). <br>
                     &emsp;&bull; Assembly language. <br>
                     &emsp;&bull; Experience in projects in college: Java (Simple E-shop Application), Android (Game for
                     kids), <br>
                     &emsp;&emsp;JavaScript (One-page casino game). <br>
                     &emsp;&bull; Good understanding of MVC design patterns. <br>
                     &emsp;&bull; Ability to analyze and understand complex problems. <br>
                     &emsp;&bull; Final project on C# (Winforms) – Management of Beauty Salon business. <br>
                     <h2>Education:</h2>
                    2018 – 2021 - Practical Software Engineer (Technion School of Practical Engineers) <br>
                     &emsp;&bull; A Mahat score on C language - 100 <br>
                     &emsp;&bull; Average score - 85 <br>
                    2017 – 2018 - Pre-academic program (University of Haifa)
                
            </div>



            <a class="button" href="../Img/Denys Tsymbalenko Resume.pdf" download="Denys Tsymbalenko Resume">
                <span>Download resume</span>
                <div class="liquid"></div>
            </a>

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
                        <li><a href="https://github.com/den4den4"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
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