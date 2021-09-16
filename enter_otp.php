<?php
    session_start();
if(isset($_SESSION["confirmmailsend"]))
{  
   echo $_SESSION["mailsent"]; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="style12.css">
    </head>
    <body>
        <div class="container" id="container">
			<form action="enter_otp_php.php" method="post">
				<h1>Enter OTP</h1>
				<br>
				<span> use your OTP</span>
 
				<?php
					if(isset($_SESSION["error"]))
					{  
						
					   $error = $_SESSION["error"];
						echo "<h5 style=\"color: red\"> ".$error. "</h5>";
					   unset($_SESSION["error"]);
					}
				?> 
				 <?php
					if(isset($_SESSION["msg"]))
					{
					   $msg = $_SESSION["msg"];
						echo "<h5 style=\"color: purple\">".$msg."</h5>";
						unset($_SESSION["msg"]);
					}
				?> 
				<input type="OTP" name="token" placeholder="One-time-password" required /><br>
				<button type="submit" name="submit"> Submit </button><br>
				<button onclick="document.location='loginpage.php'"id="signin">Login</button>
			</form>
        </div>
    </body>
</html>
<?php
    }
    else 
    {  
    	header("Location: enter_email_reset_pass.php");
    }
?>