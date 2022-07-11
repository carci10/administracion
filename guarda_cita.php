<?php
session_start();
error_reporting(0);
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
    <title>Guardar Cita </title>

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
                                    <li><a href="imprime_cita.php">Imprime Cita</a></li>
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
            <h2> <?php echo "".$_SESSION['nombre'].""; ?></h2>
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
	
	
	


<?php
	include('conexion.php');
//Guarda en BD las citas que los aspirantes eligen de la tabla fechas disponibles en la BD.
	$id_fecha=$_REQUEST['fecha-hora'];
	$id_aspirante=$_SESSION['folio'];
	
	//Consulta si ya tiene cita
	$consulta_cita="select * from citas where id_aspirante=$id_aspirante";
	$rsconsulta_cita=mysqli_query($conexion,$consulta_cita);
	if($citado=mysqli_fetch_row($rsconsulta_cita)!=0){
		echo'<center>Estimado Aspirante ya has registrado una cita con anterioridad <br> </center>';
		echo'<center><a href="imprime_cita.php">Imprimir Cita</a></center>';
	} 
	
	else {
	$guarda_cita="insert into citas(id_fecha,id_aspirante) values($id_fecha,$id_aspirante)";

		$rsguarda = mysqli_query($conexion,$guarda_cita);
		
	if($rsguarda){
		
		//Recupearar datos del aspirante + los datos de su cita para que se imprima
		echo'<center>Estimado Aspirante has registrado tu cita correctamente <br><br> </center>';
		
		echo'<center><a href="imprime_cita.php">Para imprimr da ¡¡ click aqui!! </a></center>';
		
		$aspirante='select aspirante.*,fecha_cita.* from aspirante,fecha_cita,citas where
    -> citas.id_fecha=fecha_cita.id_fecha and citas.id_aspirante=aspirante.id_aspirante and citas.id_aspirante=$id_aspirante';
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
			
			
				<fieldset >
					<legend>CONFIRMACION DE CITA PARA ASPIRANTE</legend>
					<?php
			echo"<strong>Su cita ha sido almacenada con los siguientes datos :<br>";
			echo"<strong>FOLIO: $id_aspirante </strong><br><br>";
			echo"<strong>NOMBRE: $nombre </strong><br>";
			echo"<strong>APELLIDO PATERNO: $apellido_p </strong><br>";
			echo"<strong>APELLIDO MATERNO: $apellido_m </strong><br>";
			echo"<strong>TELEFONO CELULAR: $celular </strong><br>";
			echo"<strong>CORREO ELECTRONICO: $correo </strong><br>";
			echo"<strong>ASPIRANTE A POSGRADO: $carrera </strong><br>";
			echo"<strong>LINEA DE INTERES: $especialidad </strong><br><br>";
			echo"<strong>FECHA DE CITA: $fecha </strong><br>";
			echo"<strong>HORA DE CITA: $hora </strong><br>";
				?>
			</fieldset>
	
					<center><a href="imprime_cita.php">Imprime tu cita ¡¡Aqui!!</a></center>
			
				<?php
		}
	}else{
		
		
	
		echo"<center><p>UPS... TU CITA NO SE GUARDO CON EXITO, si no hay fecha para seleccionar te pedimos llamar para pedir nuevas fechas disponibles, debido a que los docentes que realizan la entrevista agotaron sus tiempos para otros aspirantes como tu, llamar al Tel. 59-88-05-16 o enviar correo electrónico a: posgradostesi@tesi.edu.mx con at'n a la Mtra. Maria Elena Orozco Alvarez, por tu comprension e interes MUCHAS  GRACIAS</p></center><br> ";
		
		echo'<center><a href="index.html">Salir</a></center>';
	}
	}
?>

	
</body>

</html>