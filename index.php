<?php
	require 'calls/conexion.php';

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
                      <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-default-672x102.png" alt="" width="336" height="51"/></a>
                    </div>
                  </div>
                <!-- <button type="button" class="rd-nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                Iniciar Sesion
                  </button> -->
                  <div class="rd-navbar-info rd-navbar-collapse">
                    <article class="info-modern">
                    <div class="rd-nav-item"></div><button type="button" class="rd-nav-link" data-toggle="modal" data-target="#exampleModalCenter">Iniciar sesion</button>
                      </article>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Iniciar Sesion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <div class="modal-body">
                             <form data-form-output="form-output-global" data-form-type="contact" method="post" action="login.php">
                                <div class="col-md-8">
                                  <div class="form-wrap">
                                    <label class="form-label" for="email">Correo:</label>
                                      <input class="form-input" id="email" type="email" name="email" data-constraints="@Required">
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="form-wrap">
                                    <label class="form-label" for="password">Contraseña:</label>
                                    <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <div class="form-button">
                                    <button class="button button-primary" type="submit" name="btningresar">Acceder</button>
                                  </div>
                                </div>
                              </form>
                            </div> 
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </nav>
        </div>
      </header>
      <footer class="section footer-classic">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Proyecto de título</span><span>.&nbsp;</span>Sebastián Navarrete Catril</p>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>