<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$numero = $_POST['numero'];
	$calle = $_POST['calle'];
	$usuario = $_POST['listausuario'];
	$comuna = $_POST['lista2'];

	
	$sql = "UPDATE Casa SET Casa_Numero='$numero', Casa_Calle='$calle', Usuario_Id='$usuario', Comuna_Id='$comuna' WHERE Casa_Id = '$id'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="../admin_casas.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>