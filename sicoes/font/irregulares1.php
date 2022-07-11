<script language="php">
session_start();
if ($_SESSION['usuario']=="")
{
  echo"<script language=javascript>alert('Error de sesion')</script>";
echo"<script language=javascript>self.location.href='destroy.php'</script>";
}
</script>

<style type="text/css">
<!--
.Estilo1 {
	color: #000000;
	font-weight: bold;
}
.Estilo2 {color: #FF0000; font-weight: bold; }
.Estilo4 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encaalumno','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encaalumno' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encaalumno.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object></noscript>
<img src="images/irregulares1.jpg" width="791" height="85" /></p>
<p align="center" class="Estilo1 Estilo4">
  <script language="php">
//session_start();
$nombre=$_SESSION['usuario'];
session_register("carrera");
session_register("semestre");
session_register("semestredef");
$perido="09-1";
//echo "Usuario:".$nombre;
mysql_connect("localhost","tesi","sicoes");
$conect=odbc_connect("sicoes","","");
$consulta1=mysql_db_query("sicoes","select Matricula from usuarios where Usuario='$nombre'");
$arreglo=mysql_fetch_row($consulta1);
$matricula=$arreglo[0];
session_register("matricula");
session_register("semestre");
$_SESSION['matricula']=$matricula;

$consulta="select Grupo from Calif where Matricula='$matricula'   and Periodo='$perido';";//selecciona los grupos del alumno
//$consulta="select Grupo from Kardex where Matricula='$matricula'   and PeriodoDef='$perido';";//selecciona los grupos del alumno
//$consulta="select Grupo from TiraMat where Matricula='$matricula' ORDER BY Grupo ;";//selecciona los grupos del alumno
$resultado=odbc_do($conect,$consulta);

$consulta2="select CARRERA from Alumnos where Matricula='$matricula';";//selecciona la carrera del alumno
$resul=odbc_do($conect,$consulta2);
$arreglo2=odbc_fetch_array($resul);
$carr=$arreglo2['CARRERA'];//OBTIENE LA CARRERA DEL ALUMNO
$_SESSION['carrera']=$carr;
$nureg=odbc_num_rows($resultado);
echo "Registros".$nureg;
while ($arreglo=odbc_fetch_array($resultado))
{
$semestre=$arreglo['Grupo'];//saca los semestres del del alumno
//print ($semestre);

$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO

}



//echo "semestre".$semestre."carrera".$carrera;
$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO

$semact=$ulsem + 1;//OBTIENE EL SEMESTRE A CURSAR
$semdef="0".$semact;

$_SESSION['semestredef']=$semdef;
$_SESSION['matricula']=$matricula;
if ($semact>9)
{
echo"<script language=javascript>alert('El ultimo periodo que cursaste fue noveno semestre acude a control escolar')</script>
  ";
  echo"
  <script language=javascript>self.location.href='index.php'</script>
  ";
  }
  else
  {
  //echo"</p><center>VERIFICA QUE TUS DATOS PERSONALES SEAN CORRECTOS<BR>
//";
//echo"VERIFICA QUE EL SEMESTRE ANTERIOR Y EL ACTUAL SEAN CORRECTOS Y SELECCINA LAS MATERIAS A CURSAR<BR>
//";
echo "<table border=1 align=center>";
print("<tr><td><center><b><font color=black>MATRICULA:".$matricula."<BR></font></tr></td></table>");
echo "<center><b>El ultimo semestre cursado por el alumno es: 0".$ulsem."<br>
";
echo "Semestre a cursar en este periodo escolar:  ".$semdef."<br>
";
$consulta3="select MATERIA,Nombre from Materias where Carrera='$carr' and Semestre='$semdef';";//selecciona los grupos del alumno
$res=odbc_do($conect,$consulta3);
echo "<BR>MATERÍAS DEL PROXIMO SEMESTRE";
echo "</p>
<form method=post action=selectmaterias.php>";
echo "<table  align=center>
<tr bgcolor=green ><td><div align=center>Semestre</div></td><td><div align=center>Curso</div></td><td><div align=center>Clave</div></td><td><div align=center>Materia</div></td></tr>
";
$id=1;
while ($arreglo3=odbc_fetch_array($res))
{
//#0099CC
echo"<tr >";
$mate=$arreglo3['MATERIA'];
$nommat=$arreglo3['Nombre'];
echo "<td align=center>".$semact."</td>";
echo "<td>ORDINARIO</td>";
echo "<td>".$mate."</td>";


print ("<td>".$nommat."</td>");
echo"</tr>";
$id=$id+1;
}
echo "</table><br>";
echo "<center></form>
<p>";
  }
  
$cons="select MATERIA,Defin from Kardex where Matricula='$matricula';";
$res=odbc_do($conect,$cons);
while ($arre=odbc_fetch_array($res))
{
$def=$arre['Defin'];
$matre=$arre['MATERIA'];
 if ($def<7)
  {
echo "MATERIAS RESAGADAS DEL ALUMNO <BR>";
echo "<table  align=center>
<tr bgcolor=green ><td><div align=center>Semestre</div></td><td><div align=center>Curso</div></td><td><div align=center>Clave</div></td><td><div align=center>Materia</div></td></tr>
";
$consre="select MATERIA,Nombre from Materias where Carrera='$carr' and MATERIA='$matre';";//selecciona los grupos del alumno
$resmat=odbc_do($conect,$consre);  
  while($arreres=odbc_fetch_array($resmat))
  {
	  echo"<tr >";
$ma=$arreres['MATERIA'];
$nmat=$arreres['Nombre'];
	  $semes= substr($ma,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
$_SESSION['semestre']=$semes;

echo "<td align=center>$semes</td>";
echo "<td>ORDINARIO</td>";
echo "<td>".$ma."</td>";


print ("<td>".$nmat."</td>");
echo"</tr>";
	  
  }
  echo "</table>";
  
   }
 }  
  odbc_close($conect);
  mysql_close();


  </script>
</p>
<p align="center"></p>
<p align="center">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="100" height="100">
  <param name="movie" value="flash/botonres.swf" />
  <param name="quality" value="high" />
  <embed src="flash/botonres.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="100" ></embed>
</object><br />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
