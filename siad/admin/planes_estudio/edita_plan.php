<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM planes WHERE id_plan = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['descripcion_plan'], 
				1 => $valores2['id_carrera'], 
                2 => $valores2['creditos_totales'], 
				); 

echo json_encode($datos);
?>