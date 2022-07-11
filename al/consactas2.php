<center>
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<center>
<p><img src="images/rescon.jpg" width="517" height="46" /></p>
<p>
<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario
$parcial=$_REQUEST["parcial"];
$periodo=$_SESSION['peri'];
	
	echo"Parcial Actual: $parcial  ";
	echo "Periodo Actual: $periodo  ";	

//$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
$materia=$valor;//Obtiene la materia de la cadena enviada por el formulario
//$bd=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`


$usuario=$_SESSION['usuario'];


$obtine="select * from  profesores where correo_profesor='$usuario'";
	$rsprofesor=mysqli_query($conexion,$obtine);
	$row=mysqli_fetch_assoc($rsprofesor);
	$id_profesor=$row['id_profesor'];	
	
$group=mysqli_query($conexion,"SELECT * FROM imparte WHERE id_profesor='$id_profesor' AND id_periodo='$periodo'");	

$rsgrupo=mysqli_fetch_assoc($group);
	$grupo=$rsgrupo['id_grupo'];
  $matricula=mysqli_query($conexion,"SELECT matricula,apellido_p,apellido_m,nombre_alumno FROM alumnos WHERE matricula IN (SELECT matricula FROM calificaciones WHERE id_materia='$materia' AND id_periodo='$periodo') ORDER BY apellido_p"); // aqui limitar parcial

  $resasig=mysqli_query($conexion,"SELECT nombre_materia FROM materias WHERE id_materia ='$materia' ");

	

$arreasig=$resasig->fetch_array(MYSQLI_ASSOC);
echo "<table><tr><td>Asignatura:</td><td>".$arreasig['nombre_materia']."</td><td> Clave:</td><td>".$materia."</td>
  </tr><tr></tr></table>Grupo:".$grupo;
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>No.</td><td><font color='white'>
  <div align=center>MATRICULA</td><td><font color='white'>
  <div align=center>NOMBRES</td><td><font color='white'>
  <div align=center>APELLIDOP</td><td><font color='white'>
  <div align=center>APELLIDOM</td><td><font color='white'>
  <div align=center>CALIFICACION</td><td><font color='white'>
  <div align=center>SITUACION</td></tr></font>"
	;
	
$a=1;

while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<TR><TD>".$a."</TD>";
  echo "<TD>".$arrematri['matricula']."</TD>";
  echo "<TD>".$arrematri['apellido_p']."</TD>";
  echo "<TD>".$arrematri['apellido_m']."</TD>";
  echo "<TD>".$arrematri['nombre_alumno']."</td>";

  $matris=$arrematri['matricula'];
  //$consulcalif="SELECT $parcial FROM sicoes2.Calif WHERE Matricula='$matris' AND Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo'";
  

    $rescons=mysqli_query($conexion,"SELECT * FROM calificaciones WHERE matricula='$matris' AND id_materia='$materia' AND id_periodo='$periodo' and id_tipoe='$parcial'");
  

  $arrecons=$rescons->fetch_array(MYSQLI_ASSOC);

  if($arrecons['calificacion']==0){//para convertir los once en NP
  	$arrecons[$parcial]="NP";
  }

  echo "<TD div align=center>".$arrecons['calificacion']."";
	echo "<TD div align=center>".$arrecons['observacion_calificacion']."</td></tr>";
  //session_register("ma".$a);
  $_SESSION["ma".$a]=$arrematri['matricula'];
  $a=$a+1;
}

//session_register('numcal');
$_SESSION['numcal']=$a;
//session_register("materia");
$_SESSION['materia']=$arreasig['nombre_materia'];
//session_register("clavemat");
$_SESSION['clavemat']=$materia;
//session_register("grup");
$_SESSION['grup']=$grupo;
echo "</table><br>";

?>










<br />
</p>

<p>&nbsp; </p>
</p>