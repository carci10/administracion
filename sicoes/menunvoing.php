<?PHP
session_start();
if ($_SESSION['usuario']=="")
{
  echo"<script language=javascript>alert('Error de sesion')</script>";
echo"<script language=javascript>self.location.href='destroy.php'</script>";
}
?>
<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="170">
  <param name="movie" value="flash/encabezado.swf">
  <param name="quality" value="high">
  <embed src="flash/encabezado.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="170" ></embed>
</object>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="425">
  <param name="movie" value="flash/menunvoing.swf">
  <param name="quality" value="high">
  <embed src="flash/menunvoing.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="425" ></embed>
</object>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
  <param name="movie" value="flash/piepag.swf">
  <param name="quality" value="high">
  <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object>
