<?php
	
	require 'conexion.php';
	
    $id = $_POST['id'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$tipo = $_POST['tipo_usuario'];

	
	$sql = "UPDATE Usuario SET Usuario_Correo='$email', Usuario_Pass='$pass', Tipo_Usuario_Id='$tipo' WHERE Usuario_Id = '$id'";
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
					
					<a href="../admin_usuarios.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>