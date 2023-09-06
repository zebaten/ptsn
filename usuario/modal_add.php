<div id="exampleModalCenter" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="add_usuario" id="add_usuario" method="POST" action="../calls/insertuser.php" >
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Tipo de usaurio</label>
							<select class="form-control" id="tipo" name="tipo">
								<option value="1">Administrador</option>
								<option value="2">Hogar</option>
								<option value="3">Regulador</option>
							</select>
							
						</div>
						<div class="form-group">
							<label>Correo Usuario</label>
							<input name="email" id="email" type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input name="password" id="password" type="password" class="form-control" required>
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
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
			</form>
		</div>
	</div>
</div>