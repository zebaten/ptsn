<?php
	require 'calls/conexion.php';
	
	$id = $_GET['Habitacion_Id'];
	
	$sql = "SELECT * FROM Habitacion WHERE Habitacion_Id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap.css" rel="stylesheet">
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>	
	</head>

	<body class="home">


            <form class="form-horizontal" method="POST" action="calls/cambiaestados.php" autocomplete="off">

                <input type="hidden" id="id" name="id" value="<?php echo $row['Habitacion_Id']; ?>" />

                <div class="form-group">
                    <!-- <div class="switch-button">-->
                        <!-- Checkbox -->
                        <!--<input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox" name=estado>-->
                        <!-- Botón -->
                        <!--<label for="switch-label" class="switch-button__label"></label>-->
                        <label for="listaregion" class="col-sm-2 control-label">Ventilador</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="0" <?php if($row['Ventilador']=='0') echo 'selected'; ?>>Automático</option>
							<option value="1" <?php if($row['Ventilador']=='1') echo 'selected'; ?>>Apagado</option>
                            <option value="2" <?php if($row['Ventilador']=='2') echo 'selected'; ?>>Encendido</option>
						</select>
					</div>
                    <!--</div> -->
                </div>    
                <div class="form-group">
					<label for="number" class="col-sm-2 control-label">Umbral</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="umbral" name="umbral" placeholder="umbral" min="0" max="100" value="<?php echo $row['Umbral']; ?>"  required>
				</div>
                    <!-- <section class="range-slider-wrapper">
                        <div class="range-slider-container">
                            <div class="range-slider-block">
                                <div id="range-sliders" class="range-sliders">
                                    <div class="range-slider-group range-slider-group-red">
                                        <h2 class="range-label range-label-red">Red</h2>
                                        <input type="range" min="0" max="100" value="55" data-color="#f00" class="range-slider range-slider-red" id="range-slider-red" />
                                        <input type="number" min="0" max="100" value="55" class="input-slider input-slider-red" id="input-slider-red" name="umbral" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                </div>    
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="extractores_casa.php" class="btn btn-default">Regresar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
		    </form>
		<!-- Javascript Files -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="./dist/js/app.js"></script> -->
	</body>
</html>
