<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['username'])) 
{
die(header('Location: ../login/index.php'));
}
else
{

	if (isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['edition']) && !empty($_POST['classno']) && !empty($_POST['copies']) && !empty($_POST['dept']) && !empty($_POST['college']) && !empty($_POST['room']) && !empty($_POST['shelf']) && !empty($_POST['row'])) 
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
			if(in_array($imgExt, $valid_extensions))
			{			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
	
			$query = "UPDATE books SET title = '".$title."', author = '".$author."', edition = '".$edition."', WHERE b_id = '".$b_id."'";
			if (mysqli_query($con, $query)) 
			{
				echo "<center><span style='color:green'>Book Updated Successfully</span></center>";
				//header("refresh:0; url=index.php");
			}
			else
			{
				echo 'Not Completed';
				//header("refresh:0; url=index.php");
			}


		}

	}
	



