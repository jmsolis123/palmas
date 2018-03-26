
<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <script src="js/bootstrap.min.js" ></script>
    
    <style>
      body {
      padding-top: 20px;
      padding-bottom: 20px;
      }
    </style>
  </head>
  
  <body>
    <div class="container">
          
          <div id='navbar' class='navbar-collapse collapse'>
            <ul class='nav navbar-nav'>
              <li class='active'><a href='welcome.php'>Inicio</a></li>      
            </ul>
            
            <ul class='nav navbar-nav navbar-right'>
              <li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
            </ul>
          </div>
        </div>
      </nav>  

      
      <div class="jumbotron">
        <h2><?php echo 'Bienvenid@ '.utf8_decode($row['alias']); ?></h1>
        <br />
      </div>

           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
               <a href="reservar.php" class="btn btn-primary">Hacer Una Reserva</a>
               <a href="logout.php" class="btn btn-primary">Cerrar Sesion  </a>
               
          </div>
    </div>
  </body>
</html>