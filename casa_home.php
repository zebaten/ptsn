<?php 

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

?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="casa_home.php">Home</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="hist_habit_casa.php">Historial Habitaciones</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="extractores_casa.php">Extractores</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Contacts-->
      <section class="section section-lg bg-gray-700">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-map-marker"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">4578 Marmora Road,Glasgow D04 89GR</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-envelope"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                  <article class="info-classic align-items-center info-classic-2">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-phone"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="tel:#">800-2345-6789</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight">
                  <article class="info-classic align-items-center info-classic-2">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-fax"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="tel:#">800-2345-6790</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row row-30">
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".05s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-facebook"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">Follow on Facebook</a></div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12 wow fadeInRight" data-wow-delay=".1s">
                  <article class="info-classic align-items-center">
                    <div class="unit unit-spacing-md align-items-center flex-column flex-md-row text-center text-md-left">
                      <div class="unit-left">
                        <div class="info-classic-icon fa-twitter"></div>
                      </div>
                      <div class="unit-body"><a class="info-classic-link" href="#">Follow on Twitter</a></div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="section footer-classic">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Business Company</span><span>.&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/">Templatemonster</a></p>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>