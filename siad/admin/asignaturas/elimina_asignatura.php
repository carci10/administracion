<?php
include('../conexion.php');

$id = $_POST['id'];
if (!mysqli_query($conexion,"DELETE FROM materias WHERE id_materia = '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}

$registro = mysqli_query($conexion,"SELECT materias.id_materia as id, materias.nombre_materia as Asignatura, carreras.nombre_carrera as carrera, planes.descripcion_plan as plan, 
materias.semestre as semestre FROM materias 
                                 INNER JOIN carreras ON  materias.id_carrera =  carreras.id_carrera  
                                 
                                 INNER JOIN planes ON  materias.id_plan =  planes.id_plan
  ORDER BY materias.semestre ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                         <th width="20%">Asignatura</th>  
                        <th width="20%">Carrera</th> 
                        <th width="20%">Plan</th>
                        <th width="20%">Semestre</th>       
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                  <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['carrera'].'</td>
                          <td>'.$registro2['plan'].'</td>
                          <td>'.$registro2['semestre'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
			         	</tr>';
	}
echo '</table>';
?>