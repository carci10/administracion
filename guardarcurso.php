<?php
	include('conexion.php');
	$clave_materia  		= $_POST['clave_a'];
	$plan    = $_POST['plan'];
	$clave_mat_ret      = $_POST['clave_mat_ret'];
	$nombre      = $_POST['nombre'];
$carrera      = $_POST['carrera'];
$semestre      = $_POST['semestre'];
$ct      = $_POST['ct'];
$cp      = $_POST['cp'];
//$ct=$ct+$cp;
$tipo      = $_POST['tipo'];

	
	$sql = "INSERT INTO materia (clave_amteria,pertenece_plan_estudio,clave_materia_reticula,nombre_materia,carrera_m,semestre_m,creditos_teoricos,creditos_practicos,tipo_m) VALUES ('".$clave_materia."','".$plan."','".$clave_mat_ret."','".$nombre."','".$carrera."','".$semestre."','".$ct."','".$cp."','".$tipo."')";
	$ingresa_materia = mysql_query($sql,$conexion);
	if($ingresa_materia)
	echo "<script type=\"text/javascript\">alert('La asignatura: $nombre fue almacenada de forma exitosa ');
	
	window.location='nuevocurso.php';
	</script>";
	else
		echo"<script type=\"text/javascript\">alert('La asignatura: $nombre No fue almacenada --Verifique-- '); 
		window.location='nuevocurso.php';
		
		</script>";
 ?>