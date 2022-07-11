<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" 
width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf">
  <param name="quality" value="high">
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" 
type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object>
<script type="text/javascript" src="prototype.js"></script> 
<script type="text/javascript">
function consulta(){
  var url="cambiapar.php";
  var val= $F("par");
  var val2= $F("per");
  var parametros="val="+val+"&val2="+val2;
  var ajax= new Ajax.Updater('resultado',url,{parameters:parametros,method:"post"});
}
</script>
<center><p><b>El parcial o periodo que se encuentra actualmente en el sistema para el alta de calificaciones es:<b></p>









<?php
session_start();
$Usuario =$_SESSION['usuario'];
$Tipo = $_SESSION['tipo'];

if (empty($Usuario) && $tipo != "2"){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}else{
  //CONTROL: CONEXIONES
  require('clases/conexion.php');
  $consulta=$sicoes->query("SELECT * FROM sicoes.parcial");
  while($arreglo=$consulta->fetch_array(MYSQLI_ASSOC)){
    $dato=$arreglo['Nom_Parcial'];  
    $periodo=$arreglo['Periodo'];
  }
}

?>









<style type="text/css">
.error{
  color:red;
}
.mensaje{
  background-color:green;
  color:white;
  text-align:center;
  font-weight:bold;
}

</style>
<div id="resultado" class="mensaje"><?php echo "Parcial actual:".$dato."<br>Periodo actual:".$periodo?></div>

<center><p><b>Selecciona el parcial o periodo que quieres actualizar para el alta de calificaciones y en automatico se actualizara en el apartado anterior<b></p>
<form name="form1">
<p>
  <select name="par" id="par">
    <option value="Parcial1">Primer parcial</option>
    <option value="Parcial2">Segundo parcial</option>
    <option value="Parcial3">Tercer parcial</option> 
  </select>
</p>
PERIODO<br><input type="text" name="per" id="per"><br><br>
<input type="button" value="Actualizar" onClick="return consulta();">
</form>

<p>&nbsp;</p>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" 
width="800" height="100">
  <param name="movie" value="flash/piepag.swf">
  <param name="quality" value="high">
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" 
type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object>