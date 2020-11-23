<?php 
  include_once("db.php"); 
  session_start();
?>

<?php
function check_input($value)
{
// Stripslashes
// if (get_magic_quotes_gpc())
//   {
//   $value = stripslashes($value);
//   }
// // Quote if not a number
// if (!is_numeric($value))
//   {
//   $value = "'" . mysqli_real_escape_string($value) . "'";
//   }
return $value;
}

$con = mysqli_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

// Make a safe SQL
$user = check_input($_POST['name']);
$pwd = check_input($_POST['pwd']);
$sql = "SELECT * FROM phplogin WHERE
username=$user AND password=$pwd";

$qury = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($qury);
 
      if(!empty($result))
      {
        echo "Successful Login!";
       // $_SESSION['userName'] = $uname;
       // echo "<br />Welcome ".$_SESSION['userName']."!";
        echo "<br /><a href='signupform.html'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
        echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.html'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }

mysqli_close($con);
?>