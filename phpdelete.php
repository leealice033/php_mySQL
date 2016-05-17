<?php
/*delete
建立client端呼DELETE呼叫*/
/*呼叫DBconnCRUD.php*/
require_once("DBconnCRUD.php");

/*建立Database物件db*/
$db = new Database();

/*連線 */
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname'] );

/*建立DELETE SQL Statement 並呼叫function執行delete*/
$sql = "DELETE FROM PEOPLE WHERE NAME = 'PHP' AND ID = '8'";
$db->runDelete($sql);

/*關閉資料庫連線*/
$db->closeDB();


?>
