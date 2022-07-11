<?php
include('../../admin/conexion.php');
session_start();
$codigo = $_SESSION["Codigo"];
	$paginaActual = $_POST['partida'];

    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM asignaciones"));
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
  	$registro =mysqli_query($conexion,"SELECT calificaciones.id_materia as id_materia, materias.clave_materia as clave,materias.nombre_materia as materia, tipos_evaluaciones.descripcion_evaluacion as Unidad,
calificaciones.id_periodo as periodo,  concat (profesores.nombre_maestro, ' ' ,profesores.apellido_p) as Docente,
calificaciones.calificacion as Puntaje,  calificaciones.fecha_calificacion as Fecha
FROM calificaciones INNER JOIN alumnos ON  calificaciones.matricula =  alumnos.matricula
                  INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
          INNER JOIN profesores ON  calificaciones.id_profesor =  profesores.id_profesor
INNER JOIN tipos_evaluaciones ON  calificaciones.id_tipoe =  tipos_evaluaciones.id_tipoe
where alumnos.matricula = '$codigo' LIMIT $limit, $nroLotes ");
  	 
						echo '<table class="table table-striped table-condensed table-hover table-responsive">
        				<tr>           
                        
						<th width="10%">Clave</th> 
                        <th width="20%">Materia</th>
                        <th width="8%">Unidad</th>
                        <th width="12%">Period</th> 
                        <th width="25%">Docente</th> 
                        <th width="10%">Puntaje</th>  
                        <th width="16%">Fecha Evaluacion</th>

                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
	  
                         
                            
                           <td>'.$registro2['clave'].'</td>
                          <td>'.$registro2['materia'].'</td>
                          <td>'.$registro2['Unidad'].'</td>
                          <td>'.$registro2['periodo'].'</td>
                          <td>'.$registro2['Docente'].'</td> 
                          <td>'.$registro2['Puntaje'].'</td>
                          <td>'.$registro2['Fecha'].'</td>
                </tr>';	
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>