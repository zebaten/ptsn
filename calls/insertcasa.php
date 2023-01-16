<?php
	
	require 'conexion.php';
	
	$numero = $_POST['numero'];
	$calle = $_POST['calle'];
	$usuario = $_POST['listausuario'];
	$comuna = $_POST['lista2'];
	
	
	$sql = "INSERT INTO Casa (Casa_Numero, Casa_Calle, Usuario_Id, Comuna_Id)  VALUES ($numero, '$calle', $usuario, $comuna)";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
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
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="../admin_casas.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>