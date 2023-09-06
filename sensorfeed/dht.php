<?php

class dht11{
 public $link='';
 function __construct($temperature, $humidity, $id){
  $this->connect();
  $this->storeInDB($temperature, $humidity, $id);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'ptsnbd') or die('Cannot select the DB');
 }
 
 function storeInDB($temperature, $humidity, $id){
    $query =  "INSERT INTO sensor (Humedad_Relativa, Temperatura, Sens_Fecha_Hora, Habitacion_Id) VALUES ('".$humidity."','".$temperature."',NOW(),'".$id."')";
    $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['temperature'] != '' and  $_GET['humidity'] != '' and $_GET['id'] !=''){
 $dht11=new dht11($_GET['temperature'],$_GET['humidity'],$_GET['id']);
}


?>
