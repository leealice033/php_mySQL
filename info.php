<?php
$db_conn = @mysql_connect("localhost", "root", "mysql") or die ("Could not connect: " . mysql_error());
mysql_select_db("testDB", $db_conn);

$result = mysql_query("SELECT ID, NAME FROM PEOPLE");

while($row = mysql_fetch_array($result)){
printf ("ID: %s Name: %s \n", $row["ID"], $row["NAME"]);
}

mysql_free_result($result);
?>
