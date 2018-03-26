<?php
	
	require './php/conexion.php';
	

	

	$alias =            $_POST['alias'];
	$password=          $_POST['password'];
	$email =            $_POST['email'];
	$cedula =           $_POST['cedula'];
	$nombres =          $_POST['nombres'];
	$apellidos =        $_POST['apellidos'];

	echo $alias, '  ', $password,'  ',  $email,  "  ", $cedula,   "  ", $nombres,  "  ", $apellidos; 

	$sql = "INSERT INTO usuarios (alias, password, email, cedula, nombres, apellidos) VALUES ('$alias', '$password', '$email', '$cedula', '$nombres', '$apellidos' )";
	$resultado = $mysqli->query($sql);

	
?>

<html lang="es">
	<head>


        <title>Hotel Las palmas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>

		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if(isset($resultado)) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>




