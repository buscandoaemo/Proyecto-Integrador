<?php
include('./php/funciones.php');
session_start();

$input = [  'password'=>false,
            'email'=>false,
            'submit'=>false
          ];
					$email='';
          $password='';


					if (isset($_POST['submit'])) {
						if (strlen(trim($_POST['email'])) >= 3) {
			      	$email=($_POST['email']);

              }
			    	}else {
			      	$input['email']=true;

			    }

        if (existeParametro('submit', $_POST)) {
            $usuario = cambioClave($_POST['email'],$_POST['password']);
            /// aca ya hace el cambio de la clave, ahora tienes que notificar en la pagina si hizo
            // o no el cambio, si no consigue ningun mail no hace el cambio. Abajo esta el if para que hagas
            // el mensaje dependiendo de la respuesta que de la funcion.
            if (!$usuario) {
              die("no cambio");
            }else{
              die("cambió exitoso");
            }
        }


?>
<!DOCTYPE html>
<html>
<head>
  <title>Recuperacion de contraseña | The Boarding House Snow & Skate</title>
  <meta charset="utf-8">
  <meta lang="es-ar">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link href="css/estilos.css" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
  <link id="favicon" rel="shortcut icon" href="img/favicon.png" type="image/png" />
</head>
<body>
  <div class="container">
    <!-- Incluir Header por PHP -->
    <?php  include ("./php/header.php"); ?>

    <!-- Contenido -->
    <div class="sub-container">

      <!-- titulo seccion -->
      <div class="titulo-seccion">
        <h2> Recuperacion de contraseña</h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form trama">
        <div class="formulario perfil">

          <div class="datos">
						<form class="" action="" method="post">


						<label for="[object Object]"><p text-align:"center">Email</p></label>

						<?php if ($input['email']==true): ?>
      				<span class="error"> <i class="fas fa-exclamation-triangle"></i> Ingresar un email</span>
      			<?php endif; ?>
            <input type="email" name="email" value="<?= $email; ?>" class="<?= ($error && !$email) ? 'error':null ?>" placeholder="Email*">


            <?php if ($input['password']==true): ?>
      				<span class="error"> <i class="fas fa-exclamation-triangle"></i> Ingresar un nuevo password</span>
      			<?php endif; ?>
            <input type="password" name="password" value="<?= $password; ?>" class="<?= ($error && !$password) ? 'error':null ?>" placeholder="Password*">
            <button type="submit" name="submit">enviar</button>
						</form>
          </div>
        </div>
      </div>
    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->
    <?php  include ("./php/footer.php"); ?>
  </div>
</body>
</html>
