<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM materias WHERE id_materia = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['nombre_materia'], 
				1 => $valores2['id_carrera'], 
                 2 => $valores2['id_plan'], 
                 3 => $valores2['semestre'],
	 4 => $valores2['clave_materia_reticula'],
	 5 => $valores2['clave_materia'],
				); 

echo json_encode($datos);
?>