<?php
class Database 
{
	public static $db;
	public static $con;

	
	function __construct()
	{
		
		$this->user="root";
		$this->pass="";
		$this->host="localhost";
		$this->ddbb="mymemories";
	}


	function connect()
	{
		$dbconn = mysqli_connect($this->host, $this->user, $this->pass, $this->ddbb);
        return $dbconn;
	}

	public static function disConnect($dbconn)
	{
		mysqli_close($dbconn);
	}

	public static function getCon()
	{
		self::$db = new Database();
		self::$con = self::$db->connect();
		return self::$con;
	}

	
}
?>
