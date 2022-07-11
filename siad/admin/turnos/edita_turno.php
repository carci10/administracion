<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM turnos WHERE id_turno = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['nombre_turno'], 
				); 
echo json_encode($datos);
?>