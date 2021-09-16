<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "shreya";
$dbname = "anant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$pass = $_POST['password'];
// sql to create table
$sql = "Select UserName, EmailId, Password FROM student WHERE (UserName = '$name' OR EmailId = '$email') AND Password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $_SESSION['username'] = $row["UserName"];
	  $_SESSION['emailid'] = $row["EmailId"];
    header('location:INDEX.php');
	
  }
}
else {
	echo"User Not exist";
}
$conn->close();
?>