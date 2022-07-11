<?php
session_start();
include '../admin/conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 3) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];
		 
		 $matricula=$_SESSION['matricula'];
		 $id_carrera=$_SESSION['carrera'];
		 $plan=$_SESSION['plan'];
		 $semestre_anterior=$_SESSION['semestre'];
		 $semestre_actual=$semestre_anterior+1;
		 $especialidad=$_SESSION['especialidad'];
		 
		 
		 
        ?>
           <?php 
          $consulta1="select id_carrera, nombre_carrera from carreras where id_carrera=$id_carrera";
          $carrera=mysqli_query($conexion,$consulta1);
          $consulta2="select id_grupo,clave_grupo from grupos";
          $grupos=mysqli_query($conexion,$consulta2);
          $consulta3="select id_semestre, nombre_semestre from semestre";
         $semestre=mysqli_query($conexion,$consulta3);
		 

            // $consulta=mysqli_query("select Foto from estudiantes where idEstudiante = $codigo");                  
              //  while($filas=mysql_fetch_array($consulta)){
                //         $foto=$filas['Foto'];                           
                // }

                 $consulta2 = mysqli_query($conexion,"select concat (nombre_alumno, ' ', apellido_p) as Estudiante from alumnos where matricula = '$matricula'"); 
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
    <title>SIAD INSCRIPCIONES</title>
     <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
    <link href="../admin/css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
                  <img class="img-responsive img-circle" src="<?php //echo $matricula ?>" width="50px" height="50px">
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $estudiante ,' /* ', $matricula ,' Se:', $semestre_anterior, ' Esp: ' ,$especialidad, ' Plan: ' ,$plan ,' Ca: ', $id_carrera ?></h5>
               </div> 

            </div>
              <div class="col-lg-12">              
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="estudiantes.php">Estudiantes</a></li>
                     <li><a href="inscripcion_asignatura.php">Inscripcion Asignatura</a></li>
                    <li class="active">Nueva Inscripcion</li>
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

            <center>

            <h4>
 <a href="inscripcion_asignatura.php"> <button class="btn btn-warning" style="float: left; "><i class="fa fa-arrow-left"></i> Volver al Listado</button> </a> 
            <b>Nueva Inscripcion</b></h4>
            </center>
        </div>
        <div class="panel-body">
            <div class="row">
                 
		               <div style="margin-left: : 10px; margin-right: 10px;">
                  <form id="formulario" class="form-group" action="" method="post">
            <div class="modal-body">

          <div class="form-group"> <label for="carrera" class="col-md-3 control-label">Carrera:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="carrera" name="carrera">
                       <option>---- Seleccione una Carrera -----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($carrera)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>

                     
              <div style="margin-top: 10px"> <center><input type="submit" value="Buscar Asignatura"  class="btn btn-success" /></center>    </div>         
             </div>         
            </form>
                            </div>
                        </div>                  
                </div>
        </div>
           <!-- Fin del Panel 1 -->
  
        <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div><center><h4><b>Listado de Asignaturas Factibles a Inscribir (LAFI) </b></h4></center></div>
        <div class="panel-body">
            <div class="row">        
                   <div style="margin-left: : 10px; margin-right: 10px;">
                  <table class="table table-striped table-condensed table-hover table-responsive">
                    <tr>
						<th>Clave  </th>
                      <th>Asignatura</th>
						<th>Creditos</th>
						<th>Semestre</th>
						<th>Especialidad</th>
                      <th>Inscribir Asignatura</th>
                    </tr>
                        <?php

                       if (!isset($_POST['carrera'])){
                       	$consulta = "";
                       echo "<td colspan='2'>No existen Datos que Mostrar</td>";
                      }
                      else {
                      	$consulta=mysqli_query($conexion,"select id_materia,clave_materia,id_plan,
		clave_materia_reticula,nombre_materia,id_carrera, semestre,(creditos_teoricos+creditos_practicos) as creditos,
		id_tipom, id_espacialidad from materias where (id_carrera=$id_carrera and semestre=$semestre_anterior) and (id_espacialidad=0 or id_espacialidad = $especialidad)"); 
                     
                     
                           while($filas=mysqli_fetch_array($consulta)){
                                 $nombre=$filas['nombre_materia'];
                                 $id=$filas['id_materia'];
							     $clave_materia=$filas['clave_materia'];
							   $credit=$filas['creditos'];
							   $semestre_materia=$filas['semestre'];
							   $esp=$filas['id_espacialidad'];
                               
                 ?>
                      <tr>
						  <td><?php echo $clave_materia ?></td>
                       <td><?php echo $nombre ?></td>
						  <td><?php echo $credit ?></td>
						  <td><?php echo $semestre_materia ?></td>
						  <td><?php echo $esp ?></td>
                      <td>
                      <?php
                      echo'
                      <a href="inscripcion_asignaturas/recibir_inscripcion.php?id='.$filas['id_materia'].'"><button title="Inscribir esta Asignatura" class="btn btn-success"> <i class="glyphicon glyphicon-pencil"></i> &nbsp;  Inscribir Asignatura</button></a>
                         ' ?>
                      <?php  } }?>
						  
						 
						  
                      </td>
                    </tr>

                  </table>
       

                            </div>
                        </div>

                    
        </div>
  
        </div>
        <!-- Fin del Panel 2 -->


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
