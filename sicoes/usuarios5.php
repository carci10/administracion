<CENTER>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object>
<br /><strong>El alumno debera de colocar el usuario y contraseña tal y como se muestra en esta tabla</strong>
<table  border="1"><tr bgcolor=green><td>Usuario</td><td>Contraseña</td><td>Nombre</td></tr>









<?php
//CONTROL: CONEXIONES
require('clases/conexion.php');

$userlogin=$_REQUEST["caja1"];
$cone=$sicoes->query("SELECT Usuario,Contra,Nombre from sicoes.usuarios where Usuario='$userlogin'");

while($arreglo=$cone->fetch_array(MYSQLI_ASSOC)){
	echo "<tr><td>".$arreglo['Usuario']."</td>";
	echo "<td>".$arreglo['Contra']."</td>";
	echo "<td>".$arreglo['Nombre']."</td></tr>";
}
echo"</table>";
?>








<br /><a href="usuarios.php">Regresar</a>
 <p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
      <param name="movie" value="flash/piepag.swf" />
      <param name="quality" value="high" />
      <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
    </object>
  </p>



