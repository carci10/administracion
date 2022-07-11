<script language="php">
session_start();
</script>

<style type="text/css">
<!--
.Estilo1 {
	color: #000000;
	font-weight: ;
}
.Estilo2 {color: #FF0000; font-weight: bold; }
.Estilo4 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
  <param name="movie" value="flash/encabezado.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
</object>
<img src="images/inscripcion.jpg" width="521" height="53" /></p>
<p align="center" class="Estilo1 Estilo4">Verifica que los datos arrojados por el sistema sean correctos, verifica que el semestre sea correcto</p>
<p align="center" class="Estilo1">El semestre es 1 (Primer semestre) ya que eres alumno de nuevo ingreso, verifica tus datos personales </p>
<p align="center" class="Estilo1">Si tus datos son correctos  selecciona las materias a cursar, de preferencia se recomienda que selecciones todas. </p>
<p align="center" class="Estilo1">De no ser así ten en cuenta que como minimo puedes seleccionar 38 creditos y como maximo 64 el sistema lo calcula en automatico </p>
<CENTER><strong>DATOS DEL ALUMNO</strong>
<table ><tr bgcolor=green><td>Nombres</td><td>Apellido paterno</td><td>Apellido Materno</td></tr>
<p>
<script language="php">
//session_start();
$nombre=$_SESSION['usuario'];
//$nombre=545;
session_register("carrera");
session_register("semestre");
session_register("matricula");
$perido="09-2";
//echo "Usuario:".$nombre;
mysql_connect("localhost","tesi","sicoes");
$consulta1=mysql_db_query("sicoes","select Matricula from usuarios where Usuario='$nombre'");
$arreglo=mysql_fetch_row($consulta1);
$matricula=$arreglo[0];


$conect=odbc_connect("sicoes","","");
$consulta="select * from nvo_ingreso where FOLIO=$nombre;";//selecciona los grupos del alumno
//$consulta="select Grupo from TiraMat where Matricula='$matricula' ORDER BY Grupo ;";//selecciona los grupos del alumno
$resultado=odbc_do($conect,$consulta);
while ($arreglo=odbc_fetch_array($resultado))
{
$grupo=$arreglo['GRUPO'];
$carrera=$arreglo['CARRERA'];
$turno=$arreglo['TURNO'];
$nom=$arreglo['NOMBRE'];
$app=$arreglo['APELLIDOP'];
$apm=$arreglo['APELLIDOM'];
}
session_register("nombres");
$_SESSION['nombres']=$nom;
session_register("apellidop");
$_SESSION['apellidop']=$app;
session_register("apellidom");
$_SESSION['apellidom']=$apm;
$sem="01";
if($carrera=="LIC. EN ADMINISTRACION")
{
	$carr="01";
}
if($carrera=="LIC. EN INFORMATICA")
{
	$carr="36";
}
if($carrera=="ING. EN SISTEMAS COMPUTACIONALES")
{
	$carr="07";
}
if($carrera=="ING. ELECTRONICA")
{
	$carr="20";
}

echo "<tr><td>$nom</td><td>$app</td><td>$apm</td></tr></table>";
echo "<table ><tr bgcolor=green><td>Semestre</td><td>Carrera</td><td>Grupo</td><td>Turno</td></tr>
<tr><td>$sem</td><td>$carrera</td><td>$grupo</td><td>$turno</td></tr></table><br>";
echo "<CENTER><strong>MATERÍAS A CURSAR</strong>";
$consulta3="select MATERIA,Nombre from Materias where Carrera='$carr' and Semestre='$sem';";//selecciona los grupos del alumno
$res=odbc_do($conect,$consulta3);
echo "</p>
<form method=post action=selectnvoing.php>";
echo "<table  align=center>
<tr bgcolor=green ><td><div align=center>Semestre</div></td><td><div align=center>Curso</div></td><td><div align=center>Clave</div></td><td><div align=center>Materia</div></td><td><div align=center>Seleccionar</div></td></tr>
";
$id=1;
while ($arreglo3=odbc_fetch_array($res))
{
	//#0099CC
echo"<tr >";
$mate=$arreglo3['MATERIA']; 
$nommat=$arreglo3['Nombre'];
echo "<td align=center>".$sem."</td>";
echo "<td>ORDINARIO</td>";
echo "<td>".$mate."</td>";
print ("<td>".$nommat."</td><td align=center><input type=checkbox name=$id value=$mate ></td>");
echo"</tr>";
$id=$id+1;
}
echo "</table><br>";
echo "<center><input type=submit value=Inscribir onClick=alert('Antes de inscribirte')></form>
<p>";

/* AQUI EMPIEZA
$consulta2="select CARRERA from Alumnos where Matricula='$matricula';";//selecciona la carrera del alumno
$resul=odbc_do($conect,$consulta2);
$arreglo2=odbc_fetch_array($resul);
$carr=$arreglo2['CARRERA'];//OBTIENE LA CARRERA DEL ALUMNO
$_SESSION['carrera']=$carr;

while ($arreglo=odbc_fetch_array($resultado))
{
$semestre=$arreglo['Grupo'];//saca los semestres del del alumno
//print ($semestre);
}


//echo "semestre".$semestre."carrera".$carrera;
$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO

$semact=$ulsem + 1;//OBTIENE EL SEMESTRE A CURSAR
$semdef="0".$semact;
$_SESSION['semestre']=$semdef;
$_SESSION['matricula']=$matricula;
if ($semact>9)
{
echo"<script language=javascript>alert('El ultimo periodo que cursaste fue noveno semestre acude a control escolar')</script>";
  echo"<script language=javascript>self.location.href='index.php'</script>
";
}
else
{
//echo"<center>VERIFICA QUE TUS DATOS PERSONALES SEAN CORRECTOS<BR>
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
echo "</p>
<form method=post action=selectmaterias.php>";
echo "<table  align=center>
<tr bgcolor=green ><td><div align=center>Semestre</div></td><td><div align=center>Curso</div></td><td><div align=center>Clave</div></td><td><div align=center>Materia</div></td><td><div align=center>Seleccionar</div></td></tr>
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


print ("<td>".$nommat."</td><td align=center><input type=checkbox name=$id value=$mate ></td>");
echo"</tr>";
$id=$id+1;
}
echo "</table><br>";
echo "<center><input type=submit value=Inscribir onClick=alert('Antes de inscribirte')></form>
<p>";
  }
  odbc_close($conect);
  mysql_close();

echo "<script language=javascript>alert('Este proceso solo se puede realizar una vez,verifica que los datos sean correctos antes de continuar, si son correctos selecciona las materias y da clic en el botón de inscribir una vez pulsado este botón ya no se pueden modificar las materias seleccionadas')</script>";
AQUI TERMINA*/  

$_SESSION['matricula']=$matricula;
</script>
</p>
<p align="center">Para abandonar el proceso  de inscripci&oacute;n pulsa el bot&oacute;n de salir del menu de la pagina </p>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
