<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT * FROM grupos WHERE clave_grupo LIKE '%$dato%' ORDER BY id_grupo ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                          <th width="40%">Numero de Grupo</th>
                        <th width="40%">Nombre de Grupo</th>   
						<th width="40%">Estado</th>
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                             <td>'.$registro2['id_grupo'].'</td>
                      <td>'.$registro2['clave_grupo'].'</td>
					   <td>'.$registro2['estado_grupo'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_grupo'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_grupo'].');">
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
