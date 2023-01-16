<?php
	$mysqli = new mysqli('db4free.net', 'ptsnbd', 'ptsn2022', 'ptsnbd');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>