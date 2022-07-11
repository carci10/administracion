<?php
//session_start();
include('conexion.php');

$cons = mysqli_query($conexion,"SELECT * FROM periodos where estado_perido=1");

while ( $arre = mysqli_fetch_assoc($cons)) {

	$parciale = $arre['parcial_actual'];
	$periodo = $arre['id_periodo'];
					
	//session_register("parci");
	$_SESSION['parci']=$parciale;
	//session_register("pari");
	$_SESSION['peri']=$periodo;
	}
	global $mivariable;
	
?>