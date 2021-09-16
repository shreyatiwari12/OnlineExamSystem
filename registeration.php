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
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
// sql to create table
$sql = "SELECT UserName, EmailId, Password FROM student WHERE (UserName = '$name' OR EmailId = '$email') AND Password = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "UserName: " . $row["UserName"]. " EmailId: " . $row["EmailId"]. " Password " . $row["Password"]. "<br>";
  }
}
else {
	$reg = "INSERT INTO student(Username,EmailId,Password) VALUES ('$name','$email','$pass')";
	$conn->query($reg);
	echo"Registeration successful";
}
$conn->close();
?>