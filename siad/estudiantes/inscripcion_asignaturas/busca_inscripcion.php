<?php
include('../../admin/conexion.php');
session_start();
$codigo = $_SESSION["Codigo"];
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT inscripciones.id_inscripcion as id, inscripciones.fecha_inscripcion as fecha, inscripciones.matricula
as observaciones, materias.nombre_materia as Asignatura, carreras.nombre_carrera as Carrera, periodos.descripcion_periodo
as Year,  semestre.nombre_semestre as Cuatrimestre
FROM inscripciones INNER JOIN materias ON  materias.id_materia =  inscripciones.id_materia
                             INNER JOIN alumnos ON  inscripciones.matricula =  alumnos.matricula
               INNER JOIN carreras ON  materias.id_carrera =  carreras.id_carrera
               INNER JOIN semestre ON  materias.semestre =  semestre.id_semestre
               INNER JOIN periodos ON  inscripciones.id_periodo =  periodos.id_periodo
WHERE alumnos.matricula = '$codigo' and materias.nombre_materia LIKE '%$dato%'  ORDER BY inscripciones.id_inscripcion ASC");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        
                        <th width="15%">Asignatura</th> 
                        <th width="10%">Carrera</th>
                        <th width="15%">Perido</th>
                        <th width="15%">Semestre</th>  
                        <th width="15%">Fecha</th> 
                        <th width="20%">Matricula</th>                 
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Carrera'].'</td>
                          <td>'.$registro2['Year'].'</td>
                          <td>'.$registro2['Cuatrimestre'].'</td>
                          <td>'.$registro2['fecha'].'</td> 
                          <td>'.$registro2['observaciones'].'</td>              
                           <td>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="../admin/images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>                                        
                             </td>
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="10">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>
