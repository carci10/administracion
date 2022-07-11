<script language="php">
session_start();
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo2 {
	color: #009900;
	font-size: 16px;
}
-->
</style>



<div align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encaalumno','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encaalumno' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaalumno.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</noscript></div>
<div align="center">
  <p class="Estilo2"><strong>VERIFICA QUE LAS CALIFICACIONES Y LOS DATOS QUE APARECEN EN ESTA </strong></p>
  <p class="Estilo2"><strong>PAGINA CORRESPONDAN CON  TUS CALIFICACIONES OBTENIDAS EN TU ULTIMO PERIODO &quot;08-2</strong>&quot;</p>
</div>

    
<script language="php">
//session_start();
$conect=odbc_connect("sicoes","","");
$matricula=$_SESSION['matricula'];
$nombre=$_SESSION['nombres'];
$app=$_SESSION['apellidop'];
$apm=$_SESSION['apellidom'];
//$semestre=$_SESSION['semestre'];
$carr=$_SESSION['carrera'];

$cons2="select Grupo from Kardex where Matricula='$matricula' ORDER BY Grupo ;";
//$consulta2="select Grupo from TiraMat where Matricula='$matricula';";//selecciona los grupos del alumno
$res2=odbc_do($conect,$cons2);
while ($arre2=odbc_fetch_array($res2))
{
$sem=$arre2['Grupo'];//saca los semestres del del alumno
//print ($semestre);
}
$ulsem= substr($sem,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
$semes=$ulsem;
//$semact=$ulsem + 1;//OBTIENE EL SEMESTRE A CURSAR
$semestre="0".$semes;
//$_SESSION['semestre']=$ulsem;


if ($carr==01)
{
$carrera="Lic. en Administración";
}
if ($carr==07)
{
$carrera="Ing.Sistemas Computacionales ";
}
if ($carr==36)
{
$carrera="Lic. en Informática ";
}
if ($carr==20)
{
$carrera="Ing. Electrónica ";
}
session_register("carr");
$_SESSION['carr']=$carrera;
//$matricula="200722801";

$periodo="09-1";
$tipo="ORD";
$fecha=date("d-m-o");

$consulta="select MATERIA,Defin from Kardex where Matricula='$matricula' and PeriodoDef='$periodo';";//selecciona los grupos del alumno aquie esta el problema
//$consulta="select MATERIA,Defin from Calif where Matricula='$matricula' and Per='$periodo' and Tipo='$tipo';";//selecciona los grupos del alumno aquie esta el problema
$resultado=odbc_do($conect,$consulta);

echo "<table align=center>";

echo "<tr><td><strong>NOMBRE:</strong>"."".$nombre."</td><td>". $app."</td>"."<td>". $apm."</td><td>    </td><td><strong>CARRERA:</strong>".$carrera."</td></tr>";
echo "<tr><td><strong>NO. DE Matricula:</strong>".$matricula."</td>><td></td><td></td><td></td><td><strong>SEMESTRE:</strong>".$semestre."</td></tr>";
echo "<tr><td><strong>PERIODO:</strong>".$periodo."</td><td></td><td></td><td></td><td><strong>FECHA:</strong>".$fecha."</td></tr>";
echo "</table><br><br>";

echo "<table border=0 align=center>";
echo"<tr bgcolor=green><td>CLAVE</TD><TD>MATERIA</TD><TD>CRED</TD><TD>ORD</TD><TD>EXT</TD><td>REC</td><td>INT</td><td>SUF</td>";
while ($arreglo=odbc_fetch_array($resultado))

{
echo "<tr>";
$dato=$arreglo['MATERIA'];
$dato1=$arreglo['Defin'];

echo "<td>".$dato."<br></td>";
$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';";

$resultado2=odbc_do($conect,$consulta2);
      $arreglo1=odbc_fetch_array($resultado2);
      $dat=$arreglo1['Nombre'];
      $dat1=$arreglo1['Cred'];

      echo "<td>".$dat."<br></td>";
      echo "<td>".$dat1."<br></td>";



$cont=$cont+1;
$prom=$prom+$dato1;

$consulta3="select Extraordinario,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
$resultado3=odbc_do($conect,$consulta3);
$arreglo2=odbc_fetch_array($resultado3);
$dato2=$arreglo2['Extraordinario'];
$dato3=$arreglo2['Recursamiento'];
$dato4=$arreglo2['Intensivo'];
$dato5=$arreglo2['Suficiencia'];
if($dato2==0)
{
$dato2="";
}
else
{
$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
$resultadoa=odbc_do($conect,$consultaa);
$arregloa=odbc_fetch_array($resultadoa);
$dato1=$arregloa['Defin'];
}

if($dato3==0)
{
$dato3=NULL;
}
if($dato4==0)
{
$dato4=NULL;
}
if($dato5==0)
{
$dato5=NULL;
}

echo "<td>".$dato1."<br></td>";
echo "<td>".$dato2."<br></td>";
echo "<td>".$dato3."<br></td>";
echo "<td>".$dato4."<br></td>";
echo "<td>".$dato5."<br></td>";


echo"</tr>";
}
$prome=$prom/$cont;//se clacula el promedio definitivo dividiendo la suma de calificaciones entre las materias
$promdef=substr($prome,0,3);
session_register("promedio");
$_SESSION['promedio']=$promdef;
echo "</table><br>";
echo "<table border=0 align=center><tr><td><strong>PROMEDIO:</strong>".$promdef."</td></tr></table>";
odbc_close($conect);
    </script>

        </p>
    <p align="center"><span class="Estilo1">CUALQUIER ANOMALIA FAVOR DE REPORTARLA A CONTROL ESCOLAR</span></p>
</div>
<div align="center">
  <p><a href="certificadoboleta.php" target="_blank"><img src="images/imorimir.jpg" alt="" width="89" height="62" border="0" /></a></p>
  <p><strong>Al imprimir tu boleta y si no realizaras otra operaci&oacute;n</strong></p>
  <p><strong>no olvides por seguridad, cerrar  tu sesi&oacute;n.</strong></p>
</div>
<div align="center"></div>
<div align="center"></div>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','100','src','flash/piepag','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/piepag' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object></noscript>
</p>
