<?php
include('../conexion.php');

$id = $_POST['id'];
echo $id;
if (!mysqli_query($conexion,"DELETE FROM alumnos WHERE matricula = '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}

$registro = mysqli_query($conexion,"SELECT * FROM alumnos ORDER BY matricula ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                            <th width="10%">Matricula</th>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellidos</th>
                         <th width="10%">Cedula</th>
                         <th width="10%">Correo</th>
                         <th width="10%">Celular</th>
                         <th width="10%">Telefono</th>
                         <th width="10%">Carrera</th>
                         <th width="5%">Especialidad</th>
                        <th width="5%">CURP</th>             
                        <th width="10%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                  <<td>'.$registro2['matricula'].'</td>
                          <td>'.$registro2['nombre_alumno'].'</td>
                          <td>'.$registro2['apellido_p'].'</td>
                          <td>'.$registro2['apellido_m'].'</td>
                           <td>'.$registro2['correo'].'</td>
                          <td>'.$registro2['telefono_movil'].'</td>
                          <td>'.$registro2['telefono_casa'].'</td>
                          <td>'.$registro2['id_carrera'].'</td>
                          <td>'.$registro2['id_especialidad'].'</td>
                          <td>'.$registro2['curp'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['matricula'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['matricula'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
			         	</tr>';
	}
echo '</table>';
?>