<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encaprof.swf">
  <param name="quality" value="high">
  <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object><br />
<img src="images/altacalif2.jpg" width="757" height="106" />








<?php
session_start();
session_register("par");
session_register("periodo");

//CONTROL: CONEXIONES
require('clases/conexion.php');

$per=$_SESSION['peri'];
$parcial=$_SESSION['parci'];

$bd=$_SESSION['bd'];
$numcal=$_SESSION['numcal'];
$califs=$numcal-1;

$_SESSION['par']=$parcial;
$_SESSION['periodo']=$per;

if($_SESSION['par']=="Parcial1"){
  $pars="Primer Parcial";
}
if($_SESSION['par']=="Parcial2"){
  $pars="Segundo Parcial";
}
if($_SESSION['par']=="Parcial3"){
  $pars="Tercer Parcial";
}

echo "<br>";
echo "<br>";
echo "<table><tr><td>Periodo Seleccionado:</td><td>".$pars."</td></tr></table>";
echo "<table><tr><td>Materia:</td><td>".$_SESSION['materia']."</td><td>Clave:</td><td>".$_SESSION['clavemat']."</td></tr></table>";
echo "<table><tr><td>Materia:</td><td>Grupo:</td><td>".$_SESSION['grup']."</td></tr></table><br>";

$mat=$_SESSION['clavemat'];
$gru=$_SESSION['grup'];
$usu=$_SESSION['usuario'];

$consestado=$sicoes->query("SELECT Estado FROM sicoes.folioacta WHERE Grupo='$gru'AND Materia='$mat' AND Parcial='$parcial' AND Maestro='$usu' AND Periodo='$per'");//consulta para obtener el estado
$arreestado=$consestado->fetch_array(MYSQLI_ASSOC);
$estado=$arreestado['Estado'];

if($estado==1){
  echo "<script language=javascript>alert('Este grupo ya fue capturado verificalo en la opción de consultas')</script>";
  echo "<script language=javascript>self.location.href='destroy.php'</script>";
}	
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>No.</td><td><font color='white'>
  <div align=center>MATRICULA</td><td><font color='white'>
  <div align=center>APELLIDOP</td><td><font color='white'>
  <div align=center>APELLIDOM</td><td><font color='white'>
  <div align=center>NOMBRES</td><td><font color='white'>
  <div align=center>CALIFICACION</td></tr></font>";

for($i=1;$i<=$califs;$i++){
	$valor[$i]=$_REQUEST[$i];
  session_register("va".$i);
	$_SESSION["va".$i]=$valor[$i];
  $matri= $_SESSION["ma".$i];
  //$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula='$matri'";
  
  if($bd==1){
    $matricula=$sicoes2->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoes2.Alumnos WHERE Matricula = '$matri'");
  }
  if($bd==2){
    $matricula=$sicoesnvo->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoesnvo.Alumnos WHERE Matricula = '$matri'");
  }

  $arrematri=$matricula->fetch_array(MYSQLI_ASSOC);//converision de los datos obtenidos en la consulta.

  echo "<TR><TD>".$i."</TD>";
  echo "<TD>".$arrematri['Matricula']."</TD>";
  echo "<TD>".$arrematri['ApellidoP']."</TD>";
  echo "<TD>".$arrematri['ApellidoM']."</TD>";
  echo "<TD>".$arrematri['Nombres']."</td>";
  echo "<td><div align=center>".$valor[$i]."</td></tr>";
}
echo "</table>";
echo "<form method=post action=actas4.php>

<input type=submit value=Siguiente><br></form>"	;
?>










<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf">
  <param name="quality" value="high">
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object>