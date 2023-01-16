<?php

$usuario=$_POST['email'];
$contraseña=$_POST['password'];
//$conexion=mysqli_connect("mysql.face.ubiobio.cl","ptsn","ptsn2022","ptsn_bd");
$conexion=mysqli_connect("db4free.net","ptsnbd","ptsn2022","ptsnbd");

$consulta="SELECT * FROM Usuario where Usuario_Correo='$usuario' and Usuario_Pass='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
// $stmt = mysqli_prepare($conexion, $consulta);
// mysqli_stmt_bind_param($stmt, 'ss', $usuario, $contraseña);
// $resultado = mysqli_stmt_execute($stmt);
// if (!$resultado) {
//     $error = mysqli_stmt_error($stmt);
//     error_log("Error executing statement: $error");
// }
// $filas=mysqli_stmt_fetch($resultado);
session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['rol']=$filas['Tipo_Usuario_Id'];

if($filas['Tipo_Usuario_Id']==1){ //administrador
    header("location:admin_home.php");

}
if($filas['Tipo_Usuario_Id']==2){ //hogar
header("location:casa_home.php");
}
if($filas['Tipo_Usuario_Id']==3){ //regulador
      header("location:reg_home.php");
      }
      else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);