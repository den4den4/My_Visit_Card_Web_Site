<?php
session_start();
if(isset($_SESSION['mail']))
{
    include("../User_session_logo/user_logo.php");
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendmail_contact($name, $email, $topic, $subject)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '';                     //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;
        //Recipients
        $mail->Subject = $subject;

        // Sender and recipient settings
        $mail->setFrom('', $email);
        $mail->addAddress('' , $name);
        $mail->isHTML(true); 
        $mail->Subject = "Contact me mail from '$email'";
        $mail->Body    = '<p><b style="font-style:20px;">' . $topic . '</b><br>' . $subject .'</p>';
        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }     

}
    
if (isset($_POST["contact"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $topic = $_POST["topic"];
    $subject = $_POST["subject"];   

    sendmail_contact($name, $email,$topic, $subject);
    $mes = "Thank you for contact us.<br>We will be in touch with you very soon.";
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
  <link rel="stylesheet" href="contact_style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Contact_page</title>
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
                <a href="./contact_page.php">Contact</a>
                <a href="../Login_page/login_page.php">Login</a>
                <a href="../Sign_up/sign_up_page.php">SingUp</a>

            </div>

     </div>


      <div class="title">
          <h2 class="contact_me">Contact me</h2>
      </div>


     
     <form id="contact_form" action="" method="post" >
         <div>
             <img src="https://cdn4.iconfinder.com/data/icons/basic-user-interface-elements/700/mail-letter-offer-256.png"
                 alt="icon">
         </div>
         <input type="text" name="name" maxlength="30" placeholder="Name" required>
         <input type="email" name="email" maxlength="40" placeholder="E-mail address" required>
         <input type="text" name="topic" maxlength="30" placeholder="Topic" required>
         <textarea name="subject" placeholder="Subject"></textarea>
         <input type="submit" name="contact" value="Send">
         <p id="msg" style="display:block; color:white;text-align:center;">
                <?php 
                   if(isset($mes)) 
                        echo $mes; 
                ?></p> 
     </form>
     
         
        

     
    
  

     <div class="myMail">
         <h2>You also can get me here<br></h2>
         <p>den4.tsymbalenko@gmail.com<br>Tel. +972525967420</p>
     </div>



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