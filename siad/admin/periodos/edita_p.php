<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM periodos WHERE id_periodo = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['descripcion_periodo'], 
				); 
echo json_encode($datos);
?>