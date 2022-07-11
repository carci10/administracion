<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM profesores WHERE id_profesor = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array (
				 
				0 => $valores2['clave_profesor'], 
			    1 => $valores2['nombre_maestro'], 
				2 => $valores2['apellido_p'], 
				3 => $valores2['apellido_m'], 
				4 => $valores2['fecha_nac'], 
			    5 => $valores2['correo_profesor'], 
				6 => $valores2['grado_academico'],
				7 => $valores2['carrera_profesor'],
				); 
echo json_encode($datos);
?>