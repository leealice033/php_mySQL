<?php
//	insert
	$link = mysql_connect("localhost", "root", "mysql") or die ("fail to connect".mysql_error());//建立連線
	mysql_select_db("testDB",$link);
	$insData = trim($_POST["name"]);

	$sql_insert  = "INSERT INTO PEOPLE(ID,NAME,AGE,BIRTHDAY)VALUES('7','Apple','20','1991-12-12')";

?>
