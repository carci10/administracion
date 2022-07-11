<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT  imparte.id_imparte AS id, imparte.id_profesor AS Asignacion,concat(profesores.nombre_maestro,' ',profesores.apellido_p,'',profesores.apellido_m) as Docente,
             materias.nombre_materia AS Asignatura, grupos.id_grupo AS Grupo, periodos.id_periodo AS periodo, tipo_inscripcion.descripcion AS tipo, estado
FROM       imparte
            INNER JOIN profesores ON imparte.id_profesor = profesores.id_profesor
            INNER JOIN materias ON imparte.id_materia = materias.id_materia
            INNER JOIN grupos ON imparte.id_grupo = grupos.id_grupo
            INNER JOIN periodos ON imparte.id_periodo = periodos.id_periodo
            INNER JOIN tipo_inscripcion ON imparte.id_tipoi = tipo_inscripcion.id_tipoi
     where imparte.id_periodo=periodos.id_periodo and periodos.estado_perido=1 and
		   nombre_maestro LIKE '%$dato%' or apellido_p like '%$dato%' or apellido_m like '%dato%' ORDER BY imparte.id_grupo ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                        <th width="10%">N°</th>  
                        <th width="5%">Docente</th> 
                        <th width="25%">Nombre Doc</th>
                        <th width="17%">Asignatura</th>
                        <th width="8%">Grupo</th>        
                        <th width="15%">Periodo</th>
                        <th width="5%">Tipo</th>
                        <th width="5%">Estado</th>
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                          <td>'.$registro2['id'].'</td>
                          <td>'.$registro2['Asignacion'].'</td>
                          <td>'.$registro2['Docente'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Grupo'].'</td>
                          <td>'.$registro2['periodo'].'</td>
                           <td>'.$registro2['tipo'].'</td>
                          <td>'.$registro2['estado'].'</td>
		                       <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
		                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
		                          <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
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
