<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','170','src','flash/encabezado','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encabezado' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
    <param name="movie" value="flash/encabezado.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
  </object></noscript>
</p>
<p align="center"><img src="images/claves.jpg" width="516" height="38" /></p>
<p align="center"><a href="certificado.php" target="_blank"><img src="images/imorimir.jpg" alt="" width="89" height="62" border="0" /></a></p>
<p>








<?php
session_start();

$matricula=$_SESSION['matri'];

function claveAleatoria($tamanio,$modo){   
	switch ($modo):   
		case "alfanumericos":   
	  		$tipo = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';   
	  		break;   
	    case "numericos":   
	  		$tipo = '1234567890';   
	  		break;   
	    case "simbolos":   
	   		$tipo = '|@#~$%()=^*+[]{}-_';   
	  		break;   
	    case "todos":   
	    	$tipo = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';   
            break;   
        default:   
		    $tipo = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';    
			break;   
	endswitch;      
  
	if($tamanio>0){     
		$cadena = "";   
	  $tipo = str_split($tipo,1);   //Transformamos a $tipo a un arreglo en donde cada caracter sera
								                  //un elemento del arreglo para luego crear la cadena
	  for($i=1; $i<=$tamanio; $i++){     
		  mt_srand((double)microtime() * 1000000);   //Alimentamos el generador de aleatorios
	    $numero = mt_rand(1,count($tipo));  //Sacamos el numero aleatorio
	    $cadena .= $tipo[$numero-1];  //Porque todos los arreglos empiezane en 0 y terminan en n-1
	  }   	  
	}   	  
return $cadena;   
}  
//CONTROL: CONEXIONES
require('clases/conexion.php');

$clave=claveAleatoria(7,'todos'); 


$consulta=$sicoes->query("SELECT Estado FROM sicoes.claves WHERE Matricula='$matricula'");
$consulta2=$sicoes->query("SELECT Clave FROM sicoes.claves WHERE Matricula='$matricula'");
$consulta3=$sicoes->query("SELECT Matricula FROM sicoes.claves WHERE Matricula='$matricula'");


$arreglo=$consulta->fetch_array(MYSQLI_ASSOC);
  $Estado=$arreglo["Estado"];
$arreglo2=$consulta2->fetch_array(MYSQLI_ASSOC);
  $clav=$arreglo2["Clave"];
$arreglo3=$consulta3->fetch_array(MYSQLI_ASSOC);
  $matri=$arreglo3["Matricula"];

if($matricula==$matri){
  echo "<script language=javascript>alert('Este alumno ya tiene clave generada')</script>";
  echo "<center><div align=center>La clave generada para la matricula.$matricula.Es:  $clav.<br>";
}else{
  //mysql_db_query("sicoes","insert into claves values('$matricula','$clave',0)");
  $sicoes->query("INSERT INTO sicoes.claves values('$matricula','$clave',0)");
  echo"<center>Se ha generado la clave correctmente";
  //$consulta2=mysql_db_query("sicoes","select Clave from claves where Matricula='$matricula'");
  $consulta2=$sicoes->query("SELECT Clave FROM sicoes.claves WHERE Matricula='$matricula'");
  $arreglo2=$consulta2->fetch_array(MYSQLI_ASSOC);
  $clav=$arreglo2["Clave"];
  echo "<center>La clave generada para la matricula" .$matricula." Es: ".$clav."<br>";
}
?>









</div>
<p align="center"><a href="certificado.php" target="_blank"></a></p>
<table width="200" border="0" align="center">
  <tr>
    <td><a href="menuescolar.php"><img src="images/salir.jpg" alt="" width="63" height="64" border="0" /></a></td>
    <td><div align="center"><a href="menucontrol.php"><img src="images/otra.jpg" alt="" width="77" height="81" border="0"/></a></div></td>
  </tr>
</table>
<p align="center"><img src="images/barra.jpg" width="514" height="12" /></p>
<p align="center">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>