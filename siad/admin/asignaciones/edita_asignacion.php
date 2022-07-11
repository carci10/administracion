<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM imparte WHERE id_imparte = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['id'], 
				1 => $valores2['Asignacion'], 
		        2 => $valores2['Docente'], 
		        3 => $valores2['id_grupo'], 
		        4 => $valores2['Grupo'], 
		        5 => $valores2['periodo'],
				6 => $valores2['tipo'],
				7 => $valores2['estado'],
		 
				); 

echo json_encode($datos);
?>