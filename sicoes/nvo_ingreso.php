<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
  <param name="movie" value="flash/encabezado.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
</object>
<BR />
<BR />









<?php
//CONTROL: CONEXIONES
require('clases/conexion.php');

$fol=$_REQUEST["caja1"];
$nom=$_REQUEST["caja"];
$app=$_REQUEST["caja2"];
$apm=$_REQUEST["caja3"];
$tur=$_REQUEST["caja4"];
$mat=$_REQUEST["caja5"];
$grp=$_REQUEST["caja7"];
$carr=$_REQUEST["caja8"];

echo $fol." ".$nom." ".$app." ".$apm." ".$tur." ".$mat." ".$grp." ".$carr;

//$consulta2=mysql_db_query("sicoes", "select * from nvo_ingreso where FOLIO='$fol'");
$consulta2=$sicoes->query("SELECT * FROM sicoes.nvo_ingreso WHERE FOLIO = '$fol'");

while ($arreglo=$consulta2->fetch_array(MYSQLI_ASSOC)){
  $f=$arreglo['FOLIO'];
}
//$consulta2=mysql_db_query("sicoes", "select * from nvo_ingreso where matricula='$mat'");
$consulta2=$sicoes->query("SELECT * FROM sicoes.nvo_ingreso WHERE matricula='$mat'");
while ($arreglo=$consulta2->fetch_array(MYSQLI_ASSOC)){
  $m=$arreglo['matricula'];
}
//echo $f; Marca error 

if($fol=="" || $nom=="" || $app=="" || $apm=="" || $turno="" || $mat==""|| $grp==""|| $carr==""){
  echo "<font size=5><center>Es obligatorio ingresar los datos</center></font><br><br>";
}else{
  if($f==$fol){
    echo "<font size=5><center>El folio que insertaste ya existe</center></font><br><br>";
  }else{
    if($m==$mat){
		  echo"<font size=5><center>La matricula que ingresaste ya existe</center></font><br><br>";	  
	  }else{
		  //$consulta=mysql_db_query("sicoes", "insert into nvo_ingreso values('$fol','$nom','$app','$apm',0,'$tur','$mat','$grp','$carr')");   
			if (!$sicoes->query("INSERT INTO sicoes.nvo_ingreso VALUES ('$fol','$nom','$app','$apm',0,'$tur','$mat','$grp','$carr')")) {
        echo"<font size=5><center>Error: Datos incompletos y/o incorrectos</center></font><br><br>";
      }else{
        echo"<font size=5><center>Datos ingresados correctamente</center></font><br><br>";
      }  
		}
	}
}

?>









<DIV align=center><a href="formnvo_ingreso.php"><IMG alt=REGRESAR src='home.png' border=0 align=REGRESAR></a></DIV><br>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf" />
  <param name="quality" value="high" />
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object>
</center>