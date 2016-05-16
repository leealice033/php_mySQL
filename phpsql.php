<?php
/*建立Client呼叫 */
require_once("database.php");

/* 建立名為db的DB物件 */
$db = new Database();

/*呼叫connect_db連結資料庫*/
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'],$_DB['dbname']);

/* 建立statement 執行query*/
$sql = "SELECT NAME FROM PEOPLE ";
$db->runQuery($sql);

/* 呼叫fetch_array function 撈取資料 */
$array = 0;
while ($result = $db->fetch_array()){
	$_aName[$array] = "{$result["NAME"]}";
	print $_aName[$array];
	$array++;
}
$count1= $array;

/* 關閉資料庫連接 */
$db->closeDB(); 

?>