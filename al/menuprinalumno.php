<p> <img src="images/Logophp.jpg"/></p>
<?php
session_start();
if ($_SESSION['usuario']=="")
{
  	echo"<script language=javascript>alert('Error de sesion')";
	echo"<script language=javascript>self.location.href='destroy.php'</script>";
}
else {
	
	echo"<center><table border=1 bordercolor=green ><tr><td>Usuario:"." ".$_SESSION['usuario']."</td><td>Matricula:"." ".$_SESSION['matricula']."</td>     
	<td>Nombre:"." ".$_SESSION['Nombre']."</tr>
	</table>";

include ('clases/conexion.php');
include ('clases/leerparcial.php');
}
?>
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<div align="center">
<script type="text/javascript" src="modal/lib/prototype.js"></script>
<script type="text/javascript" src="modal/lib/scriptaculous.js?¬
    load=builder,effects"></script>
<script type="text/javascript" src="modal/modalbox.js"></script>
<link rel="stylesheet" href="modal/modalbox.css" type="text/css" media="screen" /> 

  
  <p>
  
<script language="php">
//session_start(); 
echo"<center><table border=1 bordercolor=green ><tr><td>Usuario:"." ".$_SESSION['usuario']."</td><td>Matricula:"." ".$_SESSION['matricula']."</tr></table>";
</script>

<br />
</div>
<div align="center">
  <p>&nbsp;</p>
  <table>
    <tr>
    <td><img  border="0" src="images/opciones.png" width="200" height="30" /><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>
	<td><img  border="0" src="images/bibliotecav.png" width="200" height="30" /></td>
  </tr>
  <tr>
    <td><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>
	<td>&nbsp;</td>
	</tr>
  <tr>
    <td><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td>
  </tr>
	<tr>
  <tr>
    <td><font color="#FFFFFF">aaaaaa</font></td>
    <td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	
    <td>&nbsp;</td>
  </tr>
	
	<tr>
	<tr>
	<tr>
	<td height="42"><font color="#FFFFFF">aaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font>
	
	<td>&nbsp;</td>
	</td>
	</tr>
    <td><font color="#FFFFFF">Imprime Kardex</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td>
    </tr>
	<tr>
    <td><a href="tira_materias.php"><img src="images/tira.jpg" width="200" height="30" alt=""/></a></td>
    <td><font color="#FFFFFF">aaaaaa</font><a href="" target="_blank"></a><font color="#FFFFFF">aaaaaa</font></td>	
    <td>&nbsp;</td>
	</tr>
	<tr>
    <td></td>
    <td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	
    <td>&nbsp;</td></tr>
	<tr>
	<tr>
    <td></td><td><font color="#FFFFFF">aaaaaa</font><a href="/archivos/triptico.pdf" target="_blank"></a><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td></tr>
	
	<tr>
    <td></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td>
	</tr>
</table>
  <a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a> </div>
<div align="center"> </div>
