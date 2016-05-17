<?php
/*建立Client呼叫 */
/*include_once 和 require_once都是PHP的函式，主要是要包含其它的檔案進來，而且萬一該檔案被包含過了，則不會重新再包含一次。
include_once萬一遇到錯誤，則會持續執行，但require_once則會停止執行，並產生Fatal Errors。*/
require_once("database.php");

/* 建立名為db的DB物件 */
$db = new Database();

/*呼叫connect_db連結資料庫*/
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'],$_DB['dbname']);

/* 建立statement 執行query*/
$sql = "SELECT NAME,AGE FROM PEOPLE ";
$db->runQuery($sql);

/* 呼叫fetch_array function 撈取資料 */
$array = 0;
while ($result = $db->fetch_array()){
	$_aName[$array] = "{$result["NAME"]}";
	$_aAGE[$array] = "{$result["AGE"]}";
	print $_aName[$array];
	print $_aAGE[$array];
	$array++;
}
$count1= $array;

/* 關閉資料庫連接 */
$db->closeDB(); 

?>