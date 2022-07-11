<?php
session_start();
error_reporting(0);
$id_aspirante=$_SESSION["folio"];
$nombre_aspirante=$_SESSION["nombre"];

include('conexion.php');
//Lee citas disponibles en BD
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
    <title>Alta Cita</title>

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
                                    <li><a href="imprime_cita.php">Imprimir Cita</a></li>
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

	
	<br>
	<br><center><strong>OBTENER CITA DE ENTREVISTA</strong></center>
<br><br>
	<td>
	
		
<form name="citas" method="post" action="guarda_cita.php">	
<center>
	 

  <div>		
  <label> Fechas Disponibles</label>
  <select name="fecha-hora" id="fecha-hora" >
  <option value="0">--- SELECCIONE ---</option>
  <p>
    <?php
  	
	$num_cita = 'select * from fecha_cita where fecha_cita.id_fecha not in(select id_fecha from citas)';
	$rsfecha	= mysqli_query($conexion,$num_cita);
	if(mysqli_num_rows($rsfecha) != 0){
		while($rowx	= mysqli_fetch_assoc($rsfecha)){
		echo '<option value="'.$rowx['id_fecha'].'">'.$rowx['fecha'].'   '.$rowx['hora'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
	  
  ?>
       </select>
   
		</div>
   
		<br>
    <div>
  	
	  <label><?php echo 'ASPIRANTE:  '.  $nombre_aspirante.'    FOLIO: ';  ?></label>
	  
		<input type="int" name="id_aspirante" value="<?php echo $id_aspirante?>" disabled: disabled>
	</div>
	  
	  <br>
	  <center><input type="submit" name="guardar" value="Guardar"></center>
	  
	  </form>
</center>	  

	
	</body>

</html>