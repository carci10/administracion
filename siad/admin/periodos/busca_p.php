<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT periodos.*,tipos_evaluaciones.descripcion_evaluacion FROM periodos
inner join tipos_evaluaciones on periodos.parcial_actual= tipos_evaluaciones.id_tipoe WHERE descripcion_periodo LIKE '%$dato%' ORDER BY id_periodo ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                       <th width="30%">Descripcion de Periodo</th>
					   <th width="30%">Evaluacion Activa</th>
					   <th width="20%">Estado actual</th>
                        <th width="20%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
                              <td>'.$registro2['descripcion_periodo'].'</td>
							  <td>'.$registro2['descripcion_evaluacion'].'</td>
							  <td>'.$registro2['estado_perido'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_periodo'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_periodo'].');">
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
