<?php
include('../../admin/conexion.php');
session_start();
$codigo = $_SESSION["Codigo"];
$dato = $_POST['dato'];
include('leerparcial.php');
$periodo_actual=$_SESSION['peri'];

$registro = mysqli_query($conexion,"SELECT calificaciones.id_materia as id_materia, materias.clave_materia as clave,materias.nombre_materia as materia, tipos_evaluaciones.descripcion_evaluacion as Unidad,
calificaciones.id_periodo as periodo,  concat (profesores.nombre_maestro, ' ' ,profesores.apellido_p) as Docente,
calificaciones.calificacion as Puntaje,  calificaciones.fecha_calificacion as Fecha
FROM calificaciones INNER JOIN alumnos ON  calificaciones.matricula =  alumnos.matricula
                  INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
          INNER JOIN profesores ON  calificaciones.id_profesor =  profesores.id_profesor
INNER JOIN tipos_evaluaciones ON  calificaciones.id_tipoe =  tipos_evaluaciones.id_tipoe
where alumnos.matricula = '$codigo' and materias.nombre_materia LIKE '%$dato%' and calificaciones.id_periodo=$periodo_actual ORDER BY calificaciones.id_periodo ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                      <th width="10%">Clave</th> 
                        <th width="20%">Materia</th>
                        <th width="8%">Unidad</th>
                        <th width="12%">Period</th> 
                        <th width="25%">Docente</th> 
                        <th width="10%">Puntaje</th>  
                        <th width="16%">Fecha Evaluacion</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['clave'].'</td>
                          <td>'.$registro2['materia'].'</td>
                          <td>'.$registro2['Unidad'].'</td>
                          <td>'.$registro2['periodo'].'</td>
                          <td>'.$registro2['Docente'].'</td> 
                          <td>'.$registro2['Puntaje'].'</td>
                          <td>'.$registro2['Fecha'].'</td>               
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="7">No se encontraron Calificaciones</td>
      			</tr>';
      }
      echo '</table>';
?>
