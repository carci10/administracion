<?php
include('../conexion.php');

$id = $_POST['id'];

if (!mysqli_query($conexion,"DELETE FROM tipos_evaluaciones WHERE id_tipoe = '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}

$registro = mysqli_query($conexion,"SELECT id_tipoe as id,descripcion_evaluacion
FROM tipos_evaluaciones  ORDER BY id_tipoe ASC");


echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                        <th width="40%">Numero de Asignacion</th>  
                        <th width="40%">Tipo de Evaluacion</th>        
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                     <td>'.$registro2['id'].'</td>
                          <td>'.$registro2['descripcion_evaluacion'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
			         	</tr>';
	}
echo '</table>';
?>