
<!DOCTYPE html>

<html lang="es">

  <head>
    <title>Login</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <script src="js/bootstrap.min.js" ></script>
    
  </head>
  

<body>

<html>
  <head>
    <title>Login</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <script src="js/bootstrap.min.js" ></script>
    
  </head>
  
  <body>
    
    <div class="container">    
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
          <div class="panel-heading">
            <div class="panel-title">Iniciar Sesi&oacute;n</div>
          </div>     
          
          <div style="padding-top:30px" class="panel-body" >
            
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            
            <form id="loginform" class="form-horizontal" role="form" action=" checklogin.php " method="POST" autocomplete="off">
              
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="alias" type="text" class="form-control" name="alias" value="" placeholder="usuario o email" required>                                        
              </div>
              
              <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
              </div>
              
              <div style="margin-top:10px" class="form-group">
                <div class="col-sm-12 controls">
                  <button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-12 control">
                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    No tiene una cuenta! <a href="registrarse.php">Registrate aquí</a>
                  </div>
                </div>
              </div>    
            </form>
          </div>                     
        </div>  
      </div>
    </div>
  </body>
</html>