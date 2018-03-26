<?php

     require './php/conexion.php';

     $where = "";

     $sql = "SELECT * FROM habitacion";
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
				<h2 style="text-align:center">Habitaciones Disponibles</h2>				
			</div>
			<div class="row">
				<a href="registrarse.php" class="btn-primary"> Resgistrate </a>
			</div>

			<br>

			<div class="row table-responsive">

				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Precio</th>
							<th>Tipo</th>
							<th>Descripcion</th>

						</tr>
					</thead>
					<tbody>
						<?php while ($row = $resultado -> fetch_array(MYSQL_ASSOC)) 
						{  ?>
							<tr>
								<td><?php echo $row ['idHabitacion'] ?> </td>
								<td><?php echo $row ['Precio'] ?> </td>
								<td><?php echo $row ['tipo'] ?> </td>
								<td><?php echo $row ['Descripcion'] ?> </td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>