<script language="php">
session_start();

</script>

<style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo2 {color: #000000; font-weight: bold; }
.Estilo3 {color: #333333}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
    <param name="movie" value="flash/encabezado.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
  </object>
</p>


<p align="center"><font color="#FF0000"> NO OLVIDES IMPRIMIR TU FICHA DE INSCRIPCIÓN EN LA PARTE DE ABAJO DE ESTA PAGINA</p></font>
  
<script language="php">
//session_start();
include ('clases/conexion.php');
include ('clases/leerparcial.php');

$matricula=$_SESSION['matricula'];
$conect=odbc_connect("localhost","tesi","sicoesnvo");
$mat1=$_REQUEST["1"];
$mat2=$_REQUEST["2"];
$mat3=$_REQUEST["3"];
$mat4=$_REQUEST["4"];
$mat5=$_REQUEST["5"];
$mat6=$_REQUEST["6"];
$mat7=$_REQUEST["7"];
session_register('materia1');
session_register('materia2');
session_register('materia3');
session_register('materia4');
session_register('materia5');
session_register('materia6');
session_register('materia7');
$_SESSION['materia1']=$mat1;
$_SESSION['materia2']=$mat2;
$_SESSION['materia3']=$mat3;
$_SESSION['materia4']=$mat4;
$_SESSION['materia5']=$mat5;
$_SESSION['materia6']=$mat6;
$_SESSION['materia7']=$mat7;

mysql_connect("localhost","tesi","sicoes");
echo "<table border=1 align=center>";
print("<tr><td><center><b><font color=black>MATRICULA:".$matricula."<BR></font></tr></td></table>");
echo "<center><b>MATERIAS SELECCIONADAS<br>";
echo "<table  bordercolor=green  align=center>";
echo "<tr bgcolor=green align=center><font color=green><td>CLAVE_MATERIA</td><td>NOMBRE_MATERIA</td><td>CREDITOS</td></tr>";
if ($mat1 <> "" )
{
$resasig=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat1'");
$arreglo= $resasig->fetch_array(MYSQLI_ASSOC);
$nom=$arreglo["Nombre"];
$cred=$arreglo["Cred"];
echo "<tr><td align=center>".$mat1."</td><td>".$nom."</td><td align=center>".$cred."</td></tr>";
}
if ($mat2 <> "" )
{

$resasig1=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat2'");
$arreglo1= $resasig1->fetch_array(MYSQLI_ASSOC);
$nom1=$arreglo1["Nombre"];
$cred1=$arreglo1["Cred"];
//echo $mat2.$nom1.$cred1."<br>";
echo "<tr><td align=center>".$mat2."</td><td>".$nom1."</td><td align=center>".$cred1."</td></tr>";

}
if ($mat3 <> "" )
{

$resasig2=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat3'");
$arreglo2= $resasig2->fetch_array(MYSQLI_ASSOC);
$nom2=$arreglo2["Nombre"];
$cred2=$arreglo2["Cred"];
//echo $mat3.$nom2.$cred2."<br>";
echo "<tr><td align=center>".$mat3."</td><td>".$nom2."</td><td align=center>".$cred2."</td></tr>";
}
if ($mat4 <> "" )
{

$resasig3=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat4'");
$arreglo3= $resasig3->fetch_array(MYSQLI_ASSOC);
$nom3=$arreglo3["Nombre"];
$cred3=$arreglo3["Cred"];
//echo $mat4.$nom3.$cred3."<br>";
echo "<tr><td align=center>".$mat4."</td><td>".$nom3."</td><td align=center>".$cred3."</td></tr>";
}
if ($mat5 <> "" )
{
$resasig4=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat5'");
$arreglo4= $resasig4->fetch_array(MYSQLI_ASSOC);
$nom4=$arreglo4["Nombre"];
$cred4=$arreglo4["Cred"];
//echo $mat5.$nom4.$cred4."<br>";
echo "<tr><td align=center>".$mat5."</td><td>".$nom4."</td><td align=center>".$cred4."</td></tr>";
}
if ($mat6 <> "" )
{
$resasig5=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat6'");
$arreglo5= $resasig5->fetch_array(MYSQLI_ASSOC);
$nom5=$arreglo5["Nombre"];
$cred5=$arreglo5["Cred"];
//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat6."</td><td>".$nom5."</td><td align=center>".$cred5."</td></tr>";
}
if ($mat7 <> "" )
{
$resasig6=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat7'");
$arreglo6= $resasig6->fetch_array(MYSQLI_ASSOC);
$nom6=$arreglo6["Nombre"];
$cred6=$arreglo6["Cred"];
//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat7."</td><td>".$nom6."</td><td align=center>".$cred6."</td></tr>";
}


echo "</table><br>";

  /*AQUI EMPIEZA $consulbeca="select Beca from Alumnos where Matrícula='$matricula';";//selecciona los grupos del alumno
  $resulbeca=odbc_do($conect,$consulbeca);
  $arrebec=odbc_fetch_array($resulbeca);
  $beca=$arrebec["Beca"];
  session_register("beca");//se genera la var de sessio de beca para el reporte
  $_SESSION['beca']=$beca;// se le asigna el valor a la variable de session para el reporte
  if ($beca=="SB" || $beca=="")//valida si tiene beca o no el alumno para calcular la colegiatura y aplicar descuento
  {
  $consulprom="select Defin from Kardex where Matricula='$matricula';";//selecciona las calificaciones definitivas del alumno
  $resulprom=odbc_do($conect,$consulprom);
  while ($arreprom=odbc_fetch_array($resulprom))//aqui se clacula el promedio
  {
  $cont=$cont+1;//se genera un contador para ver el numero de materias que se tienen
  $prom=$arreprom["Defin"];//se extrae la primer calificación del ciclo
  $prom2=$prom2+$prom;//se suman las calificaciones a lo largo del ciclo
  }
  $prome=$prom2/$cont;//se clacula el promedio definitivo dividiendo la suma de calificaciones entre las materias
  $promdef=substr($prome,0,3);
  echo "El alumno no tiene beca tiene un promedio de".$promdef."<br><br>
";   
session_register("promdef");//se enera la var de sssion del promedio para el reporte
$_SESSION['promdef']=$promdef;// se le asigna valor a la var de session para el reporte
  if ($promdef>=8.0 && $promdef<=8.99)//CALCULO DE LA COLEGIATURA DEL 33%
  {
  echo"El alumno tiene un apoyo del 33% en el pago de su colegiatura<BR><br>
";
  echo "
  <center>
</p>
<table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$136.50</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$1,555.50</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$1,692.00</td></tr></table>
";

	}
	if ($promdef>=9.0 && $promdef<=9.49)//CALCULO DE LA COLOGIATURA DEL 50%
    {
       echo"El alumno tiene un apoyo del 50% en el pago de su colegiatura<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$136.50</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$1,216.50</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$1,352.50</td></tr></table>
";

	}
   	if ($promdef>=9.5 && $promdef<=10)//CALCULO DE LA COLEGIATURA DEL 100%
    {
       echo"El alumno tiene un apoyo del 100% en el pago de su colegiatura<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$136.50</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$0.0</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$136.50</td></tr></table>
";

	}
	if ($promdef<=7.99)//CALCULO DE LA COLOGIATURA DEL 0%
    {
       echo"El ALUMNO NO CUENTA CON APOYO EN SU COLEGIATURA POR SU PROMEDIO<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$136.50</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td><td>$2,431.50</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$2,567.50</td></tr></table>
";
	}


}
else//SI EL ALUMNO NO TIENEN BECA
{
echo "El alumno cuenta con algun tipo de beca por lo cual no se aplica el descuento de colegiatura por promedio" ;
echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table border=1 bordercolor=green>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$136.50</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td><td>$2,431.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$2,567.50</td></tr></table>
<p>";
  }
//mysql_db_query("sicoes","insert into inscripcion values('$matricula',1)");


  odbc_close($conect);
echo "<script language=javascript>alert('Verifica que las materias que se muestran sean correctas asi como que el calculo las cuotas que debes cubrir sea correcto e imprime tu tira de materias de incripción en el boton de ficha de inscripción')</script>";
  */</script>
<p align="center" class="Estilo2">Verifica que las materias sean las seleccionadas, previamente</p>

<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>
<table border=1 bordercolor=green>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>INSCRIPCION SEMESTRAL</td>
<td>$151.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td>
<td>$2,687.00</td></tr>
<tr><td>SEGURO CONTRA ACCIDENTES </td>
<td>PENDIENTE</td>
</tr>
<tr><td>TOTAL A PAGAR</td>
<td>$2,838.00</td>
</tr>
</table>
<BR />
<p align="center" class="Estilo2"><font color="#FF0000" >IMPORTANTE PRESENTAR TUS FORMATOS AL MOMENTO DE REALIZAR TU INSCRIPCIÓN!!!!!!</font></p>
<table border=1 bordercolor=green>
<tr bgcolor=green align=center>
<td bgcolor=green colspan="2">
<span class=Estilo1>FORMATOS</span>
</td>
</tr>
<tr>
<td>
FORMATO ESTUDIO SOCIOECONÓMICO
</td>
<td>
<a href="http://escolar.tesi.org.mx/archivos/ESTUDIO.pdf" target="_blank"><p align="center" class="Estilo2">Aqui</p></a>
</td>
</tr>
<tr>
<td>
PROTESTA INSTITUCIONAL
</td>
<td>
<a href="http://escolar.tesi.org.mx/archivos/PROTESTA.pdf" target="_blank"><p align="center" class="Estilo2">Aqui</p></a>
</td>
</tr>
<tr>
<td>
EVALUACIÓN SATISFACCIÓN AL CLIENTE
</td>
<td>
<a href="http://escolar.tesi.org.mx/archivos/EVALUACIÓN.pdf" target="_blank"><p align="center" class="Estilo2">Aqui</p></a>
</td>
</tr>
</table>

<p align="center"><a href="certnvoing.php" target="_blank"><img src="images/ficha.jpg" width="71" height="76" border="0" /></a><a href="index.php"><img src="images/salirnvoing.png" width="56" height="70" /></a></p>
<p align="center"><strong>Al imprimir tu comprobante no olvides por seguridad, cerrar  tu sesi&oacute;n.</strong></p>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
