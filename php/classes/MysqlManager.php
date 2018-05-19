<?php

namespace sql;

class MysqlManager{

  private $cadenaDeConexion;
  private $usuario;
  private $password;
  private $opt;

  public function __constructor ($cadenaDeConexion, $usuario,$password,$opt){
      $this->cadenaDeConexion = $cadenaDeConexion;
      $this->usuario = $usuario;
      $this->password = $password;
      $this->opt = $opt;
  }

  public function conectarABaseMySql(){

    try {
        $db = new PDO($this->cadenaDeConexion, $this->usuario, $this->password);
     }catch( PDOException $Exception ) {
        echo $Exception->getMessage();
    }

   return $db;

  }

  public function insertarUsuario($usuario){

        

  }



}

?>
