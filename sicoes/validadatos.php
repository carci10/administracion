<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.Estilo1 {
	color: #006699;
	font-weight: bold;
}
-->
</style>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','170','src','flash/encabezado','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encabezado' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
    <param name="movie" value="flash/encabezado.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
  </object></noscript>
</p>
<p align="center" class="Estilo1">Verifica que los datos del alumno correspondan con los datos de la credencial del mismo</p>
<p align="center" class="Estilo1"> de no ser as&iacute; la ficha es del que aparece en los datos</p>
<table border=1 bordercolor=blue align=center>
<script language="php">
$matricula=$_REQUEST["caja"];
echo "<tr><td>";
echo"<b>Matricula:".$matricula;
$conect=odbc_connect("sicoes","","");
$consulta="select Nombres,ApellidoP,ApellidoM,Curp from Alumnos where Matrícula='$matricula';";
$resultado=odbc_do($conect,$consulta);
while ($arreglo=odbc_fetch_array($resultado))
{

echo "<tr>";
$dato=$arreglo['Nombres'];
$dato1=$arreglo['ApellidoP'];
$dato2=$arreglo['ApellidoM'];
$dato3=$arreglo['Curp'];
echo "<td>";
echo "<b>Nombres</b>:".$dato;
echo "</td>";
echo "</tr>";

echo "<tr><td>";
echo "<b>Apellido Paterno</b>:".$dato1;
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Apellido Materno:</b>".$dato2;
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Curp:</b>".$dato3;
echo "</td></tr>";

}
echo "</tr>";
</script>
</table>
<p align="center"><a href="valdatos.php"><img src="images/otraFicha.jpg" width="73" height="74" border="0" /></a><a href="destroy.php"><img src="images/salir.jpg" alt="" width="63" height="64" border="0" /></a></p>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','100','src','flash/piepag','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/piepag' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object></noscript>
</p>
