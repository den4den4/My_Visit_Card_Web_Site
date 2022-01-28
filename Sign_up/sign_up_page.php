<?php
session_start();
if(isset($_SESSION['mail']))
{
    include("../User_session_logo/user_logo.php");
}


function encryptPass($password) {
    $sSalt = '$2y$10$1qb2f.Xd9CVpaeozsH2CFeaXSTqxXgq/EHvtkNYoH.zyd7gsIEo7q';
    $sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
    $method = 'aes-256-cbc';

    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

    $encrypted = base64_encode(openssl_encrypt($password, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
    return $encrypted;
}


if (isset($_POST["signUP"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    
        

    $conn = mysqli_connect("localhost", "root", "", "users");   
    $sql = "SELECT * FROM user_data WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0)
    {
       $email_error = "Email not found, you need to create account in Log In.";
    }
    else
    {
        $user = mysqli_fetch_object($result);
        $encrypted = encryptPass($password);
        if($encrypted != $user->password)
        {
            $password_error = "Incorrect password.";
        }
        else
        {
            if($user->email_verified_at == NULL)
            {
                header("Location: ../Login_page/email-verification.php?email=" . $email); 
            }
            else
            {
                $_SESSION['mail'] = $email;
                 include("../User_session_logo/user_logo.php"); 
            }
             
        }
        
    }
    
    
    
}

?>


<?php include("./sign_up_header.php");?>

<form id="sing_up_form" action="" method="post">
    <div>
        <img src="../Img/user.png" alt="icon">
    </div>
    <input type="email" name="email" maxlength="40" placeholder="E-mail" required>
    <input type="input" name="password" maxlength="30" placeholder="Password" required>
    <input type="submit" name="signUP" value="Sign up">
   <p id="msg" style="display:block; color:white;text-align:center;">
     <?php 
        if(isset($email_error)) 
            echo $email_error; 
        if(isset($password_error))     
           echo $password_error;
    ?></p> 




    <section>
        <a href="../Reset_password/reset_password.php">Forgot password?</a>
    </section>
    <section>
        <a href="./sign_up_page.php">Have account? Sing Up!</a>
    </section>

</form>

<?php include("./sign_up_footer.php");?>