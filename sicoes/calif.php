<?php
session_start();

?>

<p><center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaalumno.swf">
    <param name="quality" value="high">
    <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<p><img src="images/resca.jpg" width="752" height="168" /></p>



<?php
//session_start();

$parcial=$_POST["parcial"];

$matricula=$_SESSION['matricula'];
$periodo= $_SESSION['peri'];

//CONTROL: CONEXIONES
include ('clases/conexion.php');
include ('clases/leerparcial.php');

$resgrup = mysqli_query($conexion,"SELECT calificacion FROM calificaciones WHERE matricula='$matricula' and Periodo='$periodo'");
//$resgrup2 = $sicoesnvo->query("SELECT Grupo FROM sicoesnvo.Calif WHERE Matricula='$matricula' and Periodo='$periodo'");

while($row = mysqli_fetch_assoc($resgrup)){
  $grup = $row['calificacion'];
  }


// OK OK OK OK OK OK OK OK OK 
echo "<table border=0><tr><td>Matricula:</td><td>".$matricula."</td></tr></table><br>";
echo "<center>RELACION DE MATERIAS POR PARCIAL</center>";
echo "<table border=0>
  <tr bgcolor=green>
    <td><font color='white'>NOMBREMAT</td>
    <td><font color='white'>PARCIAL</td>
    <td><font color='white'>CALIF</td>
    <td>NOMPROF</td>
    <td><font color='white'>APPPROF</td>
    </tr>";

if($parciale=="Defin"|| $parciale=="Extraordinario"){
  
  $resultado2= $sicoes2->query("SELECT MATERIA,PeriodoDef,$parciale FROM sicoes2.Kardex WHERE Matricula='$matricula' AND PeriodoDef='$periodo'");
  //$resultcalif = $sicoes2->query("SELECT Parcial1,Parcial2,Parcial3 FROM sicoes2.calif WHERE matricula = '$matricula' AND Periodo='$periodo'");
    
  // HACE REFERENCIA A SICOES2 HACE REFERENCIA A SICOES2 HACE REFERENCIA A SICOES2 HACE REFERENCIA A SICOES2
  while ($arreglo3 = $resultado2->fetch_array(MYSQLI_ASSOC)){
    echo " <tr>";
    $mat= $arreglo3['MATERIA'];
    $res= $sicoes2->query("SELECT Nombre FROM sicoes2.Materias WHERE MATERIA='$mat'");
    $arrenommat= $res->fetch_array(MYSQLI_ASSOC);
    //clave de maestro
    $maes=$sicoes2->query("SELECT Maestro FROM sicoes2.Horarios WHERE GRUPO='$grup' AND  Materia='$mat' AND Periodo='$periodo'");
    $arremaes=$maes->fetch_array(MYSQLI_ASSOC);
    $maestro=$arremaes['Maestro'];
    //nombre del maestro   
    $nommaes=$sicoes2->query("SELECT Nombres,`Apellido P` FROM sicoes2.Maestros WHERE MAESTRO='$maestro'");
    $arrenomae=$nommaes->fetch_array(MYSQLI_ASSOC);
    $nombreprof=$arrenomae['Nombres'];

    echo  "<td>".$arrenommat['Nombre']."</td>";
    echo  "<td>".$parciale."</td>";
    //$arreglo4 = $resultcalif->fetch_array(MYSQLI_ASSOC);   //REFERENCIA CALIFICACION
    echo  "<td>".$arreglo3[$parciale]."</td>";
    echo "<td>".$nombreprof."</td>";
    echo "<td>".$arrenomae['ApellidoP']."</td>";
  }
    // HACE REFERENCIA A SICOESNVO HACE REFERENCIA A SICOESNVO HACE REFERENCIA A SICOESNVO HACE REFERENCIA A SICOESNVO 
  $resultado2a= $sicoesnvo->query("SELECT MATERIA,PeriodoDef,$parciale FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef='$periodo'");
  //$resultcalif2 = $sicoesnvo->query("SELECT Parcial1,Parcial2,Parcial3 FROM sicoesnvo.calif WHERE matricula = '$matricula' AND Periodo='$periodo'");

 while ($arreglo3a= $resultado2a->fetch_array(MYSQLI_ASSOC)){
  echo " <tr>";
  $mat=$arreglo3a['MATERIA'];
  $res=$sicoesnvo->query("SELECT Nombre FROM sicoesnvo.Materias WHERE MATERIA='$mat'");
  $arrenommat=$res->fetch_array(MYSQLI_ASSOC);
  //clave de maestro
  $maes=$sicoesnvo->query("SELECT Maestro FROM sicoesnvo.Horarios WHERE GRUPO='$grup' AND  Materia='$mat' AND Periodo='$periodo'");
  $arremaes=$maes->fetch_array(MYSQLI_ASSOC);
  $maestro=$arremaes['Maestro'];
  //nombre del maestro
  $nommaes=$sicoesnvo->query("SELECT Nombres,`Apellido P` FROM sicoesnvo.Maestros WHERE MAESTRO='$maestro'");
  $arrenomae=$nommaes->fetch_array(MYSQLI_ASSOC);
  $nombreprof=$arrenomae['Nombres'];

  echo  "<td>".$arrenommat['Nombre']."</td>";
  echo  "<td>".$parciale."</td>";
  //$arreglo4a = $resultcalif2->fetch_array(MYSQLI_ASSOC);   //REFERENCIA DE CALIFICACIONES
  echo  "<td>".$arreglo3a[$parciale]."</td>";
  echo "<td>".$nombreprof."</td>";
  echo "<td>".$arrenomae['ApellidoP']."</td>";
  } 
}else{

  $resultado1=mysqli_query($conexion,"SELECT id_materia,id_periodo,$parcial FROM calificaciones WHERE matricula = '$matricula' AND id_periodo='$periodo'");
  
  while ($arreglo2=mysqli_fetch_assoc($resultado1)){
    echo " <tr>";
    $mat=$arreglo2['id_materia'];
    $res=mysqli_query($conexion,"SELECT nombre_materia FROM materias WHERE id_materia='$mat'");
    $arrenommat=$res->fetch_array(MYSQLI_ASSOC);
    $grup=$arreglo2['Grupo'];
    //clave de maestro  
    $maes=$sicoes2->query("SELECT Maestro FROM sicoes2.Horarios WHERE GRUPO='$grup' AND  Materia='$mat' AND Periodo='$periodo'");
    $arremaes=$maes->fetch_array(MYSQLI_ASSOC);
    $maestro=$arremaes['Maestro'];
    //nombre del Maestro   
    $nommaes=$sicoes2->query("SELECT Nombres,`Apellido P` FROM sicoes2.Maestros WHERE MAESTRO='$maestro'");
    $arrenomae=$nommaes->fetch_array(MYSQLI_ASSOC);
    $nombreprof=$arrenomae['Nombres'];
    echo  "<td>".$arrenommat['Nombre']."</td>";
    echo  "<td>".$parcial."</td>";
    if($arreglo2[$parcial]==11){
      echo  "<td> NP </td>";
      }else{
        echo  "<td>".$arreglo2[$parcial]."</td>";
      }
      echo "<td>".$nombreprof."</td>";
      echo "<td>".$arrenomae['ApellidoP']."</td>";
  }
}
  
$resultado2=$sicoesnvo->query("SELECT Materia,Periodo,Grupo,$parcial FROM sicoesnvo.Calif WHERE Matricula = '$matricula' AND Periodo='$periodo'");

while ($arreglo2=$resultado2->fetch_array(MYSQLI_ASSOC)){
  echo " <tr>";
  $mat=$arreglo2['Materia'];
  $res=$sicoesnvo->query("SELECT Nombre FROM sicoesnvo.Materias WHERE MATERIA='$mat'");
  $arrenommat=$res->fetch_array(MYSQLI_ASSOC);
  $grup=$arreglo2['Grupo'];
  //clave de maestro
  $maes=$sicoesnvo->query("SELECT Maestro FROM sicoesnvo.Horarios WHERE GRUPO='$grup' AND  Materia='$mat' AND Periodo='$periodo'");
  $arremaes=$maes->fetch_array(MYSQLI_ASSOC);
  $maestro=$arremaes['Maestro'];
  //nombre del maestro
  $nommaes=$sicoesnvo->query("SELECT Nombres,`Apellido P` FROM sicoesnvo.Maestros WHERE MAESTRO='$maestro'");
  $arrenomae=$nommaes->fetch_array(MYSQLI_ASSOC);
  $nombreprof=$arrenomae['Nombres'];
  echo  "<td>".$arrenommat['Nombre']."</td>";
  echo  "<td>".$parcial."</td>";
  if($arreglo2[$parcial]==11){
    echo  "<td> NP </td>";
   }else{
      echo  "<td>".$arreglo2[$parcial]."</td>";
   }

//echo "<td>".$parcial."</td>
echo "<td>".$nombreprof."</td>";
echo "<td>".$arrenomae['ApellidoP']."</td>";
}

echo "</tr></table><p>";
?>

<a href="menuprinalumno.php"><img src="images/regresa.jpg" width="67" height="67" /></a><br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
