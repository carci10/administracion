
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$numero = $_POST['numero'];


switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO grupos (clave_grupo) VALUES('$numero')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE grupos SET clave_grupo = '$numero' where id_grupo = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT * FROM grupos ORDER BY id_grupo ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
			 			<th width="40%">Numero de Grupo</th>
                         <th width="40%">Nombre de Grupo</th>            
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['id_grupo'].'</td>
                      <td>'.$registro2['clave_grupo'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_grupo'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_grupo'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>