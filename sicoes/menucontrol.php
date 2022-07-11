<html>
<head>
<title> Generacion de Claves </title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body><center>
<div align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encacontrol','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encacontrol' ); //end AC code
</script>
  <noscript>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encacontrol.swf">
    <param name="quality" value="high">
    <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
  </noscript>
</div>
<p align="center"><img src="images/claves.jpg" width="516" height="42"></p>
<p>Instrucciones.<br>
  1.- Introduce la matricula del alumno del cual se generara la clave de acceso.<br>
  2.- Da clic en el boton &quot;buscar&quot;, y verifica que los datos sean correctos.<br>
  3.- Si los datos son correctos da clic en la opción  &quot;generar&quot;, para crear la clave.<br>
</p>
<form method="post" action="menucontrol.php">
  <p>Matricula  
    <input type="text" name="lblMatricula" />
    <br>
    <input type="submit" value="Buscar" />
  </p>
  <p>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="105" height="21">
      <param name="movie" value="button7.swf">
      <param name="quality" value="high">
      <embed src="button7.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="105" height="21" ></embed>
    </object>
</p>
</form>









<?php
session_start();
$matricula=$_REQUEST["lblMatricula"];

if($matricula==""){
  echo"";
}else{
  //CONTROL: CONEXIONES
  require('clases/conexion.php');
  $dif=substr($matricula,0,4);
  if ($dif < "2010") {
    $res=$sicoes2->query("SELECT Defin FROM sicoes2.Kardex WHERE Matricula='$matricula'");
  }else{
    $res=$sicoesnvo->query("SELECT Defin FROM sicoesnvo.Kardex WHERE Matricula='$matricula'");
  }
  //$cons="select Defin from Kardex where Matricula='$matricula';";

  while ($arre=$res->fetch_array(MYSQLI_ASSOC)){
    $def=$arre['Defin'];
    if ($def<7){
      echo"<script language=javascript>alert('Este alumnno no es un alumno regular no se generara clave')</script>";
      echo"<script language=javascript>self.location.href='menucontrol.php'</script>";
    }
  }
  if ($dif < "2010") {
    $resbaja=$sicoes2->query("SELECT Situacion FROM sicoes2.Alumnos WHERE Matricula='$matricula'");
  }else{
    $resbaja=$sicoesnvo->query("SELECT Situacion FROM sicoesnvo.Alumnos WHERE Matricula='$matricula'");
  }  

  $arreglobaja=$resbaja->fetch_array(MYSQLI_ASSOC);
  $alumbaja=$arreglobaja['Situación'];

  if ($alumbaja=="BD" or $alumbaja=="BT"){
    echo"<script language=javascript>alert('Este alumnno esta dado de baja no se puede inscribir')</script>";
    echo"<script language=javascript>self.location.href='menucontrol.php'</script>";
  }

  //$consulta="select Nombres,ApellidoP,ApellidoM,Curp from Alumnos where Matrícula='$matricula';";
  if ($dif < "2010") {
    $resultado=$sicoes2->query("SELECT Nombres,ApellidoP,ApellidoM,Curp FROM sicoes2.Alumnos WHERE Matricula='$matricula'");
  }else{
    $resultado=$sicoesnvo->query("SELECT Nombres,ApellidoP,ApellidoM,Curp FROM sicoesnvo.Alumnos WHERE Matricula='$matricula'");
  } 

  //$numreg=odbc_num_fields($resultado);    REVISION DE FUNCION EQUIVALENTE   ->field_count
  //$numreg=$resultado->field_count;

  while ($arreglo= $resultado->fetch_array(MYSQLI_ASSOC) ){
    $dato=$arreglo['Nombres'];
    $dato1=$arreglo['ApellidoP'];
    $dato2=$arreglo['ApellidoM'];
    $dato3=$arreglo['Curp'];
  }

  if($dato==""&& $dato1=="" && $dato2=="" && $dato3==""){
    echo "<script language=javascript>alert('La matricula no existe en la base de datos')</script><table border=1 bordercolor=black><tr><td>";
    echo "<font color=red> La matricula ".$matricula." no esta registrada en la base de datos verifica que sea la correcta</td></tr></table>";
  }else{
    echo "<center>Verifica que los datos del alumno sean correctos<br>";
    echo "<table border=1 bordercolor=green align=center>";
    echo "<td>";
    echo "<b>Nombres</b>:".$dato;
    echo "</td>";
    echo "</tr>";
    echo "<tr><td>";
    echo "<b>Apellido Paterno</b>:".$dato1;
    echo "</td></tr>";
    echo "<tr><td>";
    echo "<b>Apellido Materno:</b>".$dato2;
    echo "</td></tr>";
    echo "<tr><td>";
    echo "<b>Curp:</b>".$dato3;
    echo "</td></tr>";
    echo "</tr><br></table>";
    session_register("matri");
    session_register("nombre");
    session_register("app");
    session_register("apm");
    $_SESSION['matri']=$matricula;
    $_SESSION['nombre']=$dato;
    $_SESSION['app']=$dato1;
    $_SESSION['apm']=$dato2;
    echo "<form method=post action=clavesAleatorias.php><input type=submit value=Generar name=boton></form><p>";  
  }
}

?>









<p align="center"><img src="images/barra.jpg" width="514" height="12"></p>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
</body>
</html>