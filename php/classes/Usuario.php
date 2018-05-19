  <?php

namespace usuario;

  class Usuario {

  private $nombre;
  private $apellido;
  private $email;
  private $password;
  private $domicilio;
  private $localidad;
  private $avatarUrl;


  public function __construct($nombre,
   $apellido,
   $email,
   $password,
   $domicilio,
   $localidad,
   $avatarUrl){

     $this->nombre = $nombre;
     $this->apellido = $apellido;
     $this->email = $email;
     $this->password = $password;
     $this->domicilio = $domicilio;
     $this->localidad = $localidad;
     $this->avatarUrl =  $avatarUrl;

  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }


    public function getPassword(){
      return $this->password;
    }

    public function setPassword($password){
      $this->password = $password;
    }


      public function getDomicilio(){
        return $this->domicilio;
      }

      public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
      }


        public function getLocalidad(){
          return $this->localidad;
        }

        public function setLocalidad($localidad){
          $this->localidad = $localidad;
        }


          public function getAvatarUrl(){
            return $this->avatarUrl;
          }

          public function setAvatarUrl($avatarUrl){
            $this->avatarUrl = $avatarUrl;
          }

  }


  ?>
