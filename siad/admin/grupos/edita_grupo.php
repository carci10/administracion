<?php
include('../conexion.php');
$id = $_POST['id'];
$valores = mysqli_query($conexion,"SELECT * FROM grupos WHERE id_grupo = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['clave_grupo'],  
				); 
echo json_encode($datos);
?>