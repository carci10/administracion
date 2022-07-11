<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM tipos_evaluaciones WHERE id_tipoe = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['descripcion_evaluacion'], 
				); 

echo json_encode($datos);
?>