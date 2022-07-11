<!-- --><script language="php">
session_start();
</script>
<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaalumno.swf">
    <param name="quality" value="high">
    <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p>Las calificaciones que aparecen como 0 se debe a que la calificacion no se a actualizado en el sistema debido a las siguientes razones:</p>
<p>a) Por que el profesor no la a entregado a Control Escolar.(En este caso verifica con el profesor si ya la entrego).</p>
<p>b) Aun no se captura en el sistema(En este caso debes esperar ya que una vez que se entrega la calificacion tarda 12 hrs en actualizar)</p>
<p>&nbsp;</p>
<script language="php">
$usua=$_REQUEST["caja1"];
$con=$_REQUEST["caja2"];
$matricula=$_REQUEST["caja3"];
$parcial=$_REQUEST["periodo"];
$conect=odbc_connect("sicoes","","");
$periodo="09-1";
mysql_connect("localhost","tesi","sicoes");
$user=mysql_db_query("sicoes","select Usuario from usuarios where Usuario='$usua' and Contra='$con'");
$contra=mysql_db_query("sicoes","select Contra from usuarios where Contra='$con' and Usuario='$usua' ");
$arreuso=mysql_fetch_array($user);
$arrecon=mysql_fetch_array($contra);
$contra1=$arrecon[0];
$usuario=$arreuso[0];
$congrup="select Grupo from Calif where Matricula='$matricula' and Periodo='$periodo'";
$resgrup=odbc_do($conect,$congrup);
$arreres=odbc_fetch_array($resgrup);
$grup=$arreres['Grupo'];
echo "<table border=0><tr><td>Matricula:</td><td>".$matricula."</td></tr></table><br>";
echo "<center>RELACION DE MATERIAS POR PARCIAL</center>";
if ($con=="" || $usua=="" || $matricula=="")
{
 $contra="error";
  $usuario="error";
  echo"<script language=javascript>alert('Debes ingresar un nombre de usuario y una contraseña y la matricula')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
 }
if ($con==$contra1 && $usuario==$usua)//VALIDACION
{
echo "<table border=0><tr bgcolor=green><td><div align=center>NOMBREMAT</td><td><div align=center>PARCIAL</td><td>CALIF</td><td>NOMPROF</td><td>APPPROF</td></tr>";
 if($parcial=="Defin"|| $parcial=="Extraordinario")
 {
$consulta4="select MATERIA,$parcial,PeriodoDef from Kardex where Matricula='$matricula' and PeriodoDef='$periodo';";
$resultado2=odbc_do($conect,$consulta4);

while ($arreglo3=odbc_fetch_array($resultado2))
{
echo " <tr>";
$mat=$arreglo3['MATERIA'];
$consulta3="select Nombre from Materias where MATERIA='$mat';";
$res=odbc_do($conect,$consulta3);
$arrenommat=odbc_fetch_array($res);


//clave de maestro
$consgrup="select Maestro from Horarios where GRUPO='$grup' and  Materia='$mat' and Periodo='$periodo';";
$maes=odbc_do($conect,$consgrup);
$arremaes=odbc_fetch_array($maes);
$maestro=$arremaes['Maestro'];


//nombre del maestro
$consnomae="select Nombres,ApellidoP from Maestros where MAESTRO='$maestro';";
$nommaes=odbc_do($conect,$consnomae);
$arrenomae=odbc_fetch_array($nommaes);
$nombreprof=$arrenomae['Nombres'];

echo  "<td>".$arrenommat['Nombre']."</td>";
echo  "<td>".$parcial."</td>";

echo  "<td>".$arreglo3[$parcial]."</td>";
//echo "<td>".$parcial."</td>
echo "<td>".$nombreprof."</td>";
echo "<td>".$arrenomae['ApellidoP']."</td>";
}
 
 
 }
 
 else
{
$consulta2="select Materia,Periodo,$parcial,Grupo from Calif where Matricula='$matricula' and Periodo='$periodo'";
$resultado=odbc_do($conect,$consulta2);

while ($arreglo2=odbc_fetch_array($resultado))
{
echo " <tr>";
$mat=$arreglo2['Materia'];
$consulta3="select Nombre from Materias where MATERIA='$mat';";
$res=odbc_do($conect,$consulta3);
$arrenommat=odbc_fetch_array($res);
$grup=$arreglo2['Grupo'];

//clave de maestro
$consgrup="select Maestro from Horarios where GRUPO='$grup' and  Materia='$mat' and Periodo='$periodo';";
$maes=odbc_do($conect,$consgrup);
$arremaes=odbc_fetch_array($maes);
$maestro=$arremaes['Maestro'];


//nombre del maestro
$consnomae="select Nombres,ApellidoP from Maestros where MAESTRO='$maestro';";
$nommaes=odbc_do($conect,$consnomae);
$arrenomae=odbc_fetch_array($nommaes);
$nombreprof=$arrenomae['Nombres'];
echo  "<td>".$arrenommat['Nombre']."</td>";
echo  "<td>".$parcial."</td>";

echo  "<td>".$arreglo2[$parcial]."</td>";
//echo "<td>".$parcial."</td>
echo "<td>".$nombreprof."</td>";
echo "<td>".$arrenomae['ApellidoP']."</td>";
 
  }
 
  }
echo "</tr></table><p>";
  }
  else
  {
  echo"
  <script language=javascript>alert('Error en el  nombre de usuario o  contraseña o matricula')</script>
  ";
  echo"
  <script language=javascript>self.location.href='destroy.php'</script>
  <br>";
  
}


  </script>
<a href="formcalif.php"><img src="images/regresa.jpg" width="67" height="67" /></a><br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
