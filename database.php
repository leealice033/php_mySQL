<?php
class Database
{
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
    }

}
?>

