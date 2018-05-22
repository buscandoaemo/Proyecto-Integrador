<?php

class DataBase {
	public static $conn;

	public static function getConnection()
	{
		if (!self::$conn) {
			$db = new PDO('mysql:host=127.0.0.1;dbname=boarding_house;port=8889','root','root');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conn = $db;
		}
		return self::$conn;
	}

	public function crearTabla($query){
    try{
     $stmt = $this->db->prepare($query);
     $resultado = $stmt->execute();
    }
    catch( PDOException $Exception ) {
      echo $Exception->getMessage();
    }
    return $resultado;
  }


}

?>
