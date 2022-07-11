<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
/*
//$conect=odbc_connect("sicoes","","");
$c=new conect;
$c->conecta();
$c->conecodbc();
$c->conecodbc2();
$conect=$c->conect;
$conect2=$c->conect2;
*/

session_register("parci");
$_SESSION['parci']=$parciale;
$periodo=$ejem;  //"14-2";
echo $periodo;//DEDO ZONKED
echo $parciale;

$group=$sicoes2->query("SELECT GRUPO,Materia FROM sicoes2.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");
$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");

echo "<table border=0><tr bgcolor=green><td><font color='white'><div align=center>GRUPO</td><td><font color='white'><div align=center>MATERIA</td><td><font color='white'><div align=center>NOMMATERIA</td><td><font color='white'><div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=actas2.php>";
/*
while ($arregroup=$group->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
	echo "<tr><td><div align=center>".$arregroup['GRUPO']."</td>";
	echo "<td><div align=center>".$arregroup['Materia']."</td>";
	$mat=$arregroup['Materia'];//Variable que almacena la clave de la materia 
	$grupo=$arregroup['GRUPO'];//Variable que almacena el grupo
	//$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
	$resmateria=$sicoes2->query("SELECT Nombre,Carrera FROM sicoes2.Materias WHERE MATERIA='$mat'");
	$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
	$bd=1;
	echo "<td><div align=center>".$arrenommat['Nombre']."</td>";
	echo "<td><div align=center><input type=radio name=materia value='$grupo$mat$bd'></td></tr>";
}

while ($arregroup2=$group2->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
	echo "<tr><td><div align=center>".$arregroup2['GRUPO']."</td>";
	echo "<td><div align=center>".$arregroup2['Materia']."</td>";
	$mat=$arregroup2['Materia'];//Variable que almacena la clave de la materia 
	$grupo=$arregroup2['GRUPO'];//Variable que almacena el grupo
	//$consmateria2="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
	$resmateria2=$sicoesnvo->query("SELECT Nombre,Carrera FROM sicoesnvo.Materias WHERE MATERIA='$mat'");
	$arrenommat2=$resmateria2->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
	$bd=2;
	echo "<td><div align=center>".$arrenommat2['Nombre']."</td>";
	echo "<td><div align=center><input type=radio name=materia value='$grupo$mat$bd'></td></tr>";
}
echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";

//Consulta profe..
//$conprofe="select * from Maestros where MAESTRO='$usuario';";
$resprofe=$sicoes2->query("SELECT * FROM sicoes2.Maestros WHERE MAESTRO='$usuario'");
$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);

session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['Nombres']." ".$arreprofe['ApellidoP']." ".$arreprofe['ApellidoM'];

session_register('clave');
$_SESSION['clave']=$usuario;

if($_SESSION['nomprof']==""){
	//$conprofe="select * from Maestros where MAESTRO='$usuario';";
	$resprofe=$sicoesnvo->query("SELECT * FROM Maestros WHERE MAESTRO = '$usuario' ");
	$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);
	session_register('nomprof');
	$_SESSION['nomprof']=$arreprofe['Nombres']." ".$arreprofe['ApellidoP']." ".$arreprofe['ApellidoM'];
}

*/
?>
