<?php

$b_id = htmlentities($_GET['b_id']);
$query = "SELECT * FROM books WHERE b_id = b_id";
$execute =mysqli_query($con,$query);
$edit = mysqli_fetch_assoc($execute);
$row_update = mysqli_num_rows($execute);


?>