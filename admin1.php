<html>
<head>
	<title>Admin Login</title>
	<style>
		body{
			background: linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url(print.jpg);
			background-size: cover;
			background-position: center;
		}
		.adminbox
		{
			padding: 70px 30px;
			max-width: 330px;
			height: 330px;
			float: none;
			margin: 150px auto;
			background: #fff;
			padding: 30px;
			font-weight: bold;
			font-size: 22px;
			border-radius: 10px;
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 36px;
		}
		.adminbox input[type="email"]
		{
			border: none;
			border-bottom: 1px solid #000;
			background: transparent;
			outline: none;
			height: 20px;
			color: #000;
			font-size: 16px;
		}
		.adminbox input[type="password"]
		{
			border: none;
			border-bottom: 1px solid #000;
			background: transparent;
			outline: none;
			height: 20px;
			color: #000;
			font-size: 16px;
		}
		.adminbox input[type="submit"]
			{
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
		}
		.adminbox input[type="submit"]:hover
		{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
		.adminbox a{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}	
		.adminbox a:hover
		{
			color: #ffc107;
		}
	</style>
</head>
<body>
<div class="adminbox">
	<form action="valid.php" method="post">
		<h1 style="color: #fb2525">Admin Login</h1>
		<p>Username</p>
				<input type="email" name="email" placeholder="Enter Email"><br>
		 <p>Password</p>
				<input type="password" name="password" placeholder="Enter password"><br><br>
		<a href="new.php">
		<input type="submit" name="" value="Login">
		</a>
	</form>
</div>
</body>
</html>
