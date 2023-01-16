<?php
	require '../calls/conexion.php';
	
	$id = $_GET['Usuario_Id'];
	
	$sql = "SELECT * FROM Usuario WHERE Usuario_Id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="../calls/edituser.php" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['Usuario_Id']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['Usuario_Correo']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="text" name="pass" placeholder="Contraseña" value="<?php echo $row['Usuario_Pass']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="tipo_usuario" class="col-sm-2 control-label">Región</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo_usuario" name="tipo_usuario">
							<option value="1" <?php if($row['Tipo_Usuario_Id']=='1') echo 'selected'; ?>>Administrador</option>
							<option value="2" <?php if($row['Tipo_Usuario_Id']=='2') echo 'selected'; ?>>Hogar</option>
							<option value="3" <?php if($row['Tipo_Usuario_Id']=='3') echo 'selected'; ?>>Regulador</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
