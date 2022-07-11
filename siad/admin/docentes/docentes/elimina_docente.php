<?php
include('../conexion.php');

$id = $_POST['id'];

if (!mysqli_query($conexion,"DELETE FROM profesores WHERE id_profesor = '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}
mysqli_query($conexion,"delete from usuarios where Codigo=$id");

$registro = mysqli_query($conexion,"SELECT * FROM profesores ORDER BY id_profesor ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellido P</th>
                         <th width="10%">Apellido M</th>
                         <th width="10%">Correo</th>
                         <th width="10%">Grado</th>
                         <th width="15%">Carrera</th>
                         <th width="10%">Clave</th>
                         <th width="15%">Fecha Nac</th>            
                        <th width="10%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		        echo '<tr>
		                  <td>'.$registro2['nombre_maestro'].'</td>
                          <td>'.$registro2['apellido_p'].'</td>
                          <td>'.$registro2['apellido_m'].'</td>
                          <td>'.$registro2['correo_profesor'].'</td>
                          <td>'.$registro2['grado_academico'].'</td>
                          <td>'.$registro2['carrera_profesor'].'</td>
                          <td>'.$registro2['clave_profesor'].'</td>
                          <td>'.$registro2['fecha_nac'].'</td>
                            
						<td> <a href="javascript:editarRegistro('.$registro2['id_profesor'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id_profesor'].');">
                              <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                        </td>
			         	</tr>';
	}
echo '</table>';
?>