<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.Estilo1 {
  font-size: 12px;
  font-weight: bold;
}
.Estilo2 {
  color: #009900;
  font-size: 16px;
}
-->
</style>
<div align="center">
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="220">
      <param name="movie" value="flash/encaalumno2.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="flash/encaalumno2.swf" width="800" height="220">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></div>
<div align="center">
  <p class="Estilo2"><strong>VERIFICA QUE LAS CALIFICACIONES Y LOS DATOS QUE APARECEN EN ESTA </strong></p>
  <p class="Estilo2"><strong>PAGINA CORRESPONDAN CON  TUS CALIFICACIONES OBTENIDAS EN TU ULTIMO PERIODO</strong></p>
</div>






<?php
session_start();

//CONTROL: CONEXIONES
include ('clases/conexion.php');
include ('clases/leerparcial.php');

$matricula=$_SESSION['matricula'];
$nombre=$_SESSION['Nombre'];
$app=$_SESSION['ApellidoPaterno'];
$apm=$_SESSION['ApellidoMaterno'];
$dif=substr($matricula,0,4);
$carr=$_SESSION['Carrera'];
$semestre_actual=$_SESSION['semestre'];

 $res2=mysqli_query($conexion,"SELECT * from calificaciones where matricula='$matricula' and id_periodo=$periodo order by clave_materia;");
 
/*
while ($arre2 = mysqli_fetch_array($res2)){
 $sem = $arre2['clave_grupo'];
  
}*/

//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
//$ulsem= substr($sem,1,1); 
//$semes=$ulsem;
$ulsemestre="select max(inscripciones.id_periodo) as periodo, descripcion_periodo as semestre from inscripciones
inner join periodos on inscripciones.id_periodo=periodos.id_periodo where matricula='$matricula'";
$ulsemes=mysqli_query($conexion,$ulsemestre);
$row=mysqli_fetch_assoc($ulsemes);
$ulsem=$row['periodo'];
$semestre=$row['semestre'];
$proximo_semestre=$semestre_actual + 1;//OBTIENE EL SEMESTRE A CURSAR
//$semestre="0".$semes;

if ($carr==01){
  $carrera="Lic. en Administración";
}if ($carr==07){
  $carrera="Ing. en Sistemas Computacionales ";
}
if ($carr==36){
$carrera="Ing. Informática ";
}
if ($carr==20){
  $carrera="Ing. Electrónica ";
}
if ($carr==05){
  $carrera="Ing. Ambiental";
}
if ($carr==06){
  $carrera="Arquitectura";
}
if ($carr==70){
  $carrera="Ing.Biomedica";
}
if ($carr==8){
  $carrera="Mestria en Administracion";
}
//session_register("carr");
//session_register("semestre");
$_SESSION['carr']=$carrera;
$tipo="ORD";
$fecha=date("d-m-o");

//$consulta="select MATERIA,Defin from Kardex where Matricula='$matricula' and PeriodoDef='$periodo';";//selecciona los grupos del alumno aquie esta el problema
//$consulta="select MATERIA,Defin from Calif where Matricula='$matricula' and Per='$periodo' and Tipo='$tipo';";//selecciona los grupos del alumno aquie esta el problema



echo "<table align=center>";
echo "<tr><td><strong>Nombre:</strong>"."".$nombre ."  ". $app."  ". $apm."</td><td>    </td><td><strong>Carrera:</strong>".$carrera."</td></tr>";
echo "<tr><td><strong>No. de Matricula:</strong>".$matricula."</td>><td></td><td><strong>Semestre:</strong>".$semestre_actual."</td></tr>";
echo "<tr><td><strong>Periodo:</strong>".$periodo."</td><td></td><td><strong>Fecha:</strong>".$fecha."</td></tr>";
echo "</table><br><br>";
echo "<table border=0 align=center>";
echo"<tr bgcolor=green><td>CLAVE</TD><TD>MATERIA</TD><TD>CRED</TD><TD>ORD</TD><TD>EXT</TD><td>REC</td><td>INT</td><td>SUF</td>";

$resultado=mysqli_query($conexion,"SELECT calificaciones.id_materia,nombre_materia, calificacion, descripcion_evaluacion FROM calificaciones
inner join  tipos_evaluaciones on calificaciones.id_tipoe=tipos_evaluaciones.id_tipoe
inner join materias on calificaciones.id_materia=materias.id_materia
WHERE matricula='$matricula' AND id_periodo = '$periodo'");

//$resultadox2=mysqli_query($conexion,"SELECT PeriodoDef FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef = '$periodo' ");


//APARTIR DE AQUI NO IMPRIME NADA 
  while($arreglo = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    $dato=$arreglo['id_materia'];
    $dato1=$arreglo['calificacion'];
	  $dat=$arreglo['nombre_materia'];

    echo "<td>".$dato."<br></td>";
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';";
    $resultado2=$sicoes2->query("SELECT sum(creditos_teoricos+creditos_practicos) as creditos FROM materias WHERE id_materia='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    //$dat=$arreglo1['Nombre'];
    $dat1=$arreglo1['creditos'];

    echo "<td>".$dat."<br></td>";
    echo "<td>".$dat1."<br></td>";

    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
	  
	  
	  
	 //JCCR Checar estas lineas piden tipos de evaluaciones en kardex 
	  
    $resultado3=$sicoes2->query("SELECT Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia FROM sicoesnvo.Kardex WHERE MATERIA='$dato' AND Matricula='$matricula' and PeriodoDef='$periodo'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['Extraordinario2'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=$sicoes2->query("SELECT Defin FROM sicoesnvo.Calif WHERE Matricula = '$matricula' AND MATERIA = '$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      //$dato1=$arregloa['Defin'];
    }
    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }
    
    echo "<td>".$dato1."<br></td>";
    echo "<td>".$dato2."<br></td>";
    echo "<td>".$dato3."<br></td>";
    echo "<td>".$dato4."<br></td>";
    echo "<td>".$dato5."<br></td>";
    echo"</tr>";
  } 
/*
  while($arreglo = $resultadox2->fetch_array(MYSQLI_ASSOC)){
 
    echo "<tr>";
    $dato=$arreglo['MATERIA'];
    $dato1=$arreglo['Defin'];
    echo "<td>".$dato."<br></td>";
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';"; //AQUI ZONKED 
    $resultado2=$sicoesnvo->query("SELECT  Nombre,Cred FROM sicoesnvo.Materias WHERE MATERIA='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    $dat=$arreglo1['Nombre'];
    $dat1=$arreglo1['Cred'];
    echo "<td>".$dat."<br></td>";
    echo "<td>".$dat1."<br></td>";

    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
    $resultado3=$sicoesnvo->query("SELECT Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia FROM sicoesnvo.Kardex WHERE MATERIA='$dato' AND Matricula='$matricula' AND PeriodoDef='$periodo'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['Extraordinario2'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=$sicoesnvo->query("SELECT Defin FROM sicoesnvo.Calif WHERE Matricula='$matricula' AND MATERIA='$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      //$dato1=$arregloa['Defin'];
    }

    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }

    echo "<td>".$dato1."<br></td>";
    echo "<td>".$dato2."<br></td>";
    echo "<td>".$dato3."<br></td>";
    echo "<td>".$dato4."<br></td>";
    echo "<td>".$dato5."<br></td>";
    echo"</tr>";    
  }     */
//$prome=$prom/$cont; //se clacula el promedio definitivo dividiendo la suma de calificaciones entre las materias
//$promdef=substr($prome,0,3);}

$resultadoa1=mysqli_query($conexion,"select sum(calificacion) as prome,count(*) as prom from calificaciones where matricula='$matricula' and id_periodo='$periodo'");
      $arregloa1=$resultadoa1->fetch_array(MYSQLI_ASSOC);
      $dato11=$arregloa1['prome'];
	  $datos22=$arregloa1['prom'];
	  $Promedios=$dato11/$datos22;
	  $promdef= $Promedios;
//$PromedioSemestre=$sicoesnvo->query("select sum(Defin) as prome,count(*) as prom from sicoesnvo.kardex where Matricula='$matricula' and Periodo='16-1'");
//$ArregloPromedios=$PromedioSemestre->fetch_array(MYSQLI_ASSOC);
//$PromedioTotal= $ArregloPromedio['prome'];
//$numeroos =$ArregloPromedio['prom'];
//$promdef= $PromedioTotal/$numeroos;
//echo "imprimer total". $PromedioTotal;
//echo "Imprime Registro".$numeroos;
//$_SESSION['promedio']=$promdef;
echo "</table><br>";
echo "<table border=0 align=center><tr><td><strong>PROMEDIO:</strong>".$promdef."</td></tr></table>";


//TESTING
/*
echo "Matricula ".$matricula." <br>";
echo "Nombre ".$nombre." <br>";
echo "APP ".$app." <br>";
echo "APM ".$apm." <br>";
echo "DIF ".$dif." <br>";
echo "CARR ".$carr." <br>";
echo "SEM ".$sem." <br>";
echo "ULSEM ".$ulsem." <br>";
echo "SEMES ".$semes." <br>";
echo "SEMESTRE ".$semestre." <br>";
echo "TIPO ".$tipo." <br>";
echo "FECHA ".$fecha." <br>";
echo "DATO ".$dato." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DAT ".$dat." <br>";
echo "DAT1 ".$dat1." <br>";
echo "CONT ".$cont." <br>";
echo "PROM ".$prom." <br>";
echo "EXTRA2 ".$extra2." <br>";
echo "DATO2 ".$dato2." <br>";
echo "DATO3 ".$dato3." <br>";
echo "DATO4 ".$dato4." <br>";
echo "DATO5 ".$dato5." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DATO ".$dato." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DAT ".$dat." <br>";
echo "DAT1 ".$dat1." <br>";
echo "CONT ".$cont." <br>";
echo "PROM ".$prom." <br>";
echo "EXTRA2 ".$extra2." <br>";
echo "DATO2 ".$dato2." <br>";
echo "DATO3 ".$dato3." <br>";
echo "DATO4 ".$dato4." <br>";
echo "DATO5 ".$dato5." <br>";
echo "DATO1 ".$dato1." <br>";
echo "PROME ".$prome." <br>";
echo "PROMDEF ".$promdef." <br>";
*/
?>


    <p align="center"><span class="Estilo1">CUALQUIER ANOMALIA FAVOR DE REPORTARLA A CONTROL ESCOLAR</span></p>
</div>
<div align="center">
  <p><a href="certificadoboleta.php" target="_blank"><img src="images/imorimir.jpg" alt="" width="89" height="62" border="0" /></a></p>
  <p><strong>Al imprimir tu boleta y si no realizaras otra operaci&oacute;n</strong></p>
  <p><strong>no olvides por seguridad, cerrar  tu sesi&oacute;n.</strong></p>
</div>
<div align="center"></div>
<div align="center"></div>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','100','src','flash/piepag','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/piepag' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object></noscript>
</p>
