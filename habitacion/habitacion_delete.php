<?php
	
	require '../calls/conexion.php';

	$id = $_GET['Habitacion_Id'];

    $sql1 = "DELETE FROM Sensor WHERE Habitacion_Id = '$id'";
	$resultado1 = $mysqli->query($sql1);
	
	$sql = "DELETE FROM Habitacion WHERE Habitacion_Id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap.css" rel="stylesheet">
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="../admin_casas.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>