<html>
	<head>
	<meta charset="UTF-8">
	</head>
<body>	
<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$clave = $_POST['clave'];
$nombre_o = $_POST['nombre'];
$nombre =ucwords(strtolower($nombre_o));
$apellido_p_o = $_POST['apellido_p'];
$apellido_p =ucwords(strtolower($apellido_p_o));
$apellido_m_o = $_POST['apellido_m'];
$apellido_m =ucwords(strtolower($apellido_m_o));
$fecha_nac = $_POST['fecha_nac'];
$correo = $_POST['correo'];
$grado_o = $_POST['grado'];
$grado =ucwords(strtolower($grado_o));
$carrera_o = $_POST['carrera'];
$carrera =ucwords(strtolower($carrera_o));
$foto = "images/fotos_perfil/perfil.jpg";

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO profesores (clave_profesor, nombre_maestro, apellido_p, apellido_m, fecha_nac, correo_profesor, grado_academico, carrera_profesor) VALUES('$clave','$nombre','$apellido_p','$apellido_m','$fecha_nac','$correo','$grado','$carrera')");

  $consulta=mysqli_query($conexion,"SELECT id_profesor from profesores where clave_profesor = '$clave' and correo_profesor = '$correo'");              
                           while($filas=mysqli_fetch_array($consulta)){
                                 $codigo_docente=$filas['id_profesor'];                           
                 }
	if($codigo_docente!='')	
     mysqli_query($conexion,"INSERT INTO usuarios (NombreUsuario, PassUsuario, NivelUsuario, Codigo) VALUES('$correo','$clave','2','$codigo_docente')");

	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE profesores SET clave_profesor = '$clave',nombre_profesor='$nombre', apellido_p = '$apellido_p', apellido_m='$apellido_m',fecha_nac ='$fecha_nac', correo_profesor = '$correo', grado_academico = '$grado', carrera_profesor = '$carrera' where id_profesor = '$id'");

    mysqli_query($conexion,"UPDATE usuarios SET NombreUsuario = '$correo', PassUsuario = '$clave' where Codigo = '$id'");
    
	break;
   }
    $registro = mysqli_query($conexion,"SELECT * FROM profesores ORDER BY id_profesor ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                         <th width="10%">Nombres</th>
                         <th width="10%">Apellido P</th>
                         <th width="10%">Apellido M</th>
                         <th width="10%">Correo</th>
                         <th width="10%">Grado</th>
                         <th width="15%">Carrera</th>
                         <th width="10%">Clave</th>
                         <th width="15%">Fecha Nac</th>            
                        <th width="10%">Opciones</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                          <td>'.$registro2['nombre_maestro'].'</td>
                          <td>'.$registro2['apellido_p'].'</td>
                          <td>'.$registro2['apellido_m'].'</td>
                           <td>'.$registro2['correo_profesor'].'</td>
                          <td>'.$registro2['grado_academico'].'</td>
                          <td>'.$registro2['carrera_profesor'].'</td>
                          <td>'.$registro2['clave_profesor'].'</td>
                          <td>'.$registro2['fecha_nac'].'</td>
                   <td> <a href="javascript:editarRegistro('.$registro2['id_profesor'].');">
                  <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                  <a href="javascript:eliminarRegistro('.$registro2['id_profesor'].');">
                  <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>
	</body>
</html>