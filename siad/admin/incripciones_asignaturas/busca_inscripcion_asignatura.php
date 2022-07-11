<?php
include('../conexion.php');
$dato = $_POST['dato'];

$registro = mysqli_query($conexion,"SELECT inscripciones.id_inscripcion as Codigo, materias.nombre_materia as Asignatura, concat(alumnos.nombre_alumno, ' ' ,alumnos.apellido_p) as Estudiantes,
inscripciones.fecha_inscripcion as fecha, periodos.descripcion_periodo as periodo,grupos.clave_grupo as grupo, tipo_inscripcion.descripcion as tipo
FROM inscripciones
INNER JOIN periodos ON inscripciones.id_periodo=periodos.id_periodo
INNER JOIN materias ON inscripciones.id_materia=materias.id_materia
INNER JOIN alumnos  ON inscripciones.matricula=alumnos.matricula
INNER JOIN tipo_inscripcion  ON inscripciones.id_tipoi=tipo_inscripcion.id_tipoi
INNER JOIN grupos  ON inscripciones.id_grupo=grupos.id_grupo
where alumnos.nombre_alumno like '%".$_POST['txtbuscar']."%'");

       echo '<table class="table table-striped table-condensed table-hover table-responsive">
        	<tr>
                      	<th width="5%">Codigo</th>  
                        <th width="15%">Alumno</th>        
                        <th width="20%">Asignatura</th>
                        <th width="10%">Grupo</th>  
                        <th width="10%">Periodo</th>        
                        <th width="20%">Tipo</th>
						<th width="60%">Fecha</th>
			</tr>';
      if(mysql_num_rows($registro)>0){
	     while($registro2 = mysql_fetch_array($registro)){
		      echo '<tr>
                              <td>'.$registro['Codigo'].'</td>
                              <td>'.$registro['Estudiantes'].'</td>
                              <td>'.$registro['Asignatura'].'</td>
                              <td>'.$registro['grupo'].'</td>
                              <td>'.$registro['periodo'].'</td>
                              <td>'.$registro['tipo'].'</td>
							  <td>'.$registro['fecha'].'</td>
                       </tr>';
      	}
      }else{
      	echo '<tr>
      				<td colspan="10">No se encontraron resultados</td>
      			</tr>';
      }
      echo '</table>';
?>
