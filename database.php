<?php
/*物件導向-->撈取資料*/
global $_DB;
/*設定database連線資訊*/

$_DB['host'] = "localhost";
$_DB['username'] = "root";
$_DB['password'] = 'mysql';
$_DB['dbname']= "testDB";

class Database
{
	var $_dbConn = 0;
	var $_queryResource = 0;
	/*建立資料庫連結 */
	function connect_db($host, $user, $pwd, $dbname)
	{
		$dbConn = mysql_connect($host, $user, $pwd);
		if(! $dbConn){
			echo "db connect error!";
		}
		else{
			echo "db connect succesful! ";
		}
		/* 設定語系*/
		//mysql_query("SET NAMES 'UTF8'");
		/* 設定使用的資料庫 */
    	if (!mysql_select_db($dbname, $dbConn)){
       	echo "mysql_select_db error !!";
       }

    	$this->_dbConn = $dbConn;
    	return true;
  	}

  	/* 建立SQL QUERY 操作*/
  	function runQuery($sql){
  		if(! $queryResource = mysql_query($sql,$this->_dbConn))
  		{
  			echo "mysql_query error!";
  		}
  		$this->_queryResource = $queryResource;
  		return $queryResource;
  	}

  	/*回傳query 資料使用 mysql_fetch_array*/
  	function fetch_array(){
  		return mysql_fetch_array($this->_queryResource,MYSQL_ASSOC);
  	}

  	/*關閉資料庫連結 */
  	function closeDB()
  	{
  		mysql_close($this->_dbConn);
  	}

}
?>
