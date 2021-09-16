<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" href="style12.css">
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="reset_pass_email.php" method="post">
                    <h1>Reset Password</h1>
                    <br>
                    <span>Use your Email</span>
                     <?php
                     session_start();
                        if(isset($_SESSION["error"]))
                        {  
                        
                           $error = $_SESSION["error"];
                            echo "<h5 style=\"color: red\"> ".$error. "</h5>";
                           unset ($_SESSION["error"]);
                        }
                    ?>
                    <input type="email" name="email" placeholder="Email" required /><br>
                    <button type="submit" name="submit"> Submit </button><br>
					<button onclick="document.location='loginpage.php'"id="signin">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
