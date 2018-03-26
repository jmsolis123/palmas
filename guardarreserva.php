<?php
	
	require './php/conexion.php';
	


	

	$FechaInicio =            $_POST['fechainicio'];
	$FechaFinal=          $_POST['fechafinal'];
	$usuario =            $_POST['usuario'];
	$Habitacion =           $_POST['Habitacion'];

	echo  $FechaInicio, '  ', $FechaFinal, '  ',  $usuario,  "  ", $Habitacion ; 

	$sql = "INSERT INTO reserva (FechaInicio, FechaFinal, usuarios_id, Habitacion_idHabitacion) VALUES ('$FechaInicio', '$FechaFinal', '$usuario', '$Habitacion' )";
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
						<h3>Reserva Guardada</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>


