<?php
session_start();
error_reporting(0);
include('conexion.php');
$id_aspirante=$_SESSION['folio'];
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
    <title>Imprime Citas Aspirantes</title>

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
								  <li><a href="aspirante_registrado.php">INICIO</a></li>
                                    
                                  <li><a href="alta_cita.php">Alta Cita</a></li>
                                    <li><a href="logout.php">Salir</a></li>
                                    
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
            <h2><?php echo "".$_SESSION['nombre'].""; ?></h2>
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
	
	
	
<html>
<head>
<meta charset="utf-8">
<title>Imprime citas</title>
</head>

<body>
	
<?php
$aspirante="select aspirante.*,fecha_cita.* from aspirante,fecha_cita,citas where citas.id_fecha=fecha_cita.id_fecha and citas.id_aspirante=aspirante.id_aspirante and citas.id_aspirante=$id_aspirante";
		$rsaspirante= mysqli_query($conexion,$aspirante);
		if(mysqli_num_rows($rsaspirante)!=0){
			while($row = mysqli_fetch_assoc($rsaspirante)){

				
				
				$nombre=$row['nombre'];
				$apellido_p=$row['apellido_p'];
				$apellido_m=$row['apellido_m'];
				$celular=$row['celular'];
				$correo=$row['correo'];
				$carrera=$row['carrera'];
				$especialidad=$row['especialidad'];
				$escula_proc=$row['escuela_proc'];
				$id_fecha=$row['id_fecha'];
				$fecha=$row['fecha'];
				$hora=$row['hora'];
			}
			?>
			<center>
			<form name="imprime" action="imprime_cita.php">
					<?php
			echo"<strong>TECNOLOGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA<br>";
			echo"<strong>POSGRADOS<br><br>";
			echo"<strong>-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_<br><BR>";
			echo"<strong>Su cita ha sido almacenada con los siguientes datos :<br>";
			echo"<strong>FOLIO: $id_aspirante </strong><br><br>";
			echo"<strong>NOMBRE: $nombre </strong><br>";
			echo"<strong>APELLIDO PATERNO: $apellido_p </strong><br>";
			echo"<strong>APELLIDO MATERNO: $apellido_m </strong><br>";
			echo"<strong>TELEFONO CELULAR: $celular </strong><br>";
			echo"<strong>CORREO ELECTRONICO: $correo </strong><br>";
			echo"<strong>ASPIRANTE A POSGRADO: $carrera Administracion </strong><br>";
			echo"<strong>LINEA DE INTERES: $especialidad </strong><br><br>";
			echo"Ingresa 5 minutos antes de tu cita en en la plataforma que se indica mas abajo <br> debes tener cuenta de correo electronico de gmail activa .<br><br>";
			
			echo"Recuerda enviar tu linea de captura y comprobante de pago
por concepto de <br> examen de admision, cantidad de $720.00 
Obtenla en <br> https://sfpya.edomexico.gob.mx/recaudacion <br><br>";
			
			echo"<strong>FECHA DE CITA: $fecha </strong><br>";
			echo"<strong>HORA DE CITA: $hora </strong><br>";
			
		}
				?>
			<center> 
	  <img src="imagenes/documentacion_requerida2.jpg" alt="" width="296" height="386"/>
	</center>
				
				<?php
				echo"<strong>CONTROL: |$id_aspirante|$correo|$nombre|$apellido_p|$apellido_m| 
			$celular|$carrera|$especialidad|$escula_proc|$fecha|$hora|controlposgrados|jccr**|</strong><br><br>";
				?>
					<input type="submit" name="imprimir" action="imprime_cita.php"value="Imprimir"onClick="window.print();">
				
				</form></center>
			
		<p align="right">TESI/JCCR</p>	

	
</body>

</html>