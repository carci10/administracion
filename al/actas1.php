<center> 
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>

<p><center>
</p>
<p><img src="images/altacalif.jpg" width="746" height="76" /></p>

<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];
$id_profesor=$_SESSION['id_profesor']; 
//session_register("parci");
$_SESSION['parci']=$parciale;
if($_SESSION['parci']==1||$_SESSION['parci']==2||$_SESSION['parci']==3){
	
$group=mysqli_query($conexion,"SELECT imparte.id_imparte,imparte.id_grupo,imparte.id_materia, grupos.clave_grupo,materias.clave_materia,materias.nombre_materia, periodos.descripcion_periodo,periodos.id_periodo FROM imparte
inner join grupos on imparte.id_grupo = grupos.id_grupo
inner join materias on imparte.id_materia=materias.id_materia
inner join periodos on imparte.id_periodo=periodos.id_periodo
where id_profesor=$id_profesor and periodos.estado_perido=1 and imparte.id_tipoi=1");
//$group2=$sicoesnvo->query("SELECT GRUPO,Materia FROM sicoesnvo.Horarios WHERE Maestro='$usuario' AND Periodo='$periodo'");

echo "<table border=0><tr bgcolor=green><td><font color='white'>
<div align=center>GRUPO</td><td><font color='white'>
<div align=center>MATERIA</td><td><font color='white'>
<div align=center>NOM_MATERIA</td><td><font color='white'>
<div align=center>SELECCIONAR</td></tr></font>";
echo "<form method=post action=actas2.php>";

while ($arregroup=mysqli_fetch_assoc($group)){//converision de los datos obtenidos en la consulta.
	echo "<tr><td><div align=center>".$arregroup['clave_grupo']."</td>";
	echo "<td><div align=center>".$arregroup['clave_materia']."</td>";
	echo "<td><div align=center>".$arregroup['nombre_materia']."</td>";
	$imparte=$arregroup['id_imparte'];
	$mat=$arregroup['id_materia'];//Variable que almacena la clave de la materia 
	$grupo=$arregroup['id_grupo'];//Variable que almacena el grupo
	$id_periodo=$arregroup['id_periodo'];
	//$_SESSION['id_materia']=$mat;
	//$_SESSION['id_grupo']=$grupo;
	//$_SESSION['id_periodo']=$id_periodo;
	//$consmateria="select Nombre,Carrera from Materias where MATERIA='$mat';";//selecciona el nombre de la materia del profesor 
	
	//$resmateria=$sicoes2->query("SELECT Nombre,Carrera FROM sicoes2.Materias WHERE MATERIA='$mat'");
	//$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
	//$bd=1;
	//echo "<td><div align=center>".$arrenommat['Nombre']."</td>";
		//echo"$grupo$mat$id_periodo";
	echo "<td><div align=center><input type=radio name=materia value='$imparte'></td></tr>";
}

echo "</table><br>";
echo "<input type=submit value=Siguiente><br>";

//Consulta profe..
//$conprofe="select * from Maestros where MAESTRO='$usuario';";
$resprofe=mysqli_query($conexion,"SELECT * FROM profesores WHERE correo_profesor='$usuario'");
$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);

//session_register('nomprof');
$_SESSION['nomprof']=$arreprofe['nombre_maestro']." ".$arreprofe['apellido_p']." ".$arreprofe['apellido_m'];


//session_register('clave');
$_SESSION['clave']=$usuario;

if($_SESSION['nomprof']==""){
	//$conprofe="select * from Maestros where MAESTRO='$usuario';";
	$resprofe=$sicoesnvo->query("SELECT * FROM Maestros WHERE MAESTRO = '$usuario' ");
	$arreprofe=$resprofe->fetch_array(MYSQLI_ASSOC);
	session_register('nomprof');
	$_SESSION['nomprof']=$arreprofe['Nombres']." ".$arreprofe['ApellidoP']." ".$arreprofe['ApellidoM'];
   }
}
 else
     {
	 echo "Fuera de los periodos de asignacion de evaluaciones parciales <br>";
	 echo"<a href=menuprof.php>Regresar</a>";
    }
	 
	
?>