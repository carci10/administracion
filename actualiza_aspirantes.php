<?php
session_start();
include('conexion.php');
error_reporting(0);
if($_SESSION['ingresado'])
	
{
	//$correo_usuario=$_SESSION['correo'];
?>  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acepta aspirantes</title>
</head>

<body>
<center><img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/></center>
<?php
	
	$aceptado=$_POST['acepta_aspirantes'];
	$folio=$_POST['folio'];
	
	echo $aceptado,$folio;
	$actualiza="update aspirante set estatus=$aceptado where id_aspirante=$folio";
					$rsactualiza=mysqli_query($conexion,$actualiza);
	if($rsactualiza){
		header('location:listaaspirantes.php');
	}
	
	if(isset($_POST['actualiza_folios'])){
		
		
		$limpia_folios="delete from folios";
		$rslf=mysqli_query($conexion,$limpia_folios);
		if($rslf)
			 echo "<script type=\"text/javascript\">alert('Los folios que estaban registrados ahora fueron eliminados y se actualizaran al esatus actual de los aspirantes'); </script>";
			
		$consulta="select id_aspirante,estatus from aspirante";
		$rs=mysqli_query($conexion,$consulta);
		//       Obtiene todos los folios y su estatus de la tabla aspirantes y los guarda en la tabla folios de la BD
	     while($row=mysqli_fetch_assoc($rs)){
			 	$folio_encontrado=$row['id_aspirante'];
			    $estatus_folio=$row['estatus'];
			 	
			 	$folios="insert into folios (folio_aspirante,folio_aceptado,estatus_aspirante)
				values($folio_encontrado,$estatus_folio,0)";	
					$rsinserta=mysqli_query($conexion,$folios);	
			                     
										
		}
		if($rsinserta)
									 echo '<center>-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_</center>';
			 						echo'<center><strong>los folios y su Estatus de aceptado(1) y/o rechazado (0) estan actualizados y almacenados correctamente <br> <a href="inicio.php"> Aceptar</a></strong></center>';	
		
											}
	?>
	
	
	
	
	
	
</body>
	
	
<?php	
	}
else
echo'<center>Algo ha salido mal en la seccion de registro de aspirantes!!  Incia Sesion : <a href="login.html"> AQUI <a>'; 

?>

</html>