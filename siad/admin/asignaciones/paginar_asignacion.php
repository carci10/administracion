<?php
include('../conexion.php');
			//OBTIENE PERIODO ACTUAL
				$obtiene_periodo=mysqli_query($conexion,"select id_periodo from periodos where estado_perido=1");
				$periodo=mysqli_fetch_assoc($obtiene_periodo);
				$periodo_actual=$periodo['id_periodo'];
			//FIN PERIODO ACTUAL


	$paginaActual = $_POST['partida'];

    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM imparte where id_periodo=$periodo_actual"));
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
  	$registro = mysqli_query($conexion,"SELECT  imparte.id_imparte AS id, imparte.id_profesor AS Asignacion,concat(profesores.nombre_maestro,' ',profesores.apellido_p,'',profesores.apellido_m) as Docente,
             materias.nombre_materia AS Asignatura, grupos.id_grupo AS Grupo, periodos.id_periodo AS periodo, tipo_inscripcion.descripcion AS tipo, estado
FROM       imparte
            INNER JOIN profesores ON imparte.id_profesor = profesores.id_profesor
            INNER JOIN materias ON imparte.id_materia = materias.id_materia
            INNER JOIN grupos ON imparte.id_grupo = grupos.id_grupo
            INNER JOIN periodos ON imparte.id_periodo = periodos.id_periodo
            INNER JOIN tipo_inscripcion ON imparte.id_tipoi = tipo_inscripcion.id_tipoi
where imparte.id_periodo=periodos.id_periodo and periodos.estado_perido=1");
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                        <th width="10%">N°</th>  
                        <th width="5%">Docente</th> 
                        <th width="25%">Nombre Doc</th>
                        <th width="17%">Asignatura</th>
                        <th width="8%">Grupo</th>        
                        <th width="15%">Periodo</th>
                        <th width="5%">Tipo</th>
                        <th width="5%">Estado</th>
                        <th width="10%">Opciones</th>
                   </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                          <td>'.$registro2['id'].'</td>
                          <td>'.$registro2['Asignacion'].'</td>
                          <td>'.$registro2['Docente'].'</td>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Grupo'].'</td>
                          <td>'.$registro2['periodo'].'</td>
                           <td>'.$registro2['tipo'].'</td>
                          <td>'.$registro2['estado'].'</td>
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