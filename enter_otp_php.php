<?php
session_start();
if(isset($_SESSION["confirmmailsend"]))
{ 

 include('db_connection.php');
   
    if(isset($_POST['submit'])) 
    {
    	$otp = $_POST['token'];
    	if($otp == $_SESSION["token"])
    	{    			
    	    $_SESSION["otp_validate"] = "true_status";
            header("Location: new_password.php");
    	}
    	else
    	{       $_SESSION["error"] = "Invalid OTP";
    			header("Location: enter_otp.php");
    	}
   }
   else
   {
   		$_SESSION["error"] = "Please Enter OTP";
        header("Location: enter_otp.php");
   }
}
else
{   
     header("Location: enter_email_reset_pass.php");
}
?>