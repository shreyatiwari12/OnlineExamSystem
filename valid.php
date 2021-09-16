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
$sql = "SELECT EmailId, Password FROM admin WHERE EmailId = '$email' AND Password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    header('location:new.php');
	
  }
}
else {
	echo"Admin Not exist";
}
$conn->close();
?>