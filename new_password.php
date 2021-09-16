<?php
session_start();
	if(isset($_SESSION["confirmmailsend"]) && $_SESSION["otp_validate"] == "true_status" )
	{  
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="style12.css">
    </head>
    <body>
        <div class="container" id="container">
                <form action="new_password_php.php" method="post">
                    <h1>Enter New Password</h1>
                    <br>
                    <span> Password </span>
                    <?php
                        if(isset($_SESSION["error"]))
                        {  
                            
                           $error = $_SESSION["error"];
                            echo "<h5 style=\"color: red\"> ".$error. "</h5>";
                           unset($_SESSION["error"]);
                        }
                    ?>
                    <input type="Password" name="password" placeholder="New Password" required /><br>
                    <input type="Password" name="confirmpassword" placeholder="Confirm Password" required /><br>
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
    //echo $_SESSION["mailsent"];
//     echo "otp enter not";
//     echo $_SESSION["mailsent"];
	header("Location: enter_email_reset_pass.php");
}
?>
