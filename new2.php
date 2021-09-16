<!DOCTYPE html>
<html>
<head>
	<title>Table with database</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>UserName</th>
			<th>EmailId</th>
			<th>Password</th>
		</tr>
	<?php
	$conn = mysqli_connect("localhost","root","shreya","anant");
	if($conn->connect_error)
	{
		die("Connection failed:". $conn->connect_error);
	}
	$sql  = "SELECT UserName,EmailId,Password FROM student";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		 while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["UserName"]. "</td><td>" . $row["EmailId"]. "</td><td>" . $row["Password"]. "</td><td>" ."</td></tr>";
		}
		echo "</table>";
	}
	else
	{
		echo"No result";
	}
	$conn-> close();
	?>
	</table>
</body>
</html>
</body>