<center>
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>

<center>
<p><img src="images/conscalif.jpg" width="734" height="75" /></p>

<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$usuario=$_SESSION['usuario'];


$obtine="select * from  profesores where correo_profesor='$usuario'";
	$rsprofesor=mysqli_query($conexion,$obtine);
	$row=mysqli_fetch_assoc($rsprofesor);
	$id_profesor=$row['id_profesor'];	
	
$group=mysqli_query($conexion,"SELECT * FROM imparte WHERE id_profesor='$id_profesor' AND id_periodo='$periodo'");


echo "<form method=post action=consactas2.php>";
echo "Parcial <select name=parcial><option value=$parciale>$parciale</option></select><br>";
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>GRUPO</td><td><font color='white'>
  <div align=center>MATERIA</td><td><font color='white'>
  <div align=cent4er>NOMMATERIA</td><td><font color='white'>
  <div align=center>SELECCIONAR</td></tr></font>";

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
echo "<input type=submit value=Enviar><br>";
?>



<br />
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','100','src','flash/piepag','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/piepag' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object></noscript>
</p>