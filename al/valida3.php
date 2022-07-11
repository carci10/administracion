<?php
session_start();
require('clases/conexion.php');
$folio=$_REQUEST["caja1"];

$_SESSION['folio']=$folio;

//-------------------------------------------------------
$consulta=mysqli_query($conexion,"SELECT * FROM folios WHERE folio_aspirante='$folio' ");
while ($arreglo=$consulta->fetch_array(MYSQLI_ASSOC) )
{
$fol=$arreglo['folio_aspirante'];	
$estado=$arreglo['estatus_aspirante'];
}
if($folio==$fol)
{
	if($estado==0)
	{
$_SESSION['folio']=$fol;
header("location:prereg1.php");
	}
	else
	{
		  echo"<script language=javascript>alert('Folio ya registrado')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
	}
}
else
{
  echo"<script language=javascript>alert('Folio Inexistente o rechazado verificalo en control escolar')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}
?>