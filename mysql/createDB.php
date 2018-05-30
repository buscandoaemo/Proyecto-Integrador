<?php

require_once '../php/classes/DB.php';

$pdo = new PDO('mysql:host=localhost','root','');

$pdo->query("CREATE DATABASE boarding_house;");

$queryCreacionTabla = "
         CREATE TABLE usuarios(
         id INT( 10 ) AUTO_INCREMENT PRIMARY KEY,
         nombre VARCHAR( 50 ) NOT NULL,
         apellido VARCHAR( 50 ) NOT NULL,
         email VARCHAR( 60 ) NOT NULL,
         password VARCHAR( 100 ) NOT NULL,
         domicilio VARCHAR( 60 ) NOT NULL,
         localidad VARCHAR( 50 ) NOT NULL,
         imagen VARCHAR( 500 ) NOT NULL);
   ";

DB::getConn()->query($queryCreacionTabla);





?>
