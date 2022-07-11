<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM carreras WHERE id_carrera = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['nombre_carrera'], 
				); 
echo json_encode($datos);
?>