<?php 
require 'calls/conexion.php';
$region=$_POST['Region_Id'];

	$sql="SELECT *
		from Comuna 
		where Region_Id='$region'";

	$result=mysqli_query($mysqli,$sql);

	$cadena="<label>Comuna</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
	

?>