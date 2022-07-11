<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM alumnos WHERE matricula = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['matricula'], 
				1 => $valores2['nombre_alumno'], 
			    2 => $valores2['apellido_p'], 
				3 => $valores2['apellido_m'], 
				4 => $valores2['correo'], 
				5 => $valores2['telefono_movil'], 
			    6 => $valores2['telefono_casa'], 
				7 => $valores2['id_carrera'],
				8 => $valores2['id_especialidad'],
				9 => $valores2['curp'],
				); 
echo json_encode($datos);
?>