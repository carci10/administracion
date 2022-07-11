<?php
include('../conexion.php');
	$paginaActual = $_POST['partida'];

    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM materias"));
    $nroLotes = 10;
    $nroPaginas = ceil($numeroRegistros/$nroLotes);
    $lista = '';
    $tabla = '';

    if($paginaActual > 1){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual-1).');">Anterior</a></li>';
    }
    for($i=1; $i<=$nroPaginas; $i++){
        if($i == $paginaActual){
            $lista = $lista.'<li class="active"><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }else{
            $lista = $lista.'<li><a href="javascript:pagination('.$i.');">'.$i.'</a></li>';
        }
    }
    if($paginaActual < $nroPaginas){
        $lista = $lista.'<li><a href="javascript:pagination('.($paginaActual+1).');">Siguiente</a></li>';

    }
  
  	if($paginaActual <= 1){
  		$limit = 0;
  	}else{
  		$limit = $nroLotes*($paginaActual-1);
  	}
  	$registro = mysqli_query($conexion,"SELECT materias.id_materia as id, materias.nombre_materia as Asignatura, carreras.nombre_carrera as carrera, planes.descripcion_plan as plan, 
materias.semestre as semestre, clave_materia, creditos_teoricos,creditos_practicos, id_espacialidad FROM materias 
                                 INNER JOIN carreras ON  materias.id_carrera =  carreras.id_carrera 

                                 
                                 INNER JOIN planes ON  materias.id_plan =  planes.id_plan
  LIMIT $limit, $nroLotes ");
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                        <th width="25%">Asignatura</th>  
                        <th width="20%">Carrera</th> 
                        <th width="15%">Plan</th>
                        <th width="5%">Semestre</th>
						 <th width="10%">Clave-M</th>
						  <th width="5%">CT</th>
						   <th width="5%">CP</th>
						    <th width="10%">Especialidad</th>
                        <th width="20%">Opciones</th>
                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                       <td>'.$registro2['Asignatura'].'</td>
		                      <td>'.$registro2['carrera'].'</td>
		                      <td>'.$registro2['plan'].'</td>
		                      <td>'.$registro2['semestre'].'</td>
							  <td>'.$registro2['clave_materia'].'</td>
							  <td>'.$registro2['creditos_teoricos'].'</td>
							  <td>'.$registro2['creditos_practicos'].'</td>
							  <td>'.$registro2['id_espacialidad'].'</td>
		                       <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
		                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
		                          <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                </tr>';	
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>