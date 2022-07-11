<?php
session_start();
if ($_SESSION['usuario']==""){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}

$mati=$_SESSION['matricula'];
include ('clases/conexion.php');
/*
mysql_connect("localhost","tesi","sicoes");
mysql_select_db("sicoes");
$coca=mysql_query("select * from datos_alumnos_domicilio where Matofol='$mati'");
*/

$coca = $sicoes->query("SELECT * FROM sicoes.datos_alumnos_domicilio WHERE Matofol = '$mati'");
echo"<script language=javascript>self.location.href='menualumno.php'</script>";
while($ar= $coca->fetch_array(MYSQLI_ASSOC)){
	echo"<script language=javascript>self.location.href='menualumno.php'</script>";
}
if($dat <> ""){
	echo"<script language=javascript>self.location.href='menualumno.php'</script>";
}
echo "todavia entra????";
?>

<script language="javascript">
function blancos(){
  valor=document.getElementById("caja1").value;
  valor1=document.getElementById("caja2").value;
  valor2=document.getElementById("caja3").value;
  valor3=document.getElementById("caja4").value;
  valor4=document.getElementById("caja5").value;

  if(valor=="" || valor1=="" || valor2=="" || valor3=="" || valor4==""){
    alert('Dejaste datos en blanco revisa tu formulario');
  	document.form1.nick.focus();
  		return false;
  }
}

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript">
</script>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
  <param name="movie" value="flash/encabezado.swf">
  <param name="quality" value="high">
  <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
</object></center>
<p align="center"><img src="images/prereg.Jpg" width="517" height="51"></p>
<script language="php">
//session_start();

echo"<center><table border=1 bordercolor=green ><tr><td>Usuario:"." ".$_SESSION['usuario']."</td><td>Matricula:"." ".$_SESSION['matricula']."</tr></table>";

</script>

<form method="post" action="regreins2.php">
  <table width="711" border="0" align="center">
    <tr>

  <td><span id="sprytextfield1">
    <label for="caja10"></label>
    <input type="text" name="caja1" id="caja10" />
    <span class="textfieldRequiredMsg">campo obligatorio.</span></span></td>
    
     <td><label for="caja2"></label>
       <center><select name="caja2" size="1" id="caja2">
         <option value="si">si</option>
         <option value="no">no</option>
      </select></center></td> 
  <td><label for="caja3"></label>
    <center><select name="caja3" size="1" id="caja3">
      <option value="si">si</option>
      <option value="no">no</option>
    </select></center></td>
  </tr>
    <tr>
      <td><div align="center"><font face="Arial"><strong>Nacionalidad </strong></div></td>
      <td><div align="center"><font face="Arial"><strong>Tiene computadora en casa</strong></div></td>
      <td><div align="center"><strong>Cuenta con servicio de Internet</strong></div></td>
      
      <td>&nbsp;</td>
    </tr>
  </table><br>
 
   <center><br>
<center><table borde="0" ><tr>
     <td><label for="caja4"></label>
       <center><select name="caja4" id="caja4">
         <option value="si">si</option>
         <option value="no">no</option>
      </select></center></td>
  <td><label for="caja5"></label>
    <center><select name="caja5" id="caja5">
      <option value="si">si</option>
      <option value="no">no</option>
    </select></center></td>
  </tr>
    <tr>
      <td><div align="center"><font face="Arial"><strong>Dominas algun otro idioma </strong></div></td>
      <td><div align="center"><strong>Te gustaria recibir informacion en general</strong></div></td>
      
      <td>&nbsp;</td>
    </tr>
  </table><br><br>
  <input type="submit" value="Siguiente" onClick="blancos(this.form)"><center><a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a></center>
</div>
</form>
<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf">
  <param name="quality" value="high">
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object></center>

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
</script>
  