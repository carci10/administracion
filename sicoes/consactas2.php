<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p><img src="images/rescon.jpg" width="517" height="46" /></p>
<p>









<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');

$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario
$parcial=$_REQUEST["parcial"];
$periodo=$_SESSION['peri'];

$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
$materia=substr($valor,4,4);//Obtiene la materia de la cadena enviada por el formulario
$bd=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`

session_register("bd");
$_SESSION['bd']=$bd;
//$consmatricula="SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoes2.Alumnos WHERE Matricula IN (SELECT Matricula FROM sicoes2.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP"; //Seleccióna la matricula de la tabla calif

if($bd==1){
  $matricula=$sicoes2->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoes2.Alumnos WHERE Matricula IN (SELECT Matricula FROM sicoes2.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP");
}
if($bd==2){
  $matricula=$sicoesnvo->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoesnvo.Alumnos WHERE Matricula IN (SELECT Matricula FROM sicoesnvo.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP");
}

if($bd==1){
  $resasig=$sicoes2->query("SELECT Nombre FROM sicoes2.Materias WHERE MATERIA ='$materia' ");
}
if($bd==2){
  $resasig=$sicoesnvo->query("SELECT Nombre FROM sicoesnvo.Materias WHERE MATERIA ='$materia' ");
}

$arreasig=$resasig->fetch_array(MYSQLI_ASSOC);
echo "<table><tr><td>Asignatura:</td><td>".$arreasig['Nombre']."</td><td> Clave:</td><td>".$materia."</td>
  </tr><tr></tr></table>Grupo:".$grupo;
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>No.</td><td><font color='white'>
  <div align=center>MATRICULA</td><td><font color='white'>
  <div align=center>NOMBRES</td><td><font color='white'>
  <div align=center>APELLIDOP</td><td><font color='white'>
  <div align=center>APELLIDOM</td><td><font color='white'>
  <div align=center>CALIFICACION</td></tr></font>";
$a=1;

while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<TR><TD>".$a."</TD>";
  echo "<TD>".$arrematri['Matricula']."</TD>";
  echo "<TD>".$arrematri['ApellidoP']."</TD>";
  echo "<TD>".$arrematri['ApellidoM']."</TD>";
  echo "<TD>".$arrematri['Nombres']."</td>";

  $matris=$arrematri['Matricula'];
  //$consulcalif="SELECT $parcial FROM sicoes2.Calif WHERE Matricula='$matris' AND Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo'";
  
  if($bd==1){
    $rescons=$sicoes2->query("SELECT $parcial FROM sicoes2.Calif WHERE Matricula='$matris' AND Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo'");
  }
  if($bd==2){
    $rescons=$sicoesnvo->query("SELECT $parcial FROM sicoesnvo.Calif WHERE Matricula='$matris' AND Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo'");
  }

  $arrecons=$rescons->fetch_array(MYSQLI_ASSOC);

  if($arrecons[$parcial]==11){//para convertir los once en NP
  	$arrecons[$parcial]="NP";
  }

  echo "<TD div align=center>".$arrecons[$parcial]."</td></tr>";
  session_register("ma".$a);
  $_SESSION["ma".$a]=$arrematri['Matricula'];
  $a=$a+1;
}

session_register('numcal');
$_SESSION['numcal']=$a;
session_register("materia");
$_SESSION['materia']=$arreasig['Nombre'];
session_register("clavemat");
$_SESSION['clavemat']=$materia;
session_register("grup");
$_SESSION['grup']=$grupo;
echo "</table><br>";

?>










<br />
</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="80">
    <param name="movie" value="flash/actas2.swf" />
    <param name="quality" value="high" />
    <embed src="flash/actas2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="80" ></embed>
  </object>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
<p>&nbsp; </p>
</p>