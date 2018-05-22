<?php

require_once 'DataBase.php';
require_once 'Model.php';

class Usuario extends Model {
	public $id;
	public $nombre;
	public $apellido;
	public $email;
	public $password;
	public $domicilio;
	public $localidad;
	public $imagen;

	public $fillable = ['nombre', 'apellido', 'email', 'password', 'domicilio', 'localidad', 'imagen'];
	public static $table = 'usuarios';
}

?>
