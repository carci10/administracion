<?php
// Connection variables
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "tesi_admin";		  // database username
$dbpass	= "control_escolar";		     // database password
$dbname	= "control_escolar";    // database name
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//mysql_select_db('control_escolar',$conexion);
mysqli_set_charset($conexion,"utf8");
?>
