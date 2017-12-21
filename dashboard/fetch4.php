<?php
if ($_GET['keyword'] && !empty($_GET['keyword'])) {
	//db connect
	$dbconnect = mysqli_connect('localhost', 'root', '', 'libsearch');

	$keyword = htmlentities($_GET['keyword']);


?>