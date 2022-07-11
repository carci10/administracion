<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT planes.id_plan as id, planes.descripcion_plan as Plan1, carreras.nombre_carrera as Carrera, creditos_totales FROM planes INNER JOIN carreras ON  planes.id_carrera =  carreras.id_carrera   WHERE planes.descripcion_plan LIKE '%$dato%' ORDER BY planes.id_plan ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                      <th width="20%">Descripcion</th>  
                        <th width="20%">Carrera</th> 
                        <th width="20%"># Creditos</th>        
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                              <td>'.$registro2['Plan1'].'</td>
		                      <td>'.$registro2['Carrera'].'</td>
		                      <td>'.$registro2['creditos_totales'].'</td>
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
