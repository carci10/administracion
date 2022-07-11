<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object>









<?php
//CONTROL: CONEXIONES
require('clases/conexion.php');

$clavprof=$_REQUEST["caja1"];
$clavmat=$_REQUEST["caja2"];
$grup=$_REQUEST["caja3"];
$par=$_REQUEST["caja4"];
$per=$_REQUEST["caja5"];


//mysql_connect("localhost","tesi","sicoes");
//mysql_db_query("sicoes","delete from folioacta where Maestro='$clavprof' and Materia='$clavmat' and Grupo='$grup' and Parcial='$par' and Periodo='$per'");

if(!$sicoes->query("DELETE FROM sicoes.folioacta WHERE Maestro='$clavprof' AND Materia='$clavmat' AND Grupo='$grup' AND Parcial='$par' AND Periodo='$per'")){
	echo"<br><br><br><br><font size=8 color=green>ERROR: DATOS INCOMPLETOS E/O INCORRECTOS</font><br><br><br><br>";
}else{
	echo"<br><br><br><br><font size=8 color=green>HA SIDO LIBERADO</font><br><br><br><br>";
}

?>









<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf" />
  <param name="quality" value="high" />
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object></center>
