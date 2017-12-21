<?php

if ($_GET['keyword'] && !empty($_GET['keyword'])) {
	//db connect
	$dbconnect = mysqli_connect('localhost', 'root', '', 'libsearch');

	$keyword = htmlentities($_GET['keyword']);
	$keyword = "%$keyword%";

	$query = mysqli_query($dbconnect, "SELECT * FROM books WHERE title LIKE '%".$keyword."%' OR author LIKE '%".$keyword."%' OR dept LIKE '%".$keyword."%'");


	if(mysqli_num_rows($query) > 0)
	{
?>
		<div>
			<table  class='table table-responsive' align='center' border='1' >
				<thead>
                    <tr>
                    <th><strong>Book Name</strong></th>
                    <th><strong>Author</strong></th>
                    <th><strong>Department</strong></th>
                    <th><strong>Edition</strong></th>
                    </tr>
	            </thead>	
<?php
			while($row = mysqli_fetch_assoc($query))
			{
?>
				<tr>
					<td><?php echo $row['title']?></td>
					<td><?php echo $row['author']?></td>
					<td><?php echo $row['dept']?></td>
					<td><?php echo $row['Edition']?></td>
					<td><?php echo "<a href= view.php?b_id=".$row['b_id']." class='btn hidden-sm-down btn-success'>View More</a>"?></td>
				</tr>
	</div>
<?php

			}
	}
}

	
	/*$query = "SELECT * FROM books WHERE title LIKE ?";
	$statement = $dbconnect->prepare($query);
	$statement->bind_param('s',$keyword);
	$statement->execute();
	$statement->store_result();
	if ($statement->num_rows() == 0) //if there is no record, it will display an error message
	{
			echo '<div id="item" align="center"><strong>Ah snap...! No results found :/</strong></div>';
            $statement->close();
            $dbconnect->close();
	}
	else
	{
		echo "<div>";
			echo "<table  class='table table-responsive' align='center' border='1' >
                            <thead>
                            <tr>
                            <th><strong>Book Name</strong></th>
                            <th><strong>Author</strong></th>
                            <th><strong>Department</strong></th>
                            <th><strong>Location</strong></th>
                            </tr>
                            </thead>";
            echo "<tr>";
		$statement->bind_result($title);
		while ($statement->fetch()) //output records
		{
            echo "<td>" .$title . "</td>";
            //echo "<td>" .$author . "</td>";
            //echo "<td>" .$dept . "</td>";
            //echo "<td> <a href= view.php?book=".$b_id." class='btn pull-right hidden-sm-down btn-success' onclick='javascript:confirmationDelete($(this));return false;'>View More</a>";
            echo "</tr>";
            echo "</div>";
		};
		$statement->close();
		$dbconnect->close();
	};
};*/




?>