<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) 
{
die(header('Location: ../login/index.php'));
}
else
{

	if (isset($_POST['title'], $_POST['author'], $_POST['edition'], $_POST['classno'], $_POST['copies'], $_POST['dept'], $_POST['college'], $_POST['room'], $_POST['shelf'], $_POST['row'], $_FILES['user_image']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['edition']) && !empty($_POST['classno']) && !empty($_POST['copies']) && !empty($_POST['dept']) && !empty($_POST['college']) && !empty($_POST['room']) && !empty($_POST['shelf']) && !empty($_POST['row']) && !empty($_FILES['user_image'])) 
	{
		$title = htmlentities($_POST['title']);
		$author = htmlentities($_POST['author']);
		$edition = htmlentities($_POST['edition']);
		$classno = htmlentities($_POST['classno']);
		$copies = htmlentities($_POST['copies']);
		$dept = htmlentities($_POST['dept']);
		$college = htmlentities($_POST['college']);
		$room = htmlentities($_POST['room']);
		$shelf = htmlentities($_POST['shelf']);
		$row = htmlentities($_POST['row']);

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

			$upload_dir = '../user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions) && $imgSize < 5000000)
			{			
				$qry =mysqli_query($con, "SELECT title FROM books WHERE title = '".$title."'");

				if (mysqli_num_rows($qry) > 0)
				{
					echo "<center><span style='color:red'>Book Already exist</span></center>";
					header("refresh:5; url=index.php");
					return false;
				}
				else
				{
					if(move_uploaded_file($tmp_dir,$upload_dir.$userpic))
					{
						$query = "INSERT INTO books (title, author, edition, classno, copies, dept, college, room, shelf, row, pic1) VALUES ('".$title."', '".$author."', '".$edition."', '".$classno."', '".$copies."', '".$dept."', '".$college."', '".$room."', '".$shelf."', '".$row."', '".$userpic."' )";
						if (mysqli_query($con, $query)) 
						{
							echo "<center><span style='color:green'>Book Added Successfully</span></center>";
							header("refresh:5; url=index.php");
						}
						else
						{
							echo 'Not Completed';
							//header("refresh:0; url=index.php");
						}
					}
					else
					{
						echo "<center><span style='color:red'>Image not uploaded</span></center>";
						return false;
					}
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
	
	
	}
	else
	{
		echo 'All Fields are required';
		header("refresh:0; url=index.php");
	}

}
?>