<?php 
include_once("db.php"); 
?>     
<?php
           $user = $_POST['n'];
           $pass = $_POST['p'];
           $id = $_POST['id'];
        $sql = "INSERT into phplogin values(".$id.",'".$user."','".$pass."')"; 
        $qury = mysqli_query($conn,$sql);
        if(!$qury)
        {
                  echo "Failed ".mysql_error();
                  echo "<br /><a href='signupform.php'>SignUp</a>";
                  echo "<br /><a href='signinform.php'>SignIn</a>";
        }
        else
        {
                  echo "Successful";
                  echo "<br /><a href='signupform.php'>SignUp</a>";
                  echo "<br /><a href='signinform.php'>SignIn</a>";
        }
?>