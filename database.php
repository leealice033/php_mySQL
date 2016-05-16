<?php
global $_DB;
/*設定database連線資訊*/

$_DB['host'] = "localhost";
$_DB['username'] = "root";
$_DB['password'] = 'mysql';
$_DB['testDB'];

class Database
{
	var $_dbConn = 0;
	var $_queryResource = 0;
	/*建立資料庫連結 */
	function connect_db($host, $user, $pwd, $dbname){
		$dbConn = mysql_connect($host, $user, $pwd);
		if(! $dbConn){
			echo "db connect error!";
		}
		
	}
	/*
	private static $dbName = 'testDB';
	private static $dbHost = 'localhost';
	private static $dbUsername = 'root';
	private static $dbUsernamePassword = 'mysql';

	private static $cont = null;
	public function _construct() {
		die('Init funciont is not allowed');
	}

	public static function connect()
	{
		// one connection through whole application
		if( null == self::$cont)
		{
			try
			{
				self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);

			}
			 catch(PDOException $e)
        	{
         	 die($e->getMessage()); 
        	}
       	}
       return self::$cont;
    }

     
    public static function disconnect()
    {
        self::$cont = null;
    }*/

}
?>

