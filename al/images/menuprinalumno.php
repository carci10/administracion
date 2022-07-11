<script language="php">
session_start();
if ($_SESSION['usuario']=="")
{
  echo"<script language=javascript>alert('Error de sesion')</script>";
echo"<script language=javascript>self.location.href='destroy.php'</script>";
}
</script>



<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div align="center">
<script type="text/javascript" src="modal/lib/prototype.js"></script>
<script type="text/javascript" src="modal/lib/scriptaculous.js?¬
    load=builder,effects"></script>
<script type="text/javascript" src="modal/modalbox.js"></script>
<link rel="stylesheet" href="modal/modalbox.css" type="text/css" media="screen" /> 

  <p>
    <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="220">
      <param name="movie" value="flash/encaalumno2.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
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
    </object>
  </p>
  <p>
<script language="php">
//session_start();

echo"<center><table border=1 bordercolor=green ><tr><td>Usuario:"." ".$_SESSION['usuario']."</td><td>Matricula:"." ".$_SESSION['matricula']."</tr></table>";

</script>
<br />
 </div>
<div align="center">
 <br />
 <A href="/archivos/LISTA.pdf"><img src="images/PRECAUCION.jpg" height="192" width="809" /></A>
 <br /><br />
  <table>
  <tr>
    <td><img  border="0" src="images/opciones.png" width="200" height="30" /><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><img border="0" src="images/otras.png" width="200" height="30" /><font color="#FFFFFF">aaaaaa</font></td>
	<td><img  border="0" src="images/bibliotecav.png" width="200" height="30" /></td>
  </tr>
  <tr>
    <td><a href="boleta.php"><img border="0" src="images/boletas.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/calendario2.pdf" target="_blank"><img border="0" src="images/calendario.png" width="160" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>
	<td><a href="bibliotecav/index.php" target="_blank"><img src="images/icono_libro.png" border="0" /></a></td>
	</tr>
  <tr>
    <td><a href="formcalif.php" title="Selecciona el parcial" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;"><img border="0" src="images/consultas.png" width="175" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/CALENDARIO1.pdf" target="_blank"><img border="0"src="images/calendari.png" width="177" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	<td><a href="http://www.tesi.org.mx/proyectoserv/index.php"><img src="icono_kardex.jpg" width="121" height="33" border="0" /></a></td>
  </tr>
	<tr>
  <tr>
    <td><a href="regreins.php"><img border="0" src="images/reinscripcion.png" width="104" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/INSTRUCTIVO PARA LA REINSCRIPCION.pdf" target="_blank"><img border="0"src="images/intructivo.png" width="177" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	
    <td></td></tr>
	
	<tr>
	<tr>
    <td><a href="ImprimeBoleta.php" target="_blank"><img border="0" src="archivos/kardex.jpg" width="104" height="33" /></a><font color="#FFFFFF">Imprime Kardex</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/FO-TESI-20 REINSCRIPCION VERSION 8.pdf" target="_blank"><img border="0"src="images/procedimi.png" width="177" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	<td></td></tr>
	<tr>
    <td></td>
    <td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/cuotas.pdf" target="_blank"><img border="0" src="images/cuotas.png" width="62" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	<td></td></tr>
	<tr>
    <td></td>
    <td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/tramites.pdf" target="_blank"><img border="0"src="images/tramite.png" width="177" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	
    <td></td></tr>
	<tr>
	<tr>
    <td></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/triptico.pdf" target="_blank"><img border="0"src="images/triptico.png" width="177" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>	<td></td></tr>
	
	<tr>
    <td></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td></td></tr>
  </table>
   <a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a> </div>
<div align="center">
  <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="flash/piepag.swf" width="800" height="100">
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
  </object>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
//-->
</script>
