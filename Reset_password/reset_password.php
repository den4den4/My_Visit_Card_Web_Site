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

function sendmail_reset_pass($email,$pass)
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
        $mail->setFrom('', '');
        $mail->addAddress($email ,'Denys Tsymbalenko');     //Add a recipient
        $mail->isHTML(true); 
        

        $mail->Subject = 'Password reset';
        $mail->Body    = '<p>Your password is:<b style="font-style:20px;">' . $pass . '</b></p>';

        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }     

}


function decryptPass($password) {
    $sSalt = '$2y$10$1qb2f.Xd9CVpaeozsH2CFeaXSTqxXgq/EHvtkNYoH.zyd7gsIEo7q';
    $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
    $method = 'aes-256-cbc';

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

    $decrypted = openssl_decrypt(base64_decode($password), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}

if (isset($_POST["reset"]))
{
    $email = $_POST["email"];

        $conn = mysqli_connect("localhost", "root", "", "users");
        $sql = "SELECT password FROM user_data WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0)
        {
        $email_error = "Email not found,  you need to create account in Log In.";
        }
        else
        {
            if($row = mysqli_fetch_assoc($result))
              $encrypted_password = $row["password"];  


              $decrypted_password = decryptPass($encrypted_password); 

              sendmail_reset_pass($email, $decrypted_password);
               $email_msg = "Password send via mail.";
        }
        
}
?>

<?php include("./reset_password_header.php");?>
   
            

             <form id="email_form" action="" method="post">
                 <div>
                     <img src="../Img/user.png" alt="icon">
                 </div>
                 <input type="email" name="email" maxlength="30" placeholder="Enter E-mail for reset password" required>  
                 <input type="submit"name="reset" value="Log in">
               
                <p id="msg" style="display:block; color:white;text-align:center;">
                <?php 
                   if(isset($email_msg)) 
                        echo $email_msg; 
                   if(isset($email_error)) 
                        echo $email_error;     
                ?></p>           
                        <section>
                                <a href="./reset_password.php">Forgot password?</a>
                        </section>
                        <section>
                                  <a href="../Sign_up/sign_up_page.php">Have account? Sing Up!</a>
                        </section>  
             </form>

<?php include("./reset_password_footer.php");?>             