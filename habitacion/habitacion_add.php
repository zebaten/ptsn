<?php 

$id = $_GET['Id'];

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

			<form name="add_casa" id="add_casa" method="POST" action="../calls/inserthab.php" >
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Habitación</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre de Habitación</label>
							<input name="habitacion" id="habitacion" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Id de Casa</label>
							<input name="idcasa" id="idcasa" type="number" class="form-control" value="<?php echo $id ?>" readonly>
						</div>
							<!-- <div class="form-group">
								<label>Stock</label>
								<input type="number" name="stock" id="stock" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Precio</label>
								<input type="text" name="price" id="price" class="form-control" required>
							</div>					 -->
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../admin_casas.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
</div>
