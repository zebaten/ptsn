<?php
	require '../calls/conexion.php';
	
	$id = $_GET['Casa_Id'];
	
	$sql = "SELECT * FROM Casa WHERE Casa_Id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

	$sql2 = "SELECT * FROM Comuna WHERE Comuna_Id = '". $row['Comuna_Id'] ."'";
	$resultado2 = $mysqli->query($sql2);
	$row2 = $resultado2->fetch_array(MYSQLI_ASSOC);

	$sql3 = "SELECT * FROM Usuario WHERE Usuario_Id = '". $row['Usuario_Id'] ."'";
	$resultado3 = $mysqli->query($sql3);
	$row3 = $resultado3->fetch_array(MYSQLI_ASSOC);


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
			
			<form class="form-horizontal" method="POST" action="../calls/editcasa.php" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['Casa_Id']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Calle</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="calle" name="calle" placeholder="Email" value="<?php echo $row['Casa_Calle']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Numero</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="numero" name="numero" placeholder="Numero" value="<?php echo $row['Casa_Numero']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="listaregion" class="col-sm-2 control-label">Region</label>
					<div class="col-sm-10">
						<select class="form-control" id="listaregion" name="listaregion">
							<option value="1" <?php if($row2['Region_Id']=='1') echo 'selected'; ?>>TARAPACÁ</option>
							<option value="2" <?php if($row2['Region_Id']=='2') echo 'selected'; ?>>ANTOFAGASTA</option>
							<option value="3" <?php if($row2['Region_Id']=='3') echo 'selected'; ?>>ATACAMA</option>
							<option value="4" <?php if($row2['Region_Id']=='4') echo 'selected'; ?>>COQUIMBO</option>
							<option value="5" <?php if($row2['Region_Id']=='5') echo 'selected'; ?>>VALPARAÍSO</option>
							<option value="6" <?php if($row2['Region_Id']=='6') echo 'selected'; ?>>LIBERTADOR GENERAL BERNARDO O'HIGGINS</option>
							<option value="7" <?php if($row2['Region_Id']=='7') echo 'selected'; ?>>MAULE</option>
							<option value="8" <?php if($row2['Region_Id']=='8') echo 'selected'; ?>>BIOBÍO</option>
							<option value="9" <?php if($row2['Region_Id']=='9') echo 'selected'; ?>>LA ARAUCANÍA</option>
							<option value="10" <?php if($row2['Region_Id']=='10') echo 'selected'; ?>>LOS LAGOS</option>
							<option value="11" <?php if($row2['Region_Id']=='11') echo 'selected'; ?>>AYSÉN DEL GENERAL CARLOS IBÁÑEZ DEL CAMPO</option>
							<option value="12" <?php if($row2['Region_Id']=='12') echo 'selected'; ?>>MAGALLANES Y DE LA ANTÁRTICA CHILENA</option>
							<option value="13" <?php if($row2['Region_Id']=='13') echo 'selected'; ?>>METROPOLITANA DE SANTIAGO</option>
							<option value="14" <?php if($row2['Region_Id']=='14') echo 'selected'; ?>>LOS RÍOS</option>
							<option value="15" <?php if($row2['Region_Id']=='15') echo 'selected'; ?>>ARICA Y PARINACOTA</option>
							<option value="16" <?php if($row2['Region_Id']=='15') echo 'selected'; ?>>ÑUBLE</option>
						</select>
					</div>
				</div>

				<div class="form-group">
							<div id= listacomuna name=listacomuna></div>
								<script type="text/javascript">
										$(document).ready(function(){
											$('#listaregion').val(<?php echo $row['Comuna_Id'] ?>);
											recargarLista();

											$('#listaregion').change(function(){
												recargarLista();
											});
										})
									</script>
									<script type="text/javascript">
										function recargarLista(){
											$.ajax({
												type:"POST",
												url:"../comunas.php",
												data:"Region_Id=" + $('#listaregion').val(),
												success:function(r){
													$('#listacomuna').html(r);
												}
											});
										}
									</script>
								</div>
					</div>

						<div class="form-group">
							<div class="col-sm-10">
								<select id=listausuario name=listausuario>
									<option value="<?php echo $row['Usuario_Id']; ?>"><?php echo $row3['Usuario_Correo']; ?></option>
										<?php
									// Realizamos la consulta para extraer los datos
											$query = $mysqli -> query ("SELECT * FROM Usuario U WHERE U.Usuario_Id NOT IN (SELECT C.Usuario_Id FROM Casa C)");
											while ($valores = mysqli_fetch_array($query)) {
									// En esta sección estamos llenando el select con datos extraidos de una base de datos.
												echo '<option value="'.$valores['Usuario_Id'].'">'.$valores['Usuario_Correo'].'</option>';
											}
											?>
								</select>
							</div>
						</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../admin_casas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
