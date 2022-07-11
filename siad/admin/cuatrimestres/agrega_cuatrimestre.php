
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre_o = $_POST['nombre'];
$nombre =ucwords(strtolower($nombre_o));

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO semestre (nombre_semestre) VALUES('$nombre')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE semestre SET nombre_semestre = '$nombre' where id_semestre = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT * FROM semestre ORDER BY id_semestre ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                        <th width="80%">Nombre de Cuatrimestre</th>           
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                      <td>'.$registro2['nombre_semestre'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_semestre'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_semestre'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>