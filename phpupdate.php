<?php
/*update
建立client端update呼叫
*/
/*呼叫DBconnCRUD.php*/
require_once("DBconnCRUD.php");

/*建立Database物件db*/
$db = new Database();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

/*建立UPDATE SQL statement 並呼叫function執行update*/
$sql = "UPDATE PEOPLE SET NAME = 'MYSQL' WHERE NAME = 'PHP' ";
$db->runUpdate($sql);

/*關閉資料庫連線*/
$db->closeDB();

?>