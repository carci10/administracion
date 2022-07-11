<?php
session_start();
include '../admin/conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 3) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];
        ?>
           <?php 
          $consulta1="select * from alumnos";
          $numero=mysqli_query($conexion,$consulta1);

           

                 $consulta2 = mysqli_query($conexion,"select concat (nombre_alumno, ' ', apellido_p,' ',apellido_m) as Estudiante from alumnos where matricula = '$codigo'"); 
                 while($filas2=mysqli_fetch_array($consulta2)){
                         $estudiante=$filas2['Estudiante'];                           
                 }
    
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIAD</title>
     <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <link href="../admin/css/bootstrap.css" rel="stylesheet">
    <link href="../../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="../js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="tareas_recibidas/myjava.js"></script>

</head>
<body>
           <?php
        include ('menu_inicio_estudiante.php');
            ?>
       <br>
        <div class="container">
          <div class="row">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logoSIAD.png" width="80" height="80" class="img-responsive"></div>
                       <div class="col-md-6">              
                          <img src="../imagenes/banerEst.png" class="img-responsive">
                       </div>
               <div class="col-md-3">
                
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $estudiante ?></h5>
               </div> 
            </div>
            <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="estudiantes.php">Estudiantes</a></li>
                    <li class="active">Tareas Recibidas</li>
                </ol>
				
				
				
				<?php
				
				$datos=mysqli_query($conexion,"select * from alumnos where matricula='$codigo'");
		 $clave=mysqli_query($conexion,"select PassUsuario, NombreUsuario from usuarios where Codigo='$codigo'");
		 $clave_alumno=mysqli_fetch_assoc($clave);
				while($datos_alumno=mysqli_fetch_assoc($datos)){
					echo"<fieldset><legend>Datos de Alumno</legend>";
					echo"<center>";
					echo" Matricula: $datos_alumno[matricula]";
					echo" Nombre: $datos_alumno[nombre_alumno]";
					echo" $datos_alumno[apellido_p]";
					echo" $datos_alumno[apellido_m]<br>";
					echo" Nacionalidad: $datos_alumno[nacionalidad_alumno] <br>";
					echo" Entidad: $datos_alumno[id_entidad] <br>";
					echo" Municipio: $datos_alumno[id_municipio] <br>";
					echo" Colonia: $datos_alumno[id_colonia] <br>";
					echo" Calle: $datos_alumno[calle] <br>";
					echo" Numero Exterior: $datos_alumno[numero_exterior] <br>";
					echo" Numero Interior: $datos_alumno[numero_interior] <br>";
					echo" Telefono casa: $datos_alumno[telefono_movil] <br>";
					echo" Telefono Movil: $datos_alumno[telefono_casa] <br>";
					echo" CURP: $datos_alumno[curp] <br>";
					echo" Sexo: $datos_alumno[sexo] <br>";
					echo" Fecha Nacimiento: $datos_alumno[fecha_nac] <br>";
					echo" Promedio Lic: $datos_alumno[prom_bachillerato] <br>";
					echo" Carrera: $datos_alumno[id_carrera] <br>";
					echo" Inicio: $datos_alumno[fecha_inicio] <br>";
					echo" Plan Alumno: $datos_alumno[id_plan] <br>";
					echo" Situacion: $datos_alumno[id_situacion] <br>";
					echo" Especialidad: $datos_alumno[id_especialidad] <br>";
					echo" correo: $datos_alumno[correo] <br>";
					echo" Semestre Actual: $datos_alumno[semestre_actual] <br><br>";
					
					echo" Usuario : $clave_alumno[NombreUsuario] <br>";
					echo" Contraseña: $clave_alumno[PassUsuario] <br><br>";
					echo"<input type='submit' name='modifica', value='Modificar Datos'>";
					echo"</center>";
					echo"</fieldset>";
					
				}
		 		echo"$datos_alumno";
				
				?>
				
				
				
            </div>
        </div> 
        <!-- /.row -->
				
				
				
				
				
				

          <!-- Content Column --></div>
</div>
        <hr>

    </div>
	
	
	
	
	
	
	
	
	
	
	
           <?php
    include('../includes/footer.php');
 ?> 
</body>
</html>
<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../login.php"; </script>';
}
?>
