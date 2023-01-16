<?php
	require '../calls/conexion.php';
	
?>
<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap.css" rel="stylesheet">
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
<div class="container">
			<div class="row">
				<h3 style="text-align:center">AGREGAR CASA</h3>
			</div>

			<form name="add_casa" id="add_casa" method="POST" action="../calls/insertcasa.php" >
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Casa</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Calle</label>
							<input name="calle" id="calle" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Número</label>
							<input name="numero" id="numero" type="text" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Region</label>
							<select id="listaregion" name="listaregion">
								<option value="0">Selecciona una opcion</option>
								<option value="1">TARAPACÁ</option>
								<option value="2">ATACAMA</option>
								<option value="3">VALPARAÍSO</option>
								<option value="4">COQUIMBO</option>
								<option value="5">VALPARAÍSO</option>
								<option value="6">LIBERTADOR GENERAL BERNARDO O'HIGGINS</option>
								<option value="7">MAULE</option>
								<option value="8">BIOBÍO</option>
								<option value="9">LA ARAUCANÍA</option>
								<option value="10">LOS LAGOS</option>
								<option value="11">AYSÉN DEL GENERAL CARLOS IBÁÑEZ DEL CAMPO</option>
								<option value="12">MAGALLANES Y DE LA ANTÁRTICA CHILENA</option>
								<option value="13">METROPOLITANA DE SANTIAGO</option>
								<option value="14">LOS RÍOS</option>
								<option value="15">ARICA Y PARINACOTA</option>
								<option value="16">ÑUBLE</option>
							</select>
							<br>
						</div>
                        <div class="form-group">
							<div id= listacomuna name=listacomuna></div>
								<script type="text/javascript">
										$(document).ready(function(){
											$('#listaregion').val(1);
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
						<select id=listausuario name=listausuario>
        <option value="0">Seleccione Usuario:</option>
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
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../admin_casas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
</div>