<?php
session_start();
include '../admin/conexion.php';
error_reporting(0);
if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 2) {
            $user = $_SESSION['NombreUsuario'];
            $codigo = $_SESSION["Codigo"];
        ?>
           <?php 
		 $fecha=date('d-m-Y');
		 
		 $consulta4="select * from periodos where estado_perido=1";
		 $periodo=mysqli_query($conexion,$consulta4);
		
		 
		 
		  $consulta_ext="select * from periodos where estado_perido=1";
		 $per=mysqli_query($conexion,$consulta_ext);
		 $id_per=mysqli_fetch_assoc($per);
		 $id_periodo=$id_per[id_periodo];
		 
		 $consulta5="select id_tipoe, descripcion_evaluacion from tipos_evaluaciones,periodos where tipos_evaluaciones.id_tipoe=periodos.parcial_actual and periodos.estado_perido=1";
		 $parcial=mysqli_query($conexion,$consulta5);
		 $profesor=mysqli_query($conexion, "select * from profesores where id_profesor=$codigo");
		 
		 
          $consulta2="SELECT materias.id_materia as id, materias.nombre_materia as asignatura
                      FROM imparte INNER JOIN materias ON  imparte.id_materia = materias.id_materia
                      where id_profesor = '$codigo' and imparte.estado = 1 and imparte.id_tipoi=2 and imparte.id_periodo=$id_periodo";
          $asignatura=mysqli_query($conexion,$consulta2);
          
          $consulta3="SELECT alumnos.matricula, concat (alumnos.nombre_alumno,' ',alumnos.apellido_p,' ',alumnos.apellido_m) as estudiante, inscripciones.id_tipoi
                  FROM inscripciones INNER JOIN materias ON  materias.id_materia =  materias.id_materia
                  INNER JOIN imparte ON  imparte.id_materia =  inscripciones.id_materia
          INNER JOIN alumnos ON  inscripciones.matricula =  alumnos.matricula
          where imparte.id_profesor = '$codigo' and imparte.estado = 1 and inscripciones.id_tipoi=2 and inscripciones.id_periodo = $id_periodo group by alumnos.matricula";
          $estudiante=mysqli_query($conexion,$consulta3);
		 $tipo_inscripcion=mysqli_query($conexion,$consulta3);

                  $consultaD=mysqli_query($conexion,"select Foto from usuarios where Codigo = '$codigo'");                  
                while($filas=mysqli_fetch_array($consultaD)){
                         $foto=$filas['Foto'];                           
                 }

                 $consultaD2 = mysqli_query($conexion,"select concat (nombre_maestro, ' ', apellido_p) as Docente from profesores where id_profesor = '$codigo'"); 
                 while($filas2=mysqli_fetch_array($consultaD2)){
                         $docente=$filas2['Docente'];                           
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="evaluacion_estudiantes/myjava.js"></script>

</head>
<body>
           <?php
        include ('menu_inicio_docente.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logoSIAD.png" width="80" height="80" class="img-responsive"></div>
             <div class="col-md-6">         
               
                <img src="../imagenes/banerDoc.png" class="img-responsive">
                     
             </div>
               <div class="col-md-3">
                    <img class="img-responsive img-circle" src="<?php echo $foto ?>" width="50px" height="50px">
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $docente ?></h5>
               </div> 

            </div>
             <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="docentes.php">Docentes</a></li>
                    <li class="active">Evaluacion de Estudiantes</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
        <!-- Content Row -->
<?php //include('otros/menuAdministrador.php') ?>
        <div class="row">
            <!-- Content Column -->
                        <?php
    include('../docentes/menu_docente.php');
 ?>
            <div class="col-md-9">
                <div class="containe">
      <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div>
            <center><h4><b>Evaluacion de Estudiantes</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		               <div class="col-md-1"><h4>Buscar:</h4></div>
		               
                   <div class="col-md-5">
		                  <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escriba el numero de matricula">
		               </div>
		               	<div class="col-md-6">
		                  <button id="nuevo-producto" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Nueva Evaluacion</button> 
		                  <a href="reportes/Reporte_Asignaciones.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i>  Exportar a PDF</button> </a>
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
    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM calificaciones where id_profesor ='$codigo' and id_tipoi>1"));
    echo "Registros Totales: $numeroRegistros";
        ?>
        </h4>
          </center>
      </div>
   
  
    <!-- MODAL PARA EL REGISTRO-->
    <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background:#337ab7; text-align: center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
              <i class='glyphicon glyphicon-pencil'></i>&nbsp;&nbsp;Evaluacion a los Estudiantes</b></h4>
            </div>
            <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
            <div class="modal-body">

            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:5px;"/>

                 <div class="form-group"> <label for="codigo" class="col-md-4 control-label">Proceso:</label>
				<div class="col-md-8"><input type="text" class="form-control" required readonly id="pro" name="pro" hidden="true" /></div>
			   </div> <br>
                    
   
                    <div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Estudiantes:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="estudiante" name="estudiante">
                                    <?php 
                          while($fila=mysqli_fetch_row($estudiante)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>

                      <div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Asignatura:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="asignatura" name="asignatura">
                                   <?php 
                          while($fila=mysqli_fetch_row($asignatura)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				 <div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Periodo:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="periodo" name="periodo">
                                   <?php 
                          while($fila=mysqli_fetch_row($periodo)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				
								 <div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Parcial:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="parcial" name="parcial">
                                   <?php 
                          while($fila=mysqli_fetch_row($parcial)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				
				<div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Profesor:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="profesor" name="profesor">
                                   <?php 
                          while($fila=mysqli_fetch_row($profesor)){
                          echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
				
				<div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Tipo Evaluacion:</label>
                         <div class="col-md-8">
                       <select class="form-control" id="tipo_e" name="tipo_e">
                                   <?php 
                          while($fila=mysqli_fetch_row($tipo_inscripcion)){
                          echo "<option value='".$fila['2']."'>".$fila['2']."</option>";
                          }
                          ?>
                      </select>
                       </div>
                    </div> <br>
                    
                <div class="form-group"> <label for="carnet" class="col-md-4 control-label">Fecha:</label>
                     <div class="col-md-8">
                     <input type="text" class="form-control" id="unidad" name="fecha" required maxlength="50" value="<?php echo($fecha); ?>">
                     </div>
               </div> <br>

               

<div class="form-group"> <label for="carnet" class="col-md-4 control-label">Puntaje:</label>
        <div class="col-md-8"><input type="number" class="form-control" name="puntaje" id="puntaje" required maxlength="3"></div>
         </div> <br>
                    <div class="form-group"> <label for="cuatrimestre" class="col-md-4 control-label">Observaciones:</label>
                     <select class="form-control" id="observacion" name="observacion">
						 <option value="A">A</option>
						 <option value="NA">NA</option>
						 <option value="NP">NP</option>
						 </select>
             
               </div> <br>
                    

                 <div id="mensaje"></div>           
             </div>         
            <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
          </div>
        </div>
      </div>
            </div>
        </div>
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
