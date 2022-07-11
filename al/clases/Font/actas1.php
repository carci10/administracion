<script language="php">
session_start();
</script>
<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p><img src="images/altacalif.jpg" width="746" height="76" /></p>
<script language="php">
$usuario=$_SESSION['usuario'];
$conect=odbc_connect("sicoes","","");
$periodo="09-2";
$consgrup="select GRUPO,Materia from Horarios where Maestro='$usuario' and Periodo='$periodo'"; //Selección de grupo del maestro
$group=odbc_do($conect,$consgrup);//ejecución de la consulta anterior
echo "<table border=0><tr bgcolor=green><td><font color='white'><div align=center>GRUPO</td><td><font color='white'><div align=center>MATERIA</td><td><font color='white'><div align=center>NOMMATERIA</td><td><font color='white'><div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=actas2.php>";
while ($arregroup=odbc_fetch_array($group))//converision de los datos obtenidos en la consulta.
{
echo "<tr><td><div align=center>".$arregroup['GRUPO']."</td>";
echo "<td><div align=center>".$arregroup['Materia']."</td>";
$mat=$arregroup['Materia'];//Variable que almacena la clave de la materia 
$grupo=$arregroup['GRUPO'];//Variable que almacena el grupo
$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
$resmateria=odbc_do($conect,$consmateria);//ejecuta la consulta anterior
$arrenommat=odbc_fetch_array($resmateria);//Convierte la consulta anterior de la materia
//$carrera=$arrenommat['Carrera'];
//session_register('carr');
//$_SESSION['carr']=$carrera;

echo "<td><div align=center>".$arrenommat['Nombre']."</td>";
echo "<td><div align=center><input type=radio name=materia value='$grupo$mat'></td></tr>";
}

echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";
$conprofe="select * from Maestros where MAESTRO='$usuario';";
$resprofe=odbc_do($conect,$conprofe);
$arreprofe=odbc_fetch_array($resprofe);
session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['Nombres'].$arreprofe['ApellidoP'].$arreprofe['ApellidoM'];
session_register('clave');
$_SESSION['clave']=$usuario;


/*$maestro=$arremaes['Maestro'];



$congrup="select Grupo from Calif where Matricula='$matricula' and Periodo='$periodo'";
$resgrup=odbc_do($conect,$congrup);
$arreres=odbc_fetch_array($resgrup);
$grup=$arreres['Grupo'];
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
*/
odbc_close($conect);
  </script>
<br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
