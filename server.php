<?php
$host = 'mysql.face.ubiobio.cl';
$port = 3306;
$user = 'ptsm';
$password = 'ptsm2022';
$dbname = 'ptsn_bd';

// Create connection
$conn = mysqli_connect($host, $port ,$user, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$data_array = array();
// SQL para obtener los datos
$sql = "SELECT * FROM Usuario";
// Ejeuctar el SQL
$query = $con->query($sql);
// Recorrer los resultados
while($data = $query->fetch_object()){
	// Poner los datos en un array en el orden de los campos de la tabla
	$data_array[] = array($data->id, $data->name, $data->phone, $data->created_at);
}
// crear un array con el array de los datos, importante que esten dentro de : data
$new_array  = array("data"=>$data_array);
// crear el JSON apartir de los arrays
echo json_encode($new_array);

//echo "Connected successfully";
?>