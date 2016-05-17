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
		$dbConn = mysql_connect($host, $user, $pwd);//建立資料庫連線
    /*先測試能否成功連線*/
		if(! $dbConn){
			echo "db connect error!";
		}
    //成功連線：echo succesful
    /*
		else{
			echo "db connect succesful! ";
		}
    */
		/* 設定語系*/
		mysql_query("SET NAMES 'UTF8'");
		/* 設定使用的資料庫 */
    	if (!mysql_select_db($dbname, $dbConn)){
       	echo "mysql_select_db error !!";
       }

    	$this->_dbConn = $dbConn;//把（連結好資料庫）這則資訊傳給該類別（Database->_dbConn)的instance
    	return true;
  	}

  	/* 建立SQL QUERY 操作*/
  	function runQuery($sql){
  		if(! $queryResource = mysql_query($sql,$this->_dbConn))//mysql_query(query,connection)
  		{
  			echo "mysql_query error!";
  		}
  		$this->_queryResource = $queryResource;
  		return $queryResource;
  	}

    /*執行SQL INSERT*/
    function runInsert($sql)
    {
      if(! $queryResource = mysql_query($sql,$this->_dbConn)){
        echo "mysql insert error!";//判斷query有沒有錯誤

      }
    }
    /*執行SQL UPDATE*/
    function runUpdate($sql)
    {
      if(! $queryResource = mysql_query($sql,$this->_dbConn)){
        echo "mysql update error!";//錯誤訊息
      }
    }

    /*執行SQL DELETE*/
    function runDelete($sql){
      if(! $queryResource = mysql_query($sql,$this->_dbConn)){
        echo "mysql delete error!";
      }
    }

  	/*回傳query 資料使用 mysql_fetch_array*/
    //mysql_fetch_array(data,array_type)
    /* data   :可选。规定要使用的数据指针。该数据指针是 mysql_query() 函数产生的结果。
        array_type  :可选。规定返回哪种结果。可能的值：

                                                MYSQL_ASSOC - 关联数组
                                                MYSQL_NUM - 数字数组
                                                MYSQL_BOTH - 默认。同时产生关联和数字数组
*/
  	function fetch_array(){
  		return mysql_fetch_array($this->_queryResource,MYSQL_ASSOC);//由上面註解
  	}

  	/*關閉資料庫連結 */
  	function closeDB()
  	{
  		mysql_close($this->_dbConn);
  	}

}
?>
