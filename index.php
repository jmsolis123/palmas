<?php
  

  
?>
<!doctype html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="./css/main.css" />
      <link rel="stylesheet" type="text/css" href="./css/index.css" />
      <title>Hotel Las palmas</title>
    </head>
    <body>
      <?php require_once './html/header.html'; ?>
      <div class="tituloModulo">
        <div class="left">
          Bienvenidos
        </div>
        <div class="right">
          <a class="boton" href="./">Menu principal</a>
        </div>
      </div>

      <div class="opcion">
        <a class="boton" href="./habitaciones.php"> Habitaciones Disponibles</a>
      </div>


      <div class="opcion">
        <a class="boton" href="./registrarse.php">Registrarse</a>
      </div>

      <div class="opcion">
        <a class="boton" href="./login2.php">login </a>
      </div>
      <?php require_once './html/footer.html'; ?>
    </body>
  </html>