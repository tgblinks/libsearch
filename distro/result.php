<?php
error_reporting(0);
mysql_connect("localhost", "root", "") or die("Error");
mysql_select_db("libsearch") or die(mysql_error());
$search = $_POST&#91;"name"&#93;;
//change select statement accordingly
$players = mysql_query("SELECT * FROM books  WHERE book LIKE '%$search%'");
echo "<table id='data'>";
while($player = mysql_fetch_array($players)) {
echo "<tr><th><div>" . $player["book"] . "</div></th></tr>";
}
echo "</table>";
?>