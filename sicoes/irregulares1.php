<style type="text/css">
<!--
.Estilo1 {
  color: #000000;
  font-weight: bold;
}
.Estilo2 {color: #FF0000; font-weight: bold; }
.Estilo4 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encaalumno','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encaalumno' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encaalumno.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object></noscript><BR />
<img src="images/inscripcion.jpg" width="521" height="53"  /></p>
<p align="center" class="Estilo1 Estilo4">Verifica que los datos arrojados por el sistema sean correctos, verifica tu semestre anterior y semestre a cursar.</p>
<p align="center" class="Estilo1">Si los semestres son correctos, selecciona las materias a cursar en tu pr&oacute;ximo semestres </p>
<p>










<?php
session_start();
if ($_SESSION['usuario']==""){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}

$nombre= $_SESSION['usuario'];
$perido= "15-2";

//CONTROL: CONEXIONES
include ('clases/conexion.php');
/*
$consulta1=$sicoes->query("SELECT Matricula FROM sicoes.usuarios WHERE Usuario='$nombre'");
$arreglo=$consulta1->fetch_array(MYSQLI_ASSOC);

$matricula=$arreglo["Matricula"];
session_register("matricula");*/

$matricula = $_SESSION['matricula'];
$dif=substr($matricula,0,4);

if ($dif < "2010"){
  $res=$sicoes2->query("SELECT Defin FROM sicoes2.Kardex WHERE Matricula='$matricula'");
}else{
  $res=$sicoesnvo->query("SELECT Defin FROM sicoesnvo.Kardex WHERE Matricula='$matricula'");
}

while ($arre=$res->fetch_array(MYSQLI_ASSOC)){
  $def=$arre['Defin'];
  if ($def<7){
   
  }
}  

if ($dif<"2010"){
  $resultado=$sicoes2->query("SELECT Grupo FROM sicoes2.Kardex WHERE Matricula='$matricula' ORDER BY Grupo");
}else{
  $resultado=$sicoesnvo->query("SELECT Grupo FROM sicoesnvo.Calif WHERE Matricula='$matricula' ORDER BY Grupo");
}
if ($dif<"2010"){
  $resul=$sicoes2->query("SELECT CARRERA FROM sicoes2.alumnos WHERE Matricula='$matricula'");
}else{
  $resul=$sicoesnvo->query("SELECT CARRERA FROM sicoesnvo.alumnos WHERE Matricula='$matricula'");
}

while($arreglo2=$resul->fetch_array(MYSQLI_ASSOC)){
  $carr=$arreglo2['CARRERA']; //OBTIENE LA CARRERA DEL ALUMNO
}
$_SESSION['carrera']=$carr;

while ($arreglo=$resultado->fetch_array(MYSQLI_ASSOC)){
  $semestre=$arreglo['Grupo'];
}

$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
$semact=$ulsem+1 ;//OBTIENE EL SEMESTRE A CURSAR +1
session_register('semact');
$_SESSION['semact']=$semact;

$semdef="0".$semact;
$_SESSION['semestre']=$semdef;
$_SESSION['matricula']=$matricula;

if ($semact>9){
  echo"<script language=javascript>alert('El ultimo periodo que cursaste fue noveno semestre acude a control escolar')</script>";
  echo"<script language=javascript>self.location.href='index.php'</script>";
}else{
  echo "<table border=1 align=center>";
  print("<tr><td><center><b><font color=black>MATRICULA:".$matricula."<BR></font></tr></td></table>");
  echo "<center><b>El ultimo semestre cursado por el alumno es: 0".$ulsem."<br>  ";
  echo "Semestre a cursar en este periodo escolar:  ".$semdef."<br>  ";
  
  if ($dif<"2010"){
    $res=$sicoes2->query("SELECT MATERIA,Nombre FROM sicoes2.Materias WHERE Carrera='$carr' and Semestre='$semdef'");
	$reprobadas=$sicoes2->query("select a.MATERIA,a.Nombre from sicoes2.Materias AS a INNER JOIN sicoesnvo.Kardex as b on a.MATERIA=b.MATERIA where 
b.Matricula='$matricula' and b.Defin < 7");
  }else{
    $res=$sicoesnvo->query("SELECT MATERIA,Nombre FROM sicoesnvo.Materias WHERE Carrera='$carr' and Semestre='$semdef'");
	$reprobadas=$sicoes2->query("select a.MATERIA,a.Nombre from sicoesnvo.Materias AS a INNER JOIN sicoesnvo.Kardex as b on a.MATERIA=b.MATERIA where 
b.Matricula='$matricula' and b.Defin < 7");
  }
  echo "</p>
  <form method=post action=selectmateriasirre.php>";
  echo "<table  align=center>
  <tr bgcolor=green ><td><div align=center>Semestre</div></td><td><div align=center>Curso</div></td><td><div align=center>Clave</div></td><td><div align=center>Materia</div></td><td><div align=center>Seleccionar</div></td></tr>
  ";
  $id=1;
  while ($arreglo3=$res->fetch_array(MYSQLI_ASSOC)){
    //#0099CC
    echo"<tr >";
	
    $mate=$arreglo3['MATERIA'];
	$smestre=substr($mate,1,1);
	
    $nommat=$arreglo3['Nombre'];
    echo "<td align=center>".$smestre."</td>";
    echo "<td>ORDINARIO</td>";
    echo "<td>".$mate."</td>";
    print ("<td>".$nommat."</td><td align=center><input type=checkbox name=$id value=$mate ></td>");
    echo"</tr>";
    $id=$id+1;

  }
 
   while ($arreglo56=$reprobadas->fetch_array(MYSQLI_ASSOC)){
    //#0099CC
	echo"<tr >";
    $matess=$arreglo56['MATERIA'];
    $nommatss=$arreglo56['Nombre'];
    echo "<td align=center>".$semact."</td>";
    echo "<td></td>";
    echo "<td>".$matess."</td>";
    print ("<td>".$nommatss."</td><td align=center><input type=checkbox name=$id value=$matess ></td>");
    echo"</tr>";
	$id=$id+1;
	
  }
  echo "</table><br>";
  echo "<center><input type=submit value=Inscribir onClick=alert('Antes de inscribirte')></form>
  <p>";
}
?>









<center><a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a></center>
</div>
  
</p>
<p align="center">Para abandonar el proceso  de inscripci&oacute;n pulsa el bot&oacute;n de salir del menu de la pagina </p>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>