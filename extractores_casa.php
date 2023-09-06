<?php
	require 'calls/conexion.php';

  session_start();
  if(isset($_SESSION['usuario']) && $_SESSION['rol']==2){
    $usuarioingresado = $_SESSION['usuario'];
  }else{
    header('location: index.php');
  }
  
  if(isset($_POST{'btncerrar'})){
    session_destroy();
    header('location: index.php');
  }

  $sql1 = "SELECT * FROM Usuario WHERE Usuario_Correo = '$usuarioingresado'";
  $resultado1 = $mysqli->query($sql1);
  $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);

  $sql2 = "SELECT * FROM Casa WHERE Usuario_Id = '". $row1['Usuario_Id'] ."'";
  $resultado2 = $mysqli->query($sql2);
  $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);

  $sql = "SELECT * FROM Habitacion WHERE Casa_Id = '". $row2['Casa_Id'] ."'";
  $resultado = $mysqli->query($sql);
	
?>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Administracion de Habitaciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/core.min.js"></script>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="css/style.css">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>	
		<script src="https://kit.fontawesome.com/1c1ff36eb6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="170px" data-xl-stick-up-offset="170px" data-xxl-stick-up-offset="170px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-672x102.png" alt="" width="336" height="51"/></a>
                  </div>
                </div>
                <div class="rd-navbar-info rd-navbar-collapse">
                <p>Bienvenido <?php echo $usuarioingresado?></p>
                  <article class="info-modern">
                    <form method="POST">
                      <input type="submit" value="Cerrar Sesión" name="btncerrar"/>
                    </form>
                  </article>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="casa_home.php">Home</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="hist_habit_casa.php">Historial Habitaciones</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="extractores_casa.php">Extractores</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--About-->
      <div class="container">
        <div class="row">
        </div>

        <br>

        <div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Habitación_Nombre</th>
              <th>Estado Ventilador</th>
							<th></th>
						</tr>
					</thead>
					
          <tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['Hab_Nombre']; ?></td>
                <td><?php echo $row['Ventilador']; ?></td>
								<td><a href="extractor_manual.php?Habitacion_Id=<?php echo $row['Habitacion_Id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>

				</table>
			</div>
      </div>

      <footer class="section footer-classic">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Proyecto de título</span><span>.&nbsp;</span>Sebastián Navarrete Catril</p>
        </div>
      </footer>
    </div>
    
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>