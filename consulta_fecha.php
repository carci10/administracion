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
    <title>Fechas</title>

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
            <h2>ADMINISTRADOR</h2>
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
	
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editarfecha.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminarfecha.php?Id="+id;
	}else{
	
	}
	
}
</script>
<center>
<small><font color="red">* !!Cuidadado, al eleminar fechas el aspirante no puede visualizarlas en su sesion!! 
</font></small>
</center>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center>
		 FECHAS DISPONIBLES PARA ENTREVISTAS
		</center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>FECHA</th>
   <th>HORA</th>
  </tr>
 <?php
	 if($_SESSION['tipo']==1){
 include('conexion.php');
 $contador = 0;
 $sql = "select * from fecha_cita where fecha_cita.id_fecha not in(select id_fecha from citas)";
 $rs  = mysqli_query($conexion,$sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
	
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    //echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['id_fecha'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['id_fecha'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['fecha'].'</td>';
		echo '<td>'.$row['hora'].'</td>';
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
	 } else"No has iniciado Sesion";
 ?>

	
	
	
	
</body>

</html>