<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT * FROM alumnos WHERE matricula LIKE '%$dato%' ORDER BY matricula ASC");
       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                      <th width="10%">Matricula</th>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellido P</th>
                         <th width="10%">Apellido M</th>
                         
                         <th width="10%">Celular</th>
                         <th width="10%">Semestre</th>
                         <th width="10%">Carrera</th>
                         <th width="5%">Especialidad</th>
                        <th width="5%">CURP</th>
						<th width="5%">Situacion</th>
						<th width="5%">Año_Egreso</th>
                        <th width="10%">Opciones</th>
            </tr>';
      if(mysqli_num_rows($registro)>0){
	     while($registro2 = mysqli_fetch_array($registro)){
		      echo '<tr>
				         <td>'.$registro2['matricula'].'</td>
                          <td>'.$registro2['nombre_alumno'].'</td>
                          <td>'.$registro2['apellido_p'].'</td>
                          <td>'.$registro2['apellido_m'].'</td>
                       
                          <td>'.$registro2['telefono_movil'].'</td>
                          <td>'.$registro2['semestre_actual'].'</td>
                          <td>'.$registro2['id_carrera'].'</td>
                          <td>'.$registro2['id_especialidad'].'</td>
                          <td>'.$registro2['curp'].'</td>
						  <td>'.$registro2['id_situacion'].'</td>
						  <td>'.$registro2['ano_e'].'</td>

                  <td> <a href="javascript:editarRegistro('.$registro2['matricula'].');">
                  <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['matricula'].');">
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
