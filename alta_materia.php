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
    <title>Alta Asignaturas</title>

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
                                    
                                  <li><a href="consulta_materia.php">Con-Asigaturas</a></li>
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
                <div class="row"></d><script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
			  </footer>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
<link href="css/tablas.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">




<style>
.caja{
	display: inline-block;
	margin: 5px;
	border: 1px solid #dadada;
	background-color: #eaeaea;
	padding: 3px;
	color: #404040;
	width: 250px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Asignaturas</title>

</head>

<body>
   <center>
  <form id="form1" name="form1" method="post" action="guardarcurso.php">  
  <strong>
  <h3>REGISTRAR ASIGNATURAS</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  
  <tr>
  <td align="right">Clave Asignatura:</td>
  <td><span id="sprytextfield2">
  <input name="clave_a" class="caja" type="float" id="clave_a" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
	  
	<tr>
  <td align="right">Plan de Estudio:</td>
  <td>
  <select name="plan" id="plan" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	include('conexion.php');
	$plan	= "SELECT * FROM plan_estudio";
	$rsplan	= mysql_query($plan,$conexion);
	if(mysql_num_rows($rsplan) != 0){
		while($rowx	= mysql_fetch_assoc($rsplan)){
		echo '<option value="'.$rowx['clave_plan'].'">'.$rowx['descripcion_plan'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
    
	
	  
  
  <tr>
  <td align="right">Clave Materia en Reticula:</td>
  <td><span id="sprytextfield2">
  <input name="clave_mat_ret" class="caja" type="float" id="clave_mat_ret" size="28" autocomplete="off">
  </td>
  </tr>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield2">
  <input name="nombre" class="caja" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
	  
	<tr>
  <td align="right">Carrera:</td>
  <td>
  <select name="carrera" id="carrera" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('conexion.php');
	$carrera	= "SELECT * FROM carrera";
	$rscarrera	= mysql_query($carrera,$conexion);
	if(mysql_num_rows($rscarrera) != 0){
		while($rowx	= mysql_fetch_assoc($rscarrera)){
		echo '<option value="'.$rowx['clave_carrera'].'">'.$rowx['nombre_carrera'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
      
	  
	  
  <tr>
  <td align="right">Semestre:</td>
  <td><span id="sprytextfield2">
  <input name="semestre" class="caja" onKeyPress="return soloLetras(event)" type="int" id="semestre" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>

<tr>
  <td align="right">Creditos Teorico:</td>
  <td><span id="sprytextfield2">
  <input name="ct" class="caja" onKeyPress="return soloLetras(event)" type="int" id="ct" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>
  
	  <tr>
  <td align="right">Creditos Practicos:</td>
  <td><span id="sprytextfield2">
  <input name="cp" class="caja" onKeyPress="return soloLetras(event)" type="int" id="cp" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>

	  
	  <tr>
  <td align="right">Tipo:</td>
  <td>
  <select name="tipo" id="tipo" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('conexion.php');
	$tipo	= "SELECT * FROM tipo_materia";
	$rstipo	= mysql_query($tipo,$conexion);
	if(mysql_num_rows($rstipo) != 0){
		while($rowx	= mysql_fetch_assoc($rstipo)){
		echo '<option value="'.$rowx['clave_tipo_materia'].'">'.$rowx['nombre_tipo_materia'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
    
  
  
  <tr><td colspan="2">
  <input type="submit" class="boot" name="guarda" value="GUARDAR">
  <input type="reset" class="boot" name="guarda" value="NUEVO"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	
	</script>
iv>
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
	
	
</body>

</html>