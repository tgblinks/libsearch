<?php 
include('connection.php');
$b_id = htmlentities($_GET['b_id']);
$qry = "DELETE FROM books WHERE b_id = '$b_id'";
$result = mysqli_query($con, $qry);
if((!$con))
{
	echo '<script>alert("Student Not Deleted");windows.location.assign</script>';
	header("refresh:0; url=view.php");
}

else
{
	echo '<script>alert("Student Deleted successfully");windows.location.assign</script>';
	header("refresh:0; url=view.php");
}
?>
