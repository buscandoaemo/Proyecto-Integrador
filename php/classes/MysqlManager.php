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

  public function insertarUsuario($usuario){

    try {
    $stmt = $this->db->prepare('INSERT INTO movies (title, rating, awards, release_date, length) VALUES (:title, :rating, :awards, :release, :length)');

    $title = isset($_POST['title']) && $_POST['title'] ? $_POST['title'] : null;
    $rating = isset($_POST['rating']) && $_POST['rating'] ? $_POST['rating'] : null;
    $awards = isset($_POST['awards']) && $_POST['awards'] ? $_POST['awards'] : null;
    $release = isset($_POST['release_date']) && $_POST['release_date'] ? $_POST['release_date'] : null;
    $length = isset($_POST['length']) && $_POST['length'] ? $_POST['length'] : null;

    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
    $stmt->bindParam(':awards', $awards, PDO::PARAM_INT);
    $stmt->bindParam(':release', $release, PDO::PARAM_STR);
    $stmt->bindParam(':length', $length, PDO::PARAM_INT);

    $stmt->execute();

    echo "Pelicula agregada con éxito";
    }
    catch( PDOException $Exception ) {
    echo "<span style='color:red; display:inline-block; border:2px solid red; padding:10px; border-radius:5px;'>". $Exception->getMessage()."</span>";
    }

  }

  public function crearTabla($query){
     //por parametro viene la query para crear una tabla
     try{
      $stmt = $this->db->prepare($query);
      $stmt->execute();
     }
     catch( PDOException $Exception ) {
       echo " catch alcanzado";
       echo $Exception->getMessage();
     }


  }



}

?>
