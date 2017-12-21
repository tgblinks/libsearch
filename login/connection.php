 <?php
$con = mysqli_connect('localhost', 'root', '', 'libsearch');

/* check connection */
if (!$con) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>