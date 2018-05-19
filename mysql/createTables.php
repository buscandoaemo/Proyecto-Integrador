<?php

    include_once('../php/classes/MysqlManager.php');

   //consumo la clase MysqlManager

   //crear objeto, se conecta solo
   $mysqlManagerInstancia = new MysqlManager();

   //crear tablas


   $queryCreacionTabla = "
         CREATE TABLE usuarios(
         id INT( 10 ) AUTO_INCREMENT PRIMARY KEY,
         nombre VARCHAR( 50 ) NOT NULL,
         apellido VARCHAR( 50 ) NOT NULL,
         email VARCHAR( 60 ) NOT NULL,
         password VARCHAR( 10 ) NOT NULL,
         domicilio VARCHAR( 60 ) NOT NULL,
         localidad VARCHAR( 50 ) NOT NULL,
         avatar_url VARCHAR( 500 ) NOT NULL);
   ";

   $mysqlManagerInstancia->crearTabla($queryCreacionTabla);



?>
