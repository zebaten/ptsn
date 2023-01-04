<?php
$usuario=$_POST['email'];
$contraseña=$_POST['password'];
echo "poto";
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("mysql.face.ubiobio.cl","ptsm","ptsm2022","ptsn_bd");

$consulta="SELECT * FROM Usuario where Usuario_Correo='$usuario' and Usuario_Pass='$contraseña'";
$stmt = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($stmt, $usuario, $contraseña);
$resultado = mysqli_stmt_execute($stmt);
$filas=mysqli_stmt_fetch($resultado);

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
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);