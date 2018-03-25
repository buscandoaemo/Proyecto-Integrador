<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión | The Boarding House Snow & Skate</title>
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
        <h2>Iniciar sesión</h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form login">
        <div class="formulario">
          <form action="" method="">
            <input type="text" name="usuario" value="" placeholder="Usuario" required>
            <input type="password" name="password" value="" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>

            <a href="#">Recordar usuario</a>
            <a href="#">Recordar contraseña</a>
          </form>
        </div>
      </div>
    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->
    <?php  include ("./php/footer.php"); ?>
  </div>
</body>
</html>
