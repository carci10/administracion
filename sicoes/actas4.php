<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<center>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaprof.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaprof.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
  <br />
  <img src="images/proceso.jpg" width="517" height="66" />








<?php
session_start();

//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');
$parcial=$_SESSION['par'];
$per=$_SESSION['periodo'];

$bd=$_SESSION['bd'];
$numcal=$_SESSION['numcal'];
$califs=$numcal-1;

echo "<br>";
echo "Parcial Seleccionado:".$parcial."<br>";
echo "Materia:".$_SESSION['materia']."Clave:".$_SESSION['clavemat']."<br>";
echo "Grupo:".$_SESSION['grup']."<br>";
$mat=$_SESSION['clavemat'];

for($i=1;$i<=$califs;$i++){
	$valor[$i]=$_SESSION["va".$i];
  $val=$valor[$i];
  $matri= $_SESSION["ma".$i];

  if($val=="NP"){
    $val=11;
  } 

  if($bd==1){
    $sicoes2->query("UPDATE sicoes2.Calif SET $parcial='$val' WHERE Matricula='$matri' AND Periodo='$per' AND MATERIA='$mat'");
  }
  if($bd==2){
    $sicoesnvo->query("UPDATE sicoesnvo.Calif SET $parcial='$val' WHERE Matricula='$matri' AND Periodo='$per' AND MATERIA='$mat'");
  }
}

$consfolio=$sicoes->query("SELECT Folio FROM sicoes.folioacta");

while($arrefolio=$consfolio->fetch_array(MYSQLI_ASSOC)){
  $folio=$arrefolio['Folio'];
}

if ($folio==""){
  $folio=1;
}else{
  $folio=$folio+1;
}


$grupo=$_SESSION['grup'];

$calv=$_SESSION['usuario'];

$_SESSION['folio']=$folio;


                             

$altafolio = $sicoes->query("INSERT INTO sicoes.folioacta VALUES ('$folio','$grupo','$mat','$parciale','$calv','$per','1')");

/*
if (!$sicoes->query("        INSERT INTO sicoes.folioacta VALUES ('$folio','$grupo','$mat','$val','$calv','$per','1')")) {
    printf("Errormessage: %s\n", $sicoes->error);
}

echo " VALORES $folio,$grupo,$mat,$parcial,$calv,$per";
*/
?>










<br />
</p>
<table width="200" border="1" align="center">
  <tr>
    <td align="center"><a href="geneact1.php" target="_blank">Generar Acta</a></td>
  </tr>
</table>
<p><a href="certificadoacta.php" target="_blank"></a>  </p>
<p align="center"><font size="+1" color="#CC0000">Importante: Para entregar Acta de calificacion a Control Escolar es importante ir al menu y seleccionar la opcion generar acta.<br /> Da click en</font> <a href="menuprof.php">Menu Profesor</a> </p>
<p>
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="80">
    <param name="movie" value="flash/actas.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="flash/actas.swf" width="300" height="80">
      <!--<![endif]-->
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
  <br />
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>