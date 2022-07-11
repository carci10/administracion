<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p><img src="images/altan.jpg" width="755" height="75" /></p>








<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario

$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
$materia=substr($valor,4,4);//Obtiene la materia de la cadena enviada por el formulario
$bd=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`

session_register("bd");
$_SESSION['bd']=$bd;

//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula in (select Matricula from Calif where Grupo='$grupo' and MATERIA='$materia' and Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres"; //Seleccióna la matricula de la tabla calif
if($bd==1){
  $matricula=$sicoes2->query("SELECT Matricula,ApellidoP,APELLIDOM,Nombres FROM sicoes2.Alumnos WHERE Matricula in (SELECT Matricula FROM sicoes2.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres");
}
if($bd==2){
  $matricula=$sicoesnvo->query("SELECT Matricula,ApellidoP,APELLIDOM,Nombres FROM sicoesnvo.Alumnos WHERE Matricula in (SELECT Matricula FROM sicoesnvo.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres");
}


echo "<form method=post action=actas3.php>";

if($_SESSION['parci']=="Parcial1"){
  $par="Primer Parcial";
}
if($_SESSION['parci']=="Parcial2"){
  $par="Segundo Parcial";
}
if($_SESSION['parci']=="Parcial3"){
  $par="Tercer Parcial";
}

echo "<table><tr><td>Parcial a capturar:".$par."</td></tr></table>";


if($bd==1){
  $resasig=$sicoes2->query("SELECT Nombre FROM sicoes2.Materias WHERE MATERIA= '$materia'");
}
if($bd==2){
  $resasig=$sicoesnvo->query("SELECT Nombre FROM sicoesnvo.Materias WHERE MATERIA= '$materia'");
}

$arreasig=$resasig->fetch_array(MYSQLI_ASSOC);
echo "<table><tr><td>Asignatura:</td><td>".$arreasig['Nombre']."</td>        <td> Clave:</td><td>".$materia."</td></tr><tr></tr></table>Grupo:".$grupo;
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>No.</td><td><font color='white'>
  <div align=center>MATRICULA</td><td><font color='white'>
  <div align=center>APELLIDOP</td><td><font color='white'>
  <div align=center>APELLIDOM</td><td><font color='white'>
  <div align=center>NOMBRES</td><td><font color='white'>
  <div align=center>CALIFICACION</td></tr></font>";
$a=1;


while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<TR><TD>".$a."</TD>";
  echo "<TD>".$arrematri['Matricula']."</TD>";
  echo "<TD>".$arrematri['ApellidoP']."</TD>";
  echo "<TD>".$arrematri['APELLIDOM']."</TD>";
  echo "<TD>".$arrematri['Nombres']."</td>";
  echo "<td><div align=center><select name=$a>
  <option value=NP>NP</option>
  <option value=0>0</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
  <option value=6>6</option>
  <option value=7>7</option>
  <option value=8>8</option>
  <option value=9>9</option>
  <option value=10>10</option>
  </select>
  </td></tr>";
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
echo "<input type=submit value=Siguiente>";

//$consmateria="select Carrera from Materias where MATERIA='$materia';";//selecciona el nombre de la materia del profesor 
if($bd==1){
$resmateria=$sicoes2->query("SELECT Carrera FROM sicoes2.Materias WHERE MATERIA = '$materia'");
}
if($bd==2){
$resmateria=$sicoesnvo->query("SELECT Carrera FROM sicoesnvo.Materias WHERE MATERIA = '$materia'");
}

$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
$carrera=$arrenommat['Carrera'];
session_register('carr');
$_SESSION['carr']=$carrera;

?>









<br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>