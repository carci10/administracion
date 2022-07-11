<?php
session_start();
error_reporting(0);
if($_SESSION['tipo']==1)
{

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Menu-Administrador</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="#"><img src="img/core-img/tnm.jpg" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">INICIO</a></li>
                                    <li><a href="#">Paginas</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Inicio</a></li>
                                            <li><a href="#">Alumnos</a></li>
                                            <li><a href="#">Profesores</a></li>
                                            <li><a href="listaaspirantes.php">Aspirantes</a></li>
                                            <li><a href="logout.php">Salir</a></li>
           
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Inicio</a></li>
                                                
                                                <li><a href="alta_fecha.php">Alta Fechas</a></li>
                                                <li><a href="consulta_fecha.php">Consulta Fechas</a></li>
                                                <li><a href="consulta_citas.php">Consulta Citas</a></li>
												<li><a href="limpia_aspirantes.php">limpia Aspirantes</a></li>
												<li><a href="limpia_fechas.php">Elimina Fechas disponibles y citas</a></li>
												
                                            </ul>
                                           
                                            <ul class="single-mega cn-col-4">
												
                                                <li><a href="siad/admin/admin.php">SIAD Admin</a></li>
                                    
                                                <li><a href="listaaspirantes.php">ASPIRANTES</a></li>
                                                <li><a href="siad/login.php">SIAD Alumno</a></li>
                                                <li><a href="siad/login.php">Ctrol-Cisneros-</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.jpg" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="listaaspirantes.php">ASPIRANTES</a></li>
                                    <li><a href="logout.php">SALIR</a></li>
                                    <li><a href="siad/admin/admin.php">S I A D</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:59-88-05-16 "><i class="icon-telephone-2"></i> <span>55 59-88-05-16 </span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2><?php echo "".$_SESSION['nombre']."";?></h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area --><!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Ligas de Interes</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="inicio_log.html">Pre-Registro &amp; Login </a></li>
                                    <li><a href="logout.php">Salir</a></li>
                             
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area --><!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contacto</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                              <p>Tecnologico de Estudios Superiores de Ixtapaluca / Juan Carlos Cisneros Rasgado</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Principal: 5532180829<br>
                                  Office: 59-88-05-16</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>cisn3ros@outlook.com / carci10@hotmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechas reservados | SiCoEs Tesi <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Cisn3ros@outlook.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	<?php 

		} else {
	     echo"No has inicado Sesion como Administrador o tu sesion expiro <br>";

}
	
    ?>
</body>

</html>