
<?php
include('connection.php');
session_start();
if (!isset($_SESSION['username'])) 
{
die(header('Location: ../login/index.php'));
}

$username = $_SESSION['username'];


  //if($old_password!="" && $new_password!="" && $confirm_password!="") :
  
  $old_password = md5($_POST['old_password']);
  $new_password = md5($_POST['new_password']);
  $confirm_password = md5($_POST['confirm_password']);


// make sure  fields are not empty
  if (empty($old_password) || empty($new_password) || empty($confirm_password)) 
  {
  	echo "All Fields are required";
  }
  else
  {
      //select the password from the db
    $pick = "SELECT * FROM admin where username = '$username'";
    $query = mysqli_query($con, $pick);

    $fetch = mysqli_fetch_array($query);
    $dbpass = $fetch['password'];

    if ($dbpass != $old_password){
      echo "<center><span style='color:red'>Old Password is incorrect</span></center>";
    }

    else if ($new_password != $confirm_password) {
      echo "<center><span style='color:red'>New Password does not match</span></center>";
    }
    else{
      $qry = "UPDATE admin SET password = '".$new_password."' WHERE username = '$username'";
     // $qry2 = mysqli_query($con, $qry);
      if(mysqli_query($con, $qry))
      {
        echo "<center><span style='color:green'>Password Changed Successfully</span></center>";
        header("refresh:3; url=../login/logout.php");
      }
      else
      {
        echo "Error";
      }
      
      //header("Location: ../logout.php");
    }

  }
  
  


?>