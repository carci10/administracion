
<center>
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<?php
session_start();
	  
	  
if (empty($_SESSION['usuario']) || $_SESSION['tipo'] != "2"){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}else{
  echo"<center><table border=1 bordercolor=blue ><tr><td>Correo: "." ".$_SESSION['usuario']." | Control docente = ".$_SESSION['id_profesor']. "</td></tr></table>"; 
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