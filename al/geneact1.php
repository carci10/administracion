<center>
	<img src="images/genacta1.jpg" width="787" height="80"/>
	<br>
	
<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
$_SESSION['par']=$periodo;

	echo'Clave periodo: ';
	echo $periodo;
	echo " Usuario:  $usuario ";
	
	$obtine="select * from  profesores where correo_profesor='$usuario'";
	$rsprofesor=mysqli_query($conexion,$obtine);
	$row=mysqli_fetch_assoc($rsprofesor);
	$profesor=$row['id_profesor'];
	
	echo "Clave Profesor:  $profesor";
//$consgrup="select GRUPO,Materia from Horarios where Maestro='$usuario' and Periodo='$periodo'"; //Selección de grupo del maestro
$group=mysqli_query($conexion,"SELECT id_grupo,id_materia FROM imparte WHERE id_profesor= '$profesor' AND id_periodo='$periodo' ");
//$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro= '$usuario' AND Periodo='$periodo' ");
     
	//echo"SELECT id_grupo,id_materia FROM imparte WHERE id_profesor= '$profesor' AND id_periodo='$periodo' ";
	
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>GRUPO</td><td><font color='white'>
  <div align=center>MATERIA</td><td><font color='white'>
  <div align=center>NOM MATERIA</td><td><font color='white'>
  <div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=certificadoacta2.php>";
echo"<br><center>Selecciona el parcial:<select name=periodo>
      <option value=$parciale> $parciale </option>
</select><br><br>";

while ($arregroup=mysqli_fetch_assoc($group)){//converision de los datos obtenidos en la consulta.
  echo "<tr><td><div align=center>".$arregroup['id_grupo']."</td>";
  echo "<td><div align=center>".$arregroup['id_materia']."</td>";
  $mat=$arregroup['id_materia'];//Variable que almacena la clave de la materia 
  $grupo=$arregroup['id_grupo'];//Variable que almacena el grupo
  //$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
  $resmateria=mysqli_query($conexion,"SELECT * FROM materias WHERE id_materia='$mat' ");
  $arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia

  //$bd=1;
  echo "<td><div align=center>".$arrenommat['nombre_materia']."</td>";
  echo "<td><div align=center><input type=radio name=materia value='$mat'></td></tr>";
  $resprofe=mysqli_query($conexion,"SELECT * FROM profesores WHERE id_profesor= '$profesor' ");
}


echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";
//$conprofe="select * from Maestros where MAESTRO='$usuario';";

$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);
//session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['nombre_maestro']." ".$arreprofe['apellido_p']." ".$arreprofe['apellido_m'];
//	echo $_SESSION['nomprof'];
//session_register('clave');
$_SESSION['clave']=$usuario;

?>
	</center>
  
