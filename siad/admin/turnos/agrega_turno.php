
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre_o = $_POST['nombre'];
$nombre =ucwords(strtolower($nombre_o));

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO turnos (nombre_turno) VALUES('$nombre')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE turnos SET nombre_turno = '$nombre' where id_turno = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT * FROM turnos ORDER BY id_turno ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                        <th width="80%">Nombre del Turno</th>           
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                      <td>'.$registro2['nombre_turno'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_turno'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_turno'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>