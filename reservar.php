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
        <h3 style="text-align:center">NUEVA RESERVA</h3>
      </div>
      

        <form class="form-horizontal" method="POST" action="guardarreserva.php" autocomplete="off">
        <div class="form-group">
          <label for="fechainicio" class="col-sm-2 control-label">Fecha De Inicio</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fechainicio" name="fechainicio" placeholder="Fecha De Inicio" required>
          </div>
        </div>

        
        <div class="form-group">
          <label for="fechafinal" class="col-sm-2 control-label">Fecha De Partida</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="fechafinal" name="fechafinal" placeholder="Fecha De Partida" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="usuario" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-10">
            <input type="int" class="form-control" id="usuario" name="usuario" placeholder="usuario">
          </div>
        </div>
        
         <div class="form-group">
          <label for="Habitacion_idHabitacion" class="col-sm-2 control-label">Habitacion</label>
          <div class="col-sm-10">
            <input type="int" class="form-control" id="Habitacion_idHabitacion" name="Habitacion" placeholder="Habitacion">
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