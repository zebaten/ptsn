<?php
	$mysqli = new mysqli('localhost', 'root', '', 'ptsnbd');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>