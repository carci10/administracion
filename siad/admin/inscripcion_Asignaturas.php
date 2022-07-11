<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 1) {
            $user = $_SESSION['NombreUsuario'];
              $codigo = $_SESSION["Codigo"];

              $consulta=mysqli_query($conexion,"select Foto from usuarios where Codigo ='$codigo'");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }
        ?>
             <?php 
          $consulta1="select id_grupo, clave_grupo from grupos";
          $grupo=mysqli_query($conexion,$consulta1);
          $consulta2="select id_materia, nombre_materia from materias";
          $asignaturas=mysqli_query($conexion,$consulta2);
		 $consulta3="select id_periodo, descripcion_periodo from periodos";
          $periodo=mysqli_query($conexion,$consulta3);
		 $consulta4="select id_tipoi, descripcion from tipo_inscripcion";
          $tipo_ins=mysqli_query($conexion,$consulta4);
		  $consulta5="select id_semestre, nombre_semestre from semestre";
          $semestre=mysqli_query($conexion,$consulta5);
		  $consulta6="select id_carrera, nombre_carrera from carreras";
          $carrera=mysqli_query($conexion,$consulta6);
  
/*
          $consulta=mysqli_query($conexion,"select Foto from alumnos where matricula = $codigo");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }   */

                 $consulta2 = mysqli_query($conexion,"select concat (nombre_alumno, ' ', apellido_p,'apellido_m') as Estudiante from alumnos where matricula ='$codigo'"); 
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
    <title>INSCRIPCIONES</title>
    <link rel="shortcut icon" href="../imagenes/logoUNI.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1-10.2.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="incripciones_asignaturas/myjava.js"></script>

</head>
<body>
           <?php
        include ('menuAdmin.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logoSIAD.png" width="80" height="80" class="img-responsive"></div>
             <div class="col-md-6">         
               
                <img src="../imagenes/baner.png" class="img-responsive">
                     
             </div>
               <div class="col-md-3">
              <img class="img-responsive img-circle" src="<?php echo $foto ?>" width="50px" height="50px">
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $user ?></h5>
               </div> 

            </div>
             <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="admin.php">Administrador</a></li>
                    <li class="active">Inscripciones</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
        <!-- Content Row -->
<?php //include('otros/menuAdministrador.php') ?>
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-9">
                <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div>
            <center><h4><b>Incripciones de Clases</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		               <form id="formulario" class="form-group" action="recibir_inscripcion_asignaturas.php" method="post">
            <div class="modal-body">

          <div class="form-group"> <label for="carrera" class="col-md-3 control-label">Grupo:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="grupo" name="grupo">
                       <option>---- Seleccione un Grupo-----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($grupo)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>

                       <div class="form-group"> <label for="carrera" class="col-md-3 control-label">Asignaturas:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="asignaturas" name="asignaturas">
                        <option>---- Seleccione una Asignatura -----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($asignaturas)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>

                     <div class="form-group"> <label for="matricula" class="col-md-3 control-label">Matricula:</label>
                         <div class="col-md-9">
                       <input type="text" class="form-control" name="estudiante" required="true" placeholder="Matricula del Estudiante"  maxlength="10">
                       </div>
                    </div> <br>
				
				<div class="form-group"> <label for="periodo" class="col-md-3 control-label">Periodo:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="periodo" name="periodo">
                        <option>---- Seleccione Periodo de Insc -----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($periodo)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				
				<div class="form-group"> <label for="tipoi" class="col-md-3 control-label">Tipo Inscripcion:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="tipoi" name="tipoi">
                        <option>---- Seleccione un Tipo-----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($tipo_ins)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				<div class="form-group"> <label for="tipoi" class="col-md-3 control-label">Semestre:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="tipoi" name="semestre">
                        <option>---- Seleccione un Semestre-----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($semestre)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				<div class="form-group"> <label for="tipoi" class="col-md-3 control-label">Carrera:</label>
                         <div class="col-md-9">
                       <select class="form-control" id="tipoi" name="carrera">
                        <option>---- Seleccione una Carrera-----</option>
                      <?php 
                          while($fila=mysqli_fetch_row($carrera)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>



		
                      


              <div style="margin-top: 10px"> <center><input type="submit" value="Inscribir Asignatura"  class="btn btn-success" /></center>    </div>         
             </div>         
            </form>
	              <br>
 <br>

 <div class="row">
                   <div class="col-md-1"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buscar:</h4></div>
                   <div class="col-md-5">
                   <form name="form1" action="" method="post">
                   <input type="text" name="txtbuscar" id="txtbuscar" class="form-control" placeholder="Escribir el nombre del Estudiante">
                   
                   </div>
                    <div class="col-md-6">
                      <input type="submit" id="nuevo-producto" class="btn btn-success" value="Buscar Inscripcion"> 
                      </form>
                   </div>
                <br>
  </div>

    <div class="registros" style="width:100%;" id="agrega-registros">
<?php
include('conexion.php');


$registro = mysqli_query($conexion,"SELECT inscripciones.id_inscripcion as Codigo, materias.nombre_materia as Asignatura, concat(alumnos.nombre_alumno, ' ' ,alumnos.apellido_p) as Estudiantes,
inscripciones.fecha_inscripcion as fecha, periodos.descripcion_periodo as periodo,grupos.clave_grupo as grupo, tipo_inscripcion.descripcion as tipo
FROM inscripciones
INNER JOIN periodos ON inscripciones.id_periodo=periodos.id_periodo
INNER JOIN materias ON inscripciones.id_materia=materias.id_materia
INNER JOIN alumnos  ON inscripciones.matricula=alumnos.matricula
INNER JOIN tipo_inscripcion  ON inscripciones.id_tipoi=tipo_inscripcion.id_tipoi
INNER JOIN grupos  ON inscripciones.id_grupo=grupos.id_grupo");

if (isset($_POST['txtbuscar'])){
      $registro=mysqli_query($conexion,"SELECT inscripciones.id_inscripcion as Codigo, materias.nombre_materia as Asignatura, concat(alumnos.nombre_alumno, ' ' ,alumnos.apellido_p) as Estudiantes,
inscripciones.fecha_inscripcion as fecha, periodos.descripcion_periodo as periodo,grupos.clave_grupo as grupo, tipo_inscripcion.descripcion as tipo
FROM inscripciones
INNER JOIN periodos ON inscripciones.id_periodo=periodos.id_periodo
INNER JOIN materias ON inscripciones.id_materia=materias.id_materia
INNER JOIN alumnos  ON inscripciones.matricula=alumnos.matricula
INNER JOIN tipo_inscripcion  ON inscripciones.id_tipoi=tipo_inscripcion.id_tipoi
INNER JOIN grupos  ON inscripciones.id_grupo=grupos.id_grupo
where alumnos.matricula like '%".$_POST['txtbuscar']."%'"); 
    }

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
          <tr>
                      <th width="5%">Codigo</th>  
                        <th width="15%">Alumno</th>        
                        <th width="20%">Asignatura</th>
                        <th width="10%">Grupo</th>  
                        <th width="10%">Periodo</th>        
                        <th width="20%">Tipo</th>
						<th width="60%">Fecha</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
       while($registro2 = mysqli_fetch_array($registro)){
          echo '<tr>
                              <td>'.$registro2['Codigo'].'</td>
                              <td>'.$registro2['Estudiantes'].'</td>
                              <td>'.$registro2['Asignatura'].'</td>
                              <td>'.$registro2['grupo'].'</td>
                              <td>'.$registro2['periodo'].'</td>
                              <td>'.$registro2['tipo'].'</td>
							  <td>'.$registro2['fecha'].'</td>
                       </tr>';
        }
      }else{
        echo '<tr>
              <td colspan="10">No se encontraron resultados</td>
            </tr>';
      }
      echo '</table>';
?>
    </div>
      <div class="col-md-6" style="text-align: left;">
		    <center>
		        <ul class="pagination" id="pagination"></ul>
		    </center>
      </div>
      <div class="col-md-6">
		   <center>
		   <h4 style="font-weight: bold;"> 
    <?php
include('conexion.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM inscripciones"));
    echo "Registros Totales: $numeroRegistros";
        ?>
        </h4>
          </center>
      </div>
   
  
    <!-- MODAL PARA EL REGISTRO-->

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
