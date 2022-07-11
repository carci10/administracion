
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$plan = $_POST['nombre'];
$creditos = $_POST['creditos'];
$ano = $_POST['ano'];
$carrera = $_POST['carrera'];


switch($proceso){
	case 'Registro':
		$result=mysqli_query($conexion,"INSERT INTO planes(descripcion_plan,creditos_totales, ano_plan,id_carrera) VALUES('$plan',$creditos,$ano,$carrera)") or die(mysql_error());
		
	break;
	case 'Edicion': 
		mysqli_query($conexion,"UPDATE planes SET descripcion_plan = '$plan',creditos_totales='$creditos',ano_plan='$ano', id_carrera = '$carrera' where id_plan = '$id'")   or die(mysql_error());
	break;
   }
    $registro = mysqli_query($conexion,"SELECT planes.id_plan as id, planes.descripcion_plan as Plan1, carreras.nombre_carrera as Carrera, creditos_totales FROM planes INNER JOIN carreras ON  planes.id_carrera =  carreras.id_carrera ORDER BY planes.id_plan ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                         <th width="40%">Descripcion</th>  
                        <th width="20%">Carrera</th> 
                        <th width="20%"> # Creditos</th>        
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