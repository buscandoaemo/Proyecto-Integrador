<?php

class MysqlManager{

  private $db;
  private $cadenaDeConexion;
  private $usuario;
  private $password;
  private $opt;

  public function __construct(){
      $this->cadenaDeConexion = "mysql:host=127.0.0.1;dbname=boarding_house;port=8889";
      $this->usuario = "root";
      $this->password = "root";
      $this->opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];
      $this->conectarABaseMySql();
  }

  private function conectarABaseMySql(){

    try {
        $this->db = new PDO($this->cadenaDeConexion, $this->usuario, $this->password,$this->opt);
     }catch( PDOException $Exception ) {
        echo $Exception->getMessage();
    }

  }
  public function ejecutarQuery($query){
    try{
     $stmt = $this->db->prepare($query);
     $resultado = $stmt->execute();
    }
    catch( PDOException $Exception ) {
      echo " catch alcanzado";
      echo $Exception->getMessage();
    }

    return $resultado;
  }
}

?>
