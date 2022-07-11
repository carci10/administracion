<?php
session_start();


if ( $_SESSION['usuario']=="" || empty($_SESSION['usuario']) ){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}

?>











<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
  <param name="movie" value="flash/encacontrol.swf" />
  <param name="quality" value="high" />
  <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
</object>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<form method="post" action="deleteestado.php">
 <table border=1 width="18%" bordercolor=#669900>
    <tr>
      <td scope="row" style="width: 30%">
      <p style="FONT-SIZE: 12px; COLOR: #808080; FONT-FAMILY: Arial"><strong>ClaveProf:</strong></p></td>
      <td>
<span id="sprytextfield1">
 <label>
      <input type="text" name="caja1" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial">
    </label>
    </td>
    </tr>
<span class="textfieldRequiredMsg">Campo obligatorio.</span></span><br>
  <tr>
      <td scope="row" style="width: 30%">
<p style="FONT-SIZE: 12px; COLOR: #808080; FONT-FAMILY: Arial"><strong> ClaveMate: </strong></p></td>
      <td>
      <span id="sprytextfield2">
<label>
     <input type="text" name="caja2" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial">
    </label>
    </td>
    </tr>
<span class="textfieldRequiredMsg">Campo obligatorio.</span></span><br>
  <tr>
      <td scope="row" style="width: 30%">
<p style="FONT-SIZE: 12px; COLOR: #808080; FONT-FAMILY: Arial"><strong> Grupo: </strong></p></td>
      <td>
<span id="sprytextfield3">
<label>
     <input type="text" name="caja3" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial">
    </label>
    </td>
    </tr>
    <span class="textfieldRequiredMsg">Campo obligatorio.</span></span><br>
    </table>
      <table border=1 width="18%" bordercolor=#669900>
   <tr>
      <td scope="row" style="width: 30%">
<p style="FONT-SIZE: 12px; COLOR: #808080; FONT-FAMILY: Arial"><strong> Parcial: </strong></p></td>
      <td>
       <select name="caja4"><option  values="Parcial">
  Parcial1</option>
<option>  Parcial2</option>
<option> Parcial3</option>
</option></select></td></tr>
<tr>
<td scope="row" style="width: 30%">
<p style="FONT-SIZE: 12px; COLOR: #808080; FONT-FAMILY: Arial"><strong> Periodo: </strong></p></td>
<td>
  <select name="caja5"><option  values="Periodo">   13-1</option>
  <option>  13-2</option>
  <option>  14-1</option>
  <option>  14-2</option>
  <option>  15-1</option>
  <option>  15-2</option>
  </option></select></td></tr>
  </table>
   
   <input type="submit" value="LIBERAR">
</form>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf" />
  <param name="quality" value="high" />
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object>
</center>
<script type="text/javascript">
<!--
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>