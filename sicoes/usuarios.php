<?php
session_start();

if( $_SESSION['usuario'] == "" || empty($_SESSION['usuario']) ){
  echo"<script language=javascript>alert('Error session no autorizada')</script>";
  echo"<script language=javascript>self.location.href='index.php'</script>";
}
?>








<CENTER>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encacontrol.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encacontrol.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object>
</p>
<img src="images/usu1.jpg" width="517" height="56" /><BR />





<form method="post" action="usuarios2.php">
  <p>Coloca la matricula del alumno que deseas consultar su usuario y contraseña</p>
  <table width="200" border="1">
    <tr>
      <td>Matricula:</td>
      <td><input type="text"  name="caja1" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" value="Buscar" />
    <br />
  </p>
</form>
Antes de dar de alta a un alumno verifica que no exista el usuario





<form method="post" action="usuarios5.php">
  <table width="200" border="1">
    <tr>
      <td>Usuario: </td>
      <td><input type="text" name="caja1" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" value="Buscar" />
  </p>
</form>
<p><img src="images/usu2.jpg" width="517" height="56" /></p>
<p>Ingresa los datos del nuevo usuario</p>






<form method="post" action="usuarios3.php">
  <table width="200" border="1">
    <tr>
      <td>Matricula:</td>
      <td><input type="text"  name="caja1" /></td>
    </tr>
    <tr>
      <td>Usuario:</td>
      <td><input type="text"  name="caja2" /></td>
    </tr>
    <tr>
      <td>Contra:</td>
      <td><input type="text"  name="caja3" /></td>
    </tr>
    <tr>
      <td>Tipo:</td>
      <td><input type="text"  name="caja4" /></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><input type="text"  name="caja5" /></td>
    </tr>
  </table><br />

<input type="submit" value="Ingresar" />

</form>
<img src="images/modificar.png" width="516" height="56" />





<form method="post" action="usuarios4.php">
  <p>Coloca la matricula del alumno que deseas modificar el usuario y  contraseña nuevos</p>
  <table width="200" border="1">
    <tr>
      <td>Matricula:</td>
      <td><input type="text"  name="caja1" /></td>
    </tr>
    <tr>
      <td>Usuario:</td>
      <td><input type="text"  name="caja2" /></td>
    </tr>
    <tr>
      <td>Contra:</td>
      <td><input type="text"  name="caja3" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" value="Modificar" />
    <BR />
  </p>

    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
      <param name="movie" value="flash/piepag.swf" />
      <param name="quality" value="high" />
      <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
    </object>
  </p>
</form>
