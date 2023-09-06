<?php
	
	require 'conexion.php';
	
	$email = $_POST['email'];
	$contraseña = $_POST['password'];
	$tipo = $_POST['tipo'];
	
	
	$sql = "INSERT INTO Usuario (Usuario_Correo, Usuario_Pass, Tipo_Usuario_Id)  VALUES ('$email', '$contraseña', $tipo)";
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="../admin_usuarios.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>