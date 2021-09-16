<html>
<head>
	<title>Login Form Design</title>
	<link rel="stylesheet" type="text/css" href="loginpage.css">
	<body>
	<div class="loginbox">
	<img src="avatar.jpeg" class="avatar">
 	 <h1>Login Here</h1>
  	<form action="validation.php" method="post">
		<?php
		session_start();
			if(isset($_SESSION["error"]))
			{
			   $error = $_SESSION["error"];
				echo "<h5 style=\"color: red\">".$error."</h5>";
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
    	 <p>Username</p>
                <input type="email" name="email" placeholder="Enter Email">
    	 <p>Password</p>
				<input type="password" name="password" placeholder="Enter password">
	<a href="INDEX.php">
	<input type="submit" name="" value="Login">
	<a href="enter_email_reset_pass.php">Forgot your password?</a>
	<a href="SignUpPage.php">Don't have an account?</a>
	</form>
	</div>
	</body>
</head>
</html>
