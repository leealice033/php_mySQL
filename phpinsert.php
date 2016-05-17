<?php
/* insert data
 建立client端INSERT呼叫*/
//呼叫DBconnCRUD.php
require_once("DBconnCRUD.php");

/*建立DB物件*/
$db = new Database();

/*連線資料庫*/
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'],$_DB['dbname']);

/*建立INSERT SQL statement*/
$sql = "INSERT INTO PEOPLE(NAME, AGE)VALUES ('PHP','15')";
$db->runInsert($sql);

/*關閉資料庫連結*/
$db->closeDB();

?>