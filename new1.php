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
			<th>Gmail</th>
			<th>MarksObtained</th>
			<th>TotalMarks</th>
		</tr>
	<?php
	$conn = mysqli_connect("localhost","root","shreya","anant");
	if($conn->connect_error)
	{
		die("Connection failed:". $conn->connect_error);
	}
	$sql  = "SELECT Username,Gmail,MarksObtained,TotalMarks FROM Result";
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
		 while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Username"]. "</td><td>" . $row["Gmail"]. "</td><td>" . $row["MarksObtained"]. "</td><td>" . $row["TotalMarks"]. "</td></tr>";
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