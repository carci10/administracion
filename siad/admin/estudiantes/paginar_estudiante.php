<?php
include('../conexion.php');
	$paginaActual = $_POST['partida'];

    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM alumnos"));
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
  	$registro = mysqli_query($conexion,"SELECT * FROM alumnos where id_situacion=1 order by(matricula) LIMIT $limit, $nroLotes ");
  	$tabla = $tabla.'<table class="table table-striped table-condensed table-hover table-responsive">
			                <tr>
                          <th width="10%">Matricula</th>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellido P</th>
                         <th width="10%">Apellido M</th>
                         
                         <th width="10%">Celular</th>
                         <th width="10%">Semestre</th>
                         <th width="10%">Carrera</th>
                         <th width="5%">Especialidad</th>
                        <th width="5%">CURP</th>
						<th width="5%">Situacion</th>
						<th width="5%">Año_Egreso</th>
                        <th width="10%">Opciones</th>
                     </tr>';		
          	while($registro2 = mysqli_fetch_array($registro)){
      $tabla = $tabla.'<tr>
                          <td>'.$registro2['matricula'].'</td>
                          <td>'.$registro2['nombre_alumno'].'</td>
                          <td>'.$registro2['apellido_p'].'</td>
                          <td>'.$registro2['apellido_m'].'</td>
                       
                          <td>'.$registro2['telefono_movil'].'</td>
                          <td>'.$registro2['semestre_actual'].'</td>
                          <td>'.$registro2['id_carrera'].'</td>
                          <td>'.$registro2['id_especialidad'].'</td>
                          <td>'.$registro2['curp'].'</td>
						  <td>'.$registro2['id_situacion'].'</td>
						  <td>'.$registro2['ano_e'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['matricula'].');">
                          <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['matricula'].');">
                          <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                      </tr>';		
	}
        
    $tabla = $tabla.'</table>';
    $array = array(0 => $tabla,
    			   1 => $lista);

    echo json_encode($array);
?>