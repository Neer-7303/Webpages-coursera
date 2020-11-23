<?php include_once("db.php"); ?>
<?php
 
	session_start(); # Starts the session
               session_unset(); #removes all the variables in session
               session_destroy(); #destroys the session
              if (!isset($_SESSION['userName']) )
			  {
   		echo "Successfully logged out!<br />";
		 echo "<br /><a href='signupform.php'>SignUp</a>";
                  echo "<br /><a href='signinform.php'>SignIn</a>";
			  }
	else
   		 echo "Error Occured!!<br />";
?>