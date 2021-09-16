<?php
session_start();
if(isset($_SESSION["confirmmailsend"]) && $_SESSION["otp_validate"] == "true_status" )
{ 

 include('db_connection.php');
   
    if(isset($_POST['submit'])) 
    {
      if($_POST['password']==$_POST['confirmpassword'])
      { echo "ss";
        $pass = $_POST['password'];
        $em = $_SESSION['email'];
        $sql = "UPDATE student SET Password = '$pass' WHERE EmailId = '$em'";
        $query=mysqli_query($conn,$sql);
        echo "ss";
      	$_SESSION["error"] = "data match";
        header("Location: loginpage.php");
      }  
      else
      {
        $_SESSION["error"] = "Password & Confirm Password Should Be Same";
        header("Location: new_password.php");

      }
    }
}
else
{
    header("Location: enter_email_reset_pass.php");
}
?>