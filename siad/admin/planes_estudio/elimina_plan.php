<?php
include('../conexion.php');

$id = $_POST['id'];

if (!mysqli_query($conexion,"DELETE FROM planes WHERE id_plan= '$id'")) {
  echo '<script> alert("Este registro no se puede borrar porque esta siendo utilizado por el sistema.");</script>';
}

$registro = mysqli_query($conexion,"SELECT planes.id_plan as id, planes.descripcion_plan as Plan1, carreras.nombre_carrera as Carrera, creditos_totales FROM planes INNER JOIN carreras ON  planes.id_carrera =  carreras.id_carrera ORDER BY planes.id_plan ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	          <tr>
                         <th width="20%">Descripcion</th>  
                        <th width="20%">Carrera</th> 
                        <th width="20%"># Creditos</th>        
                        <th width="20%">Opciones</th>
                   </tr>';
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
echo '</table>';
?>