<?php
session_start();
include '../admin/conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 3) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];
        ?>
           <?php 
          $consulta2="select id_materia, nombre_materia  from materias";
          $asignatura=mysqli_query($conexion,$consulta2);
          $consulta3="select id_grupo, clave_grupo from grupos";
          $grupo=mysqli_query($conexion,$consulta3);

            $consulta=mysqli_query($conexion,"select Foto from usuarios where Codigo = '$codigo'");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }

                 $consulta2 = mysqli_query($conexion,"select concat (nombre_alumno, ' ', apellido_p) as Estudiante from alumnos where matricula = '$codigo'"); 
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
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="inscripcion_asignaturas/myjava.js"></script>
    <script src="inscripcion_asignaturas/functions.js"></script>

</head>
<body>
           <?php
                include ('menu_inicio_estudiante.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logoSIAD.png" width="80" height="80" class="img-responsive"></div>
             <div class="col-md-6">         
               
                <img src="../imagenes/banerEst.png" class="img-responsive">
                     
             </div>
               <div class="col-md-3">
                 <img class="img-responsive img-circle" src="<?php echo $foto ?>" width="50px" height="50px">
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $estudiante ?></h5>
               </div> 

            </div>
              <div class="col-lg-12">              
              <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="estudiantes.php">Estudiantes</a></li>
                    <li class="active">Inscripcion de Asignaturas</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
        <div class="row">
            <!-- Content Column -->
                        <?php
                  include ('menu_estudiante.php');
                       ?>
            <div class="col-md-9">
                <div class="containe">
      <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div>
            <center><h4><b>Mis Inscripciones de Asignatura</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		               <div class="col-md-1"><h4>Buscar:</h4></div>
		               
                   <div class="col-md-5">
		                  <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir el nombre de la Asignatura">
		               </div>
		               	<div class="col-md-6"> 
                      <a href="inscribir_asignatura.php"> <button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>  Nueva Inscripcion</button> </a>
		               </div>
	              <br>
 <br>
    <div class="registros" style="width:100%;" id="agrega-registros"></div>
      <div class="col-md-6" style="text-align: left;">
		    <center>
		        <ul class="pagination" id="pagination"></ul>
		    </center>
      </div>
      <div class="col-md-6">
		   <center>
		   <h4 style="font-weight: bold;"> 
    <?php
include('../admin/conexion.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT inscripciones.*,periodos.descripcion_periodo FROM inscripciones
inner join periodos on inscripciones.id_periodo=periodos.id_periodo
where matricula = '$codigo'and periodos.estado_perido=1"));
    echo "Registros Totales: $numeroRegistros";
        ?>
        </h4>
          </center>
      </div>

            </div>
                    
        </div>
        <!-- Fin del Panel -->
      </div>
    </div>
</div>
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
