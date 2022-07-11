<center>
<img src="images/altacalif2.jpg" width="757" height="106" />
<?php
session_start();
//session_register("par");
//session_register("periodo");

//CONTROL: CONEXIONES
require('clases/conexion.php');

$per=$_SESSION['peri'];
$parcial=$_SESSION['parci'];

//$bd=$_SESSION['bd'];
$numcal=$_SESSION['numcal'];
$califs=$numcal-1;

$_SESSION['par']=$parcial;
$_SESSION['periodo']=$per;
	
$consulta_parcial=mysqli_query($conexion,"select * from tipos_evaluaciones where id_tipoe=$parcial");
$rs=mysqli_fetch_assoc($consulta_parcial);
$par=$rs['descripcion_evaluacion'];	

	/*----------------------------------------------
if($_SESSION['par']=="Parcial1"){
  $pars="Primer Parcial";
}
if($_SESSION['par']=="Parcial2"){
  $pars="Segundo Parcial";
}
if($_SESSION['par']=="Parcial3"){
  $pars="Tercer Parcial";
} --------------------------------------------------*/

echo "<br>";
echo "<br>";
echo "<table><tr><td>Periodo Seleccionado:</td><td>".$par."</td></tr></table>";
echo "<table><tr><td>Materia:</td><td>".$_SESSION['materia']."</td><td>Clave:</td><td>".$_SESSION['clavemat']."</td></tr></table>";
echo "<table><tr><td>Grupo:</td><td>".$_SESSION['grup']."</td></tr></table><br>";

$mat=$_SESSION['clavemat'];
$gru=$_SESSION['grup'];
$usu=$_SESSION['usuario'];

$consestado=mysqli_query($conexion,"SELECT Estado FROM folioacta WHERE Grupo='$gru'AND Materia='$mat' AND Parcial='$parcial' AND Maestro='$usu' AND Periodo='$per'");//consulta para obtener el estado
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
  //session_register("va".$i);
	$_SESSION["va".$i]=$valor[$i];
  $matri= $_SESSION["ma".$i];

	//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula='$matri'";

 
    $matricula=mysqli_query($conexion,"SELECT matricula,apellido_p,apellido_m,nombre_alumno FROM alumnos WHERE matricula = '$matri'");

  $arrematri=$matricula->fetch_array(MYSQLI_ASSOC);//converision de los datos obtenidos en la consulta.

  echo "<TR><TD>".$i."</TD>";
  echo "<TD>".$arrematri['matricula']."</TD>";
  echo "<TD>".$arrematri['apellido_p']."</TD>";
  echo "<TD>".$arrematri['apellido_m']."</TD>";
  echo "<TD>".$arrematri['nombre_alumno']."</td>";
  echo "<td><div align=center>".$valor[$i]."</td></tr>";
}
echo "</table>";

echo "<form method=post action=actas4.php>

<input type=submit value=Siguiente><br></form>"	;

?>

