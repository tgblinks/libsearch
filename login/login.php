<?php
include('connection.php');
//include('../sanitise.php');

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);
$qry = "SELECT * FROM admin WHERE username = '$username' AND password = '".md5($password)."'";
$result = mysqli_query($con,$qry) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1)
{
	session_start();
	$_SESSION['username'] = $username;
	header('Location: ../admin/index.php');
}
else
{
	echo '<script>alert("Invalid Credentials")</script>';
	header('location: index.php');
}
?>