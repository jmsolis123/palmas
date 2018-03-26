<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  </head>
  <?php require_once './html/header.html'; ?>
  <body>
    <div class="container">
      <div class="row">
        <h3 style="text-align:center">NUEVO REGISTRO</h3>
      </div>
      
      <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
        <div class="form-group">
          <label for="alias" class="col-sm-2 control-label">Alias</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="alias" name="alias" placeholder="Alias" required>
          </div>
        </div>

        <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
          </div>
        </div>

        
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="cedula" class="col-sm-2 control-label">Cedula</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="cedula" name="cedula" placeholder="cedula">
          </div>
        </div>
        
         <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
          </div>
        </div>
        
         <div class="form-group">
          <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a href="index.php" class="btn btn-default">Regresar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>