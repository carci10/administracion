
<?php

include('../../admin/conexion.php');
  session_start();
  $codigo = $_SESSION["Codigo"];

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$estudiante = $_POST['estudiante'];
$asignatura = $_POST['asignatura'];
$parcial = $_POST['parcial'];
$tipo_e = 4;
$profesor=$_POST['profesor'];
$tipo_i=2;
$periodo=$_POST['periodo'];
$puntaje = $_POST['puntaje'];

$fechaEvaluacion = date("Y-m-d");
$descripcion = $_POST['observacion'];

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO calificaciones (matricula, id_materia, id_periodo, id_tipoe, id_profesor, id_tipoi, calificacion, fecha_calificacion,observacion_calificacion) VALUES('$estudiante', '$asignatura','$periodo','$tipo_e','$profesor','$tipo_i','$puntaje','$fechaEvaluacion','$descripcion')");
		
		echo"INSERT INTO calificaciones (matricula, id_materia, id_periodo, id_tipoe, id_profesor, id_tipoi, calificacion, fecha_calificacion,observacion_calificacion) VALUES('$estudiante', '$asignatura','$periodo','$tipo_e','$profesor','$tipo_i','$puntaje','$fechaEvaluacion','$descripcion')";
		
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE evaluaciones SET Descripcion = '$descripcion', idEstudiante = '$idEstudiante',idAsignatura = '$asignatura',Unidad = '$unidad',Tarea = '$tarea',Puntaje = '$puntaje',FechaEvaluacion = '$fechaEvaluacion' where idEvaluacion = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT calificaciones.observacion_calificacion as Evaluacion, alumnos.matricula as carnet, concat (alumnos.nombre_alumno,' ', alumnos.apellido_p) as Estudiante,  materias.nombre_materia as Asignatura,
calificaciones.calificacion as Unidad,  concat (profesores.nombre_maestro,' ',profesores.apellido_p) as Docente, calificaciones.calificacion as Puntaje, calificaciones.fecha_calificacion as Fecha, periodos.descripcion_periodo,tipos_evaluaciones.descripcion_evaluacion
FROM profesores INNER JOIN calificaciones ON  profesores.id_profesor =  calificaciones.id_profesor
              INNER JOIN alumnos ON  calificaciones.matricula =  alumnos.matricula
        INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
		INNER JOIN periodos ON  calificaciones.id_periodo =  periodos.id_periodo
		INNER JOIN tipos_evaluaciones ON  calificaciones.id_tipoe =  tipos_evaluaciones.id_tipoe
where  profesores.id_profesor = '$codigo' and calificaciones.id_tipoi=2 ORDER BY calificaciones.fecha_calificacion ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>    
                        <th width="10%">Evaluacion</th> 
                        <th width="10%">Carnet</th>
                        <th width="15%">Estudiante</th>
                        <th width="15%">Asignatura</th> 
                        <th width="10%">Calificacion</th> 
                        <th width="10%">Fecha Captura</th>  
                        <th width="10%">Docente</th>
                        <th width="10%">Periodo</th>                  
                        <th width="10%">Tipo Evaluacion</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                         <td>'.$registro2['Evaluacion'].'</td>
                          <td>'.$registro2['carnet'].'</td>
                          <td>'.$registro2['Estudiante'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                             
                          <td>'.$registro2['Puntaje'].'</td>
                          <td>'.$registro2['Fecha'].'</td>               
                            <td>'.$registro2['Docente'].'</td>
						   <td>'.$registro2['descripcion_periodo'].'</td>               
                            <td>'.$registro2['descripcion_evaluacion'].'</td>
						   <td>
                                                                      
                             </td>
                </tr>';
  }
	
   echo '</table>';
?>