
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$nombre = $_POST['periodo'];
$evaluacion = $_POST['evaluacion'];
$estado = $_POST['estado'];

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO periodos (descripcion_periodo,parcial_actual,estado_perido) VALUES('$nombre','$evaluacion','$estado')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE periodos SET descripcion_periodo = '$nombre', parcial_actual='$evaluacion',estado_perido=$estado where id_periodo = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT * FROM periodos ORDER BY id_periodo ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                        <th width="30%">Descripcion de Periodo</th>
					   <th width="30%">Evaluacion Activa</th>
					   <th width="20%">Estado actual</th>
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                     <td>'.$registro2['descripcion_periodo'].'</td>
							  <td>'.$registro2['descripcion_periodo'].'</td>
							  <td>'.$registro2['estado_perido'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['id_periodo'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['id_periodo'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>