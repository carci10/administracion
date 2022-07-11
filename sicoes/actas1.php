<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p><img src="images/altacalif.jpg" width="746" height="76" /></p>









<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];

//session_register("parci");
$_SESSION['parci']=$parciale;

$group=mysqli_query($conexion,"SELECT id_grupo,id_materia FROM imparte WHERE id_maestro='$usuario' AND id_periodo='$periodo'");
//$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");

echo "<table border=0><tr bgcolor=green><td><font color='white'><div align=center>GRUPO</td><td><font color='white'><div align=center>MATERIA</td><td><font color='white'><div align=center>NOM_MATERIA</td><td><font color='white'><div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=actas2.php>";

while ($arregroup=$group->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
	echo "<tr><td><div align=center>".$arregroup['id_grupo']."</td>";
	echo "<td><div align=center>".$arregroup['id_materia']."</td>";
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
?>










<br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>

