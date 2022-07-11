<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM especialidad WHERE id_especialidad = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['nombre_especialidad'], 
				); 
echo json_encode($datos);
?>