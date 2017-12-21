<?php

$connect = mysqli_connect("localhost", "root", "", "libsearch");
$output = '';

$sql = "SELECT * FROM books where title LIKE '%".$_POST["search"]."%'";
$result = mysql_query($connect, $sql);


     if (mysqli_num_rows($result) > 0 ) 
     {
       $output .= '<h4 align="center">Search Result</h4>';
       $output .= '<div class="table-responsive">
                <tr>
                   <th>Name</th>
                   <th>Name</th>
                   <th>Name</th>
                   <th>Name</th>
                </tr>';

            while ($row = mysqli_fetch_array($result))
             {
              $output .= '
                       <tr>
                         <td>'.$row["title"].'</td>
                         <td>'.$row["title"].'</td>
                         <td>'.$row["title"].'</td>
                         <td>'.$row["title"].'</td>
                      </tr>
                      ';
            }
            echo $output;
     }
      else{
        echo "Data not found";
      }

?>