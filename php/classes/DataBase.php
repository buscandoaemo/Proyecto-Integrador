<?php

class DataBase {
	public static $conn;

	public static function getConnection()
	{
		if (!self::$conn) {
			$db = new PDO('mysql:host=localhost; dbname=db_sprint','root','');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conn = $db;
		}
		return self::$conn;
	}


}

?>
