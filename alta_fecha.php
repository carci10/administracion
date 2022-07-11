<?php
session_start();
error_reporting(0);
include('conexion.php');
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
    <title>Alta Fechas Fechas</title>

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
								  <li><a href="inicio.php">INICIO</a></li>
                                    
                                  <li><a href="alta_fecha.php">Alta Fechas</a></li>
                                    <li><a href="consulta_fecha.php">consulta Fechas</a></li>
                                    <li><a href="logout.php">Salir</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:59-88-05-16 "><i class="icon-telephone-2"></i> <span>(+01 55) 59-88-05-16 </span></a>
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

    <!-- ##### Blog Area Start ###############################################333############# --><!-- ##### Blog Area End ##################################################################333333333333# -->
	
	

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
      <div class="bottom-footer-area">
          <div class="container">
                <div class="row"></div>
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
	
	

   <br><br>
  <form id="nueva_fecha" name="nueva_fecha" method="post" action="">  
  <strong>
  <center>Ingresa Fecha y Hora disponible para entrevistas de Aspirantes</center></strong>
  
  <br>
<center>
  <div>
  <td align="right">Ingresar:  </td>
 <label>Dia: </label>
  <input name="fecha_cita" class="caja" onKeyPress="return soloLetras(event)" type="date" id="fecha_cita" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()"; required>
 <label>Hora: </label>
 <input name="hora_cita" class="caja" onKeyPress="return soloLetras(event)" type="time" id="hora_cita" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()"; required><br> 
  </div>
	</center>
     <td colspan="2"> <center><input type="submit" class="boot" name="guardar" value="GUARDAR"></center>   
  
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>

<?php
	if($_SESSION['tipo']==1){
//echo"-_-_-_--_-_-_--_-_-_--_-_-_--_-_-_--_-_-_--_-_-_--_-_-_--_-_-_-";
if(isset($_POST['guardar'])){
	$fecha=$_POST['fecha_cita'];
	$hora=$_POST['hora_cita'];
    $ingresa="insert into fecha_cita(fecha,hora) values('$fecha','$hora')";
	$resultado=mysqli_query($conexion,$ingresa);
	if($resultado){
		echo "<script type=\"text/javascript\">alert('Se Creo la Fecha: $fecha y la Hora: $hora de forma exitosa '); </script>";
	}
	else
		echo"<script type=\"text/javascript\">alert('Hay un problema y no se guardo la fecha intente otra vez..'); </script>";
}
	} else echo'No has inisiado sesion';
?>

	
	
</body>

</html>