<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<img src="images/genacta1.jpg" width="787" height="80" /><br />









<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
$_SESSION['par']=$periodo;

//$consgrup="select GRUPO,Materia from Horarios where Maestro='$usuario' and Periodo='$periodo'"; //Selección de grupo del maestro
$group=$sicoes2->query("SELECT GRUPO,Materia FROM sicoes2.Horarios WHERE Maestro= '$usuario' AND Periodo='$periodo' ");
$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro= '$usuario' AND Periodo='$periodo' ");

echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>GRUPO</td><td><font color='white'>
  <div align=center>MATERIA</td><td><font color='white'>
  <div align=center>NOMMATERIA</td><td><font color='white'>
  <div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=certificadoacta2.php>";
echo"<br><center>Selecciona el parcial:<select name=periodo>
      <option value=$parciale>$parciale</option>
</select><br><br>";

while ($arregroup=$group->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<tr><td><div align=center>".$arregroup['GRUPO']."</td>";
  echo "<td><div align=center>".$arregroup['Materia']."</td>";
  $mat=$arregroup['Materia'];//Variable que almacena la clave de la materia 
  $grupo=$arregroup['GRUPO'];//Variable que almacena el grupo
  //$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
  $resmateria=$sicoes2->query("SELECT Nombre,Carrera FROM sicoes2.Materias WHERE MATERIA= '$mat' ");
  $arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia

  $bd=1;
  echo "<td><div align=center>".$arrenommat['Nombre']."</td>";
  echo "<td><div align=center><input type=radio name=materia value='$grupo$mat$bd'></td></tr>";
  $resprofe=$sicoes2->query("SELECT * FROM sicoes2.Maestros WHERE MAESTRO = '$usuario' ");
}

while ($arregroup=$group2->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<tr><td><div align=center>".$arregroup['GRUPO']."</td>";
  echo "<td><div align=center>".$arregroup['Materia']."</td>";
  $mat=$arregroup['Materia'];//Variable que almacena la clave de la materia 
  $grupo=$arregroup['GRUPO'];//Variable que almacena el grupo
  //$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
  $resmateria=$sicoesnvo->query("SELECT Nombre,Carrera FROM sicoesnvo.Materias WHERE MATERIA = '$mat' ");
  $arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia

  $bd=2;
  echo "<td><div align=center>".$arrenommat['Nombre']."</td>";
  echo "<td><div align=center><input type=radio name=materia value='$grupo$mat$bd'></td></tr>";
  $resprofe=$sicoesnvo->query("SELECT * FROM sicoesnvo.Maestros WHERE MAESTRO = '$usuario' ");
}

echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";
//$conprofe="select * from Maestros where MAESTRO='$usuario';";

$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);
session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['Nombres']." ".$arreprofe['Apellido P']." ".$arreprofe['Apellido M'];
session_register('clave');
$_SESSION['clave']=$usuario;

?>









<br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
