<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
include('db_connection.php');
if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $query=mysqli_query($conn,"select * from student where EmailId = '$email'");
    if(mysqli_num_rows($query) <= 0)
    {
         $_SESSION["error"] = "Sorry !! This user does not exist...";
         header("Location: enter_email_reset_pass.php");
  
    }
     else
    {
        $row = mysqli_fetch_assoc($query);
        $name = "Witness Daily";
        $subject = "Reset Password";
        $token = rand(1000,9999);
        $body = "Hi , this is OTP " . $token . " Pleses Enter This OTP to reset your password on our Witness Daily ";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();
    
            //smtp settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "shreyatiwari.sbg@gmail.com";
        $mail->Password = 'shreya@2000';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress("$email");
        $mail->Subject = ("$subject");
        $mail->Body = $body;
       
            if($mail->send()){
                  $_SESSION["confirmmailsend"] = $email;
                  $_SESSION["email"] = $email;  
                  $_SESSION["token"] = $token; 
                  $_SESSION["msg"] = "Mail Successfully send to this ".$email." Email Please Enter the OTP";
                  header("Location: enter_otp.php");
            }
            else
            {
                    $_SESSION["error"] = "Mail have Been not send due to Technical Error !!!! Try Again Later";
                    header("Location: enter_email_reset_pass.php");
            }
  }
       
}
else
{
  $_SESSION["error"] = "Please Enter The Email";
  header("Location: enter_email_reset_pass.php");
}


?>
      

