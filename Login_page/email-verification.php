<?php
session_start();
if(isset($_SESSION['mail']))
{
    include("../User_session_logo/user_logo.php");
}
if (isset($_POST["verify_email"]))
{
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];
    

    $conn = mysqli_connect("localhost", "root", "", "users");
    $sql = "UPDATE user_data SET email_verified_at = NOW() WHERE email = '$email' AND verification_code = '$verification_code'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) == 0)
    {
      $error_verify_code = "Wrong verification code.";
    }
    else
    {
        $succses_code = "You have been verified successfully";
        header("Location: ../Sign_up/sign_up_page.php");
    }

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
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login_page</title>
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
                    <a href="../About_page/about.php"> About</a>
                    <a href="../Resume_page/resume_page.php">Resume</a>
                    <a href="../Contact_page/contact_page.php">Contact</a>
                    <a href="./login_page.php">Login</a>
                    <a href="../Sign_up/sign_up_page.php">SingUp</a>

                </div>
            </div>
    </section>
            <div class="title">
                <h2 class="Login_title" style="width: 14ch;">Email verification</h2>
            </div>

         <form id="verification_form" action="" method="post">
                 <div>
                     <img src="../Img/user.png" alt="icon">
                 </div>
                  <input type="hidden" name="email" value="<?php echo $_GET["email"];?>" required>
                  <input type="text" name="verification_code" placeholder="Enter verification code" required/>
                  <input type="submit"name="verify_email" value="Verify Email">
                 <p class="error" style="color:white;text-align:center;">
                  <?php 
                   if(isset($error_verify_code))
                        echo $error_verify_code;
                   if (isset($succses_code))
                        echo $succses_code;        
                  ?></p>

                        <section>
                                <a href="#">Forgot password?</a>
                        </section>
                        <section>
                                  <a href="#">Have account? Sing Up!</a>
                        </section> 
         
        </form>

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






   