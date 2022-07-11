<CENTER>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object><br>
Datos anteriores
<table border="1"><tr bgcolor=green><td>Matricula</td><td>Usuario</td><td>Contra</td></tr>









<?php
//CONTROL: CONEXIONES
require('clases/conexion.php');

$matri=$_REQUEST["caja1"];
$usua=$_REQUEST["caja2"];
$contra=$_REQUEST["caja3"];

$cone=$sicoes->query("SELECT Matricula,Usuario,Contra FROM sicoes.usuarios WHERE Matricula='$matri'");
while($arreglo=$cone->fetch_array(MYSQLI_ASSOC)){
	echo "<td>".$arreglo['Matricula']."</td>";
	echo "<td>".$arreglo['Usuario']."</td>";
	echo "<td>".$arreglo['Contra']."</td></tr>";
}
echo"</table>";

$sicoes->query("UPDATE sicoes.usuarios SET Usuario='$usua',Contra='$contra' where Matricula='$matri'");
echo"Datos nuevos<br><table border=1><tr bgcolor=green><td>Matricula</td><td>Usuario</td><td>Contra</td></tr>";

$cone=$sicoes->query("SELECT Matricula,Usuario,Contra FROM sicoes.usuarios WHERE Matricula='$matri'");
while($arreglo=$cone->fetch_array(MYSQLI_ASSOC)){
	echo "<td>".$arreglo['Matricula']."</td>";
	echo "<td>".$arreglo['Usuario']."</td>";
	echo "<td>".$arreglo['Contra']."</td></tr>";
}
echo"</table>";
?>









<a href="usuarios.php">Regresar</a><br>
 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
      <param name="movie" value="flash/piepag.swf" />
      <param name="quality" value="high" />
      <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
    </object>