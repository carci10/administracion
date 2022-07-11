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
    <td><a href="boleta.php"><img border="0" src="images/boletas.png" width="161" height="34" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>
	<td><a href="" target="_blank"><img src="images/icono_libro.png" border="0" /></a></td>
	</tr>
  <tr>
    <td><a href="formcalif.php" title="Selecciona el parcial" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;"><img border="0" src="images/consultas.png" width="175" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td>
  </tr>
	<tr>
  <tr>
    <td><a href=""><img border="0" src="images/reinscripcion.png" width="104" height="33" /></a><font color="#FFFFFF">aaaaaa</font></td>
    <td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	
    <td>&nbsp;</td>
  </tr>
	
	<tr>
	<tr>
	<tr>
	<td height="42"><a href="horarios.php"><img border="0" src="images/horarios.png" width="104" height="33" /></a><font color="#FFFFFF">aaa</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font>
	
	<td>&nbsp;</td>
	</td>
	</tr>
    <td><a href="ImprimeBoleta.php" target="_blank"><img border="0" src="archivos/kardex.jpg" width="161" height="34" /></a><font color="#FFFFFF">Imprime Kardex</font></td><td><font color="#FFFFFF">aaaaaa</font><font color="#FFFFFF">aaaaaa</font></td>	<td>&nbsp;</td>
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
