<CENTER>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object>









<?php
//CONTROL: CONEXIONES
require('clases/conexion.php');

$matri=$_REQUEST["caja1"];
$usu=$_REQUEST["caja2"];
$con=$_REQUEST["caja3"];
$tipo=$_REQUEST["caja4"];
$nom=$_REQUEST["caja5"];

if (mysqli_fetch_row($sicoes->query("SELECT * FROM sicoes.usuarios WHERE Matricula = '$matri' AND Usuario = '$usu'")) == 1 ) {
	echo "<center>La matricula y/o usuario Ya existen por favor de consultarlos</center>";
	echo "<a href=usuarios.php>Regresar</a>";
}else{
	if (!$sicoes->query("INSERT INTO sicoes.usuarios VALUES('$matri','$usu','$con','$tipo','$nom')")) {
		echo "<center>Error: Alguno de los datos no se completo o son incorrectos </center>";
		echo "<a href=usuarios.php>Regresar</a>";
	}else{
		echo "<center> Los datos fueron insertados correctamente</center>";
		echo "<a href=usuarios.php>Regresar</a>";
	}
}
?>








<p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
      <param name="movie" value="flash/piepag.swf" />
      <param name="quality" value="high" />
      <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
    </object>
  </p>





