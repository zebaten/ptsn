<?php
	require 'calls/conexion.php';
	include ('usuario/modal_add.php');

  session_start();
  if(isset($_SESSION['usuario']) && $_SESSION['rol']==1){
    $usuarioingresado = $_SESSION['usuario'];
  }else{
    header('location: index.php');
  }
  
  if(isset($_POST{'btncerrar'})){
    session_destroy();
    header('location: index.php');
  }

	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE Usuario_Id LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM Usuario $where";
	$resultado = $mysqli->query($sql);
	
?>
<html class="wide wow-animation" lang="es">
  <head>
    <title>Administracion de Usuarios</title>
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
                    <li class="rd-nav-item"><a class="rd-nav-link" href="admin_home.php">Home</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="admin_usuarios.php">Usuarios</a>
                      <!-- <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Who We Are</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Our History</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Our Services</a>
                          <ul class="rd-menu rd-navbar-dropdown">
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Business Consulting</a>
                            </li>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Cash Management</a>
                            </li>
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Tax Advisory</a>
                            </li>
                          </ul>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Testimonials</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Our Team</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">News</a>
                        </li>
                      </ul> -->
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="admin_casas.php">Casas</a>
                    </li>
                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="admin_historiales.php">Historiales</a>
                    </li> -->
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

          <a type="button" class="btn btn-primary-12" data-toggle="modal" data-target="#exampleModalCenter">Nuevo Registro</a>
          
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <b>Nombre: </b><input type="text" id="campo" name="campo" />
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
          </form>
        </div>

        <br>

        <div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Usuario_Id</th>
							<th>Usuario_Correo</th>
							<th>Usuario_Pass</th>
							<th>Tipo_Usuario_Id</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
          <tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['Usuario_Id']; ?></td>
								<td><?php echo $row['Usuario_Correo']; ?></td>
								<td><?php echo $row['Usuario_Pass']; ?></td>
								<td><?php echo $row['Tipo_Usuario_Id']; ?></td>
								<td><a href="usuario/modal_edit.php?Usuario_Id=<?php echo $row['Usuario_Id']; ?>"><i class="fa-solid fa-pencil"></i></a></td>
								<td><a href="#" data-href="usuario/modal_delete.php?Usuario_Id=<?php echo $row['Usuario_Id']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fa-solid fa-trash"></i></a></td>
							</tr>
						<?php } ?>
					</tbody>

				</table>
			</div>
      </div>

      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
        <!-- <div style="text-align: center">
        <button type="button" class="btn btn-primary-12" data-toggle="modal" data-target="#exampleModalCenter">
          Agregar Usuario
        </button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="rd-mailform rd-form text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row row-30">
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-name">Nombre:</label>
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-phone">Calle:</label>
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-email">E-Mail:</label>
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>-->
                  <!-- </div>
                  <div class="form-button">
                    <button class="button button-primary" type="submit">Send Message</button>
                  </div>
                </form>
              </div> -->
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
          </div>
        </div> -->
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