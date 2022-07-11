<center>
<img src="images/genlista1.jpg" width="787" height="80" /><br />
<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
$_SESSION['par']=$periodo;

//$consgrup="select GRUPO,Materia from Horarios where Maestro='$usuario' and Periodo='$periodo'"; //Selección de grupo del maestro

$obtine="select * from  profesores where correo_profesor='$usuario'";
	$rsprofesor=mysqli_query($conexion,$obtine);
	$row=mysqli_fetch_assoc($rsprofesor);
	$id_profesor=$row['id_profesor'];	
	
$group=mysqli_query($conexion,"SELECT * FROM imparte WHERE id_profesor='$id_profesor' AND id_periodo='$periodo'");

echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>GRUPO</td><td><font color='white'>
  <div align=center>MATERIA</td><td><font color='white'>
  <div align=center>NOMMATERIA</td><td><font color='white'>
  <div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=certificadolista2.php><br>";

while ($arregroup=$group->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<tr><td><div align=center>".$arregroup['id_grupo']."</td>";
  echo "<td><div align=center>".$arregroup['id_materia']."</td>";
  $mat=$arregroup['id_materia'];//Variable que almacena la clave de la materia 
  $grupo=$arregroup['id_grupo'];//Variable que almacena el grupo

  $resmateria=mysqli_query($conexion,"SELECT nombre_materia FROM materias WHERE id_materia = '$mat' ");
  $arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
  //$bd=1;
  echo "<td><div align=center>".$arrenommat['nombre_materia']."</td>";
  echo "<td><div align=center><input type=radio name=materia value='$mat'></td></tr>";
 
}


echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";

$conprofe="select * from profesores where correo_profesor='$usuario';";
	$resprofe=mysqli_query($conexion,$conprofe);
$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);

//session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['nombre_maestro'].$arreprofe['apellido_p'].$arreprofe['apellido_m'];
//session_register('clave');
$_SESSION['clave']=$usuario;

?>
<br />
</p>
