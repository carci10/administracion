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









<?php
session_start();
if (empty($_SESSION['usuario']) || $_SESSION['tipo'] != "3"){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}else{
  echo"<center><table border=1 bordercolor=green ><tr><td>Usuario:"." ".$_SESSION['usuario']."</td></tr></table>"; 
}
?>









<br />
 </div>
<div align="center">
  <table>
  <tr>
    <td><img  border="0" src="images/opciones.png" width="200" height="30" /><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><img border="0" src="images/otras.png" width="200" height="30" /></td></tr>
  <tr>
    <td><a href="actas1.php"><img border="0" src="images/capcalif.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="manprof.pdf"><img border="0" src="images/manusu.png" width="121" height="33" /></a></td></tr>
  <tr>
    <td><a href="consactas1.php"><img border="0" src="images/conscalif.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><a href="bibliotecav/index.php" target="_blank"><img border="0" src="images/icono_libro.png" width="150" height="33" /></a></td></tr>
  <tr>
    <td><a href="geneact1.php"><img border="0" src="images/genacta.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font></td></tr>
    <tr>
    <td> <a href="genelist1.php"> <img border="0" src="images/implist.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font></td></tr>
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