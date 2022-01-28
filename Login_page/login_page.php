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

function sendmail_verify($name, $email, $verification_code)
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
        $mail->setFrom('', $name);
        $mail->addAddress($email , $name);     //Add a recipient
        $mail->isHTML(true); 
        

        $mail->Subject = 'E-mail verification';
        $mail->Body    = '<p>Your verification code is:<b style="font-style:20px;">' . $verification_code . '</b></p>';

        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }     

}

function encryptPass($password) {
    $sSalt = '$2y$10$1qb2f.Xd9CVpaeozsH2CFeaXSTqxXgq/EHvtkNYoH.zyd7gsIEo7q';
    $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
    $method = 'aes-256-cbc';

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

    $encrypted = base64_encode(openssl_encrypt($password, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
    return $encrypted;
}

if (isset($_POST["register"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];   
    

    $verification_code = substr(number_format(time() * rand(), 0, '',''), 0, 6);
    $encrypted_password = encryptPass($password); //password_hash($password, PASSWORD_DEFAULT);
    
   
   

        $conn = mysqli_connect("localhost", "root", "", "users");
        $check_email_query = "SELECT email FROM user_data WHERE email = '$email' LIMIT 1";
        $check_email_query_run = mysqli_query($conn, $check_email_query);
         
        if(mysqli_num_rows($check_email_query_run) > 0)
        {
            $error_email_msg = "Email already exist. Go to Sign Up!";
        }
        else
        {
            $sql = "INSERT INTO user_data(name, email, password, verification_code, email_verified_at)
            VALUES ('$name', '$email', '$encrypted_password', '$verification_code', NULL)";
            $query_run = mysqli_query($conn, $sql);
            if($query_run)
            {
                sendmail_verify($name, $email, $verification_code);
                header("Location: email-verification.php?email=" . $email);
            }

        }    
}
?>

<?php include("./login_header.php");?>
   
            

             <form id="email_form" action="" method="post">
                 <div>
                     <img src="../Img/user.png" alt="icon">
                 </div>
                 <input type="input" name="name" maxlength="30" placeholder="Name" required>
                 <input type="email" name="email" maxlength="40" placeholder="E-mail" required>
                 <input type="input" name="password" maxlength="30"  placeholder="Password" required>
                 <input type="submit"name="register" value="Log in">
               
                <p id="msg" style="display:block; color:white;text-align:center;">
                <?php 
                   if(isset($error_email_msg)) 
                        echo $error_email_msg;  
                   if(isset($error_registration_msg))
                        echo $error_registration_msg;
                ?></p>           
                        <section>
                                <a href="../Reset_password/reset_password.php">Forgot password?</a>
                        </section>
                        <section>
                                  <a href="../Sign_up/sign_up_page.php">Have account? Sing Up!</a>
                        </section>  
             </form>

<?php include("./login_footer.php");?>             