<script src="DWConfiguration/ActiveContent/IncludeFiles/AC_RunActiveContent.js" type="text/javascript"></script>
<p><center>
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encaprof','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encaprof' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object></noscript>
</p>
<p><img src="images/conscalif.jpg" width="734" height="75" /></p>









<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
$conect=odbc_connect("sicoes","","");

$group=$sicoes2->query("SELECT GRUPO,Materia FROM sicoes2.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");
$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");

echo "<form method=post action=consactas2.php>";
echo "Parcial <select name=parcial><option value=$parciale>$parciale</option></select><br>";
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>GRUPO</td><td><font color='white'>
  <div align=center>MATERIA</td><td><font color='white'>
  <div align=cent4er>NOMMATERIA</td><td><font color='white'>
  <div align=center>SELECCIONAR</td></tr></font>";

while ($arregroup=$group->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<tr><td><div align=center>".$arregroup['GRUPO']."</td>";
  echo "<td><div align=center>".$arregroup['Materia']."</td>";
  $mat=$arregroup['Materia'];//Variable que almacena la clave de la materia 
  $grupo=$arregroup['GRUPO'];//Variable que almacena el grupo

  $resmateria=$sicoes2->query("SELECT Nombre FROM Materias WHERE MATERIA = '$mat' ");
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

  $resmateria2=$sicoesnvo->query("SELECT Nombre FROM Materias WHERE MATERIA ='$mat'");
  $arrenommat2=$resmateria2->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
  $bd=2;
  echo "<td><div align=center>".$arrenommat2['Nombre']."</td>";
  echo "<td><div align=center><input type=radio name=materia value='$grupo$mat$bd'></td></tr>";
}

echo "</table><br>";
echo "<input type=submit value=Enviar><br>";
?>










<br />
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','100','src','flash/piepag','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/piepag' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object></noscript>
</p>