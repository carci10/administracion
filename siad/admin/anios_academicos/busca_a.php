<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT especialidad.id_especialidad, especialidad.nombre_especialidad,carreras.nombre_carrera FROM especialidad
inner join carreras on especialidad.id_carrera=carreras.id_carrera  WHERE nombre_especialidad LIKE '%$dato%' ORDER BY id_especialidad ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                       <th width="40%">Especialidad</th>  
					   <th width="40%">Carrera</th>
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                              <td>'.$registro2['nombre_especialidad'].'</td>
							  <td>'.$registro2['nombre_carrera'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_especialidad'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_especialidad'].');">
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
