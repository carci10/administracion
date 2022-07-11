<?php
session_start();



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ctrol-Cisneros</title>
</head>

<body>
	
	<?php
	if($_SESSION['tipo']==1 and $_SESSION['correo']=='carci10@hotmail.com'){
		include('conexion.php');
		$pantalla=rand();
		$c = "select licencia_valida from licencia";
		$lic_per = mysql_query($c,$conexion);
		$v = mysql_fetch_assoc($lic_per);
		$valida=$v['licencia_valida'];
		echo "<center> $valida |+| $pantalla </center>";
		
		
		
	}else {
					echo " INGRESO NO PERMITIDO";
				
			}
	
	?>
	<fieldset>
	<form name="cambia_lic" action="" method="post">
	<div>
		<label>Ingresar Licencia Valida: </label>
		<input name="lic_valida" type="text" value="JCCR">
				</div>
		<div>
		<center> <input type="submit" name="ingresa" value="Actualiza">
			<input type="submit" name="salir" value="Salir">
			
			</center>
	   </div>
	</form>
	</fieldset>
	
	<?php
	if(isset($_POST['ingresa'])){
		$lic_valida=$_POST['lic_valida'];
		$actualiza="update licencia set licencia_valida='$lic_valida' where clave_licencia=1";
		$result = mysql_query($actualiza,$conexion);
		if($result){
			
			echo"Actualizacion de Licencia Valida";
		}
		
	}
	
	if(isset($_POST['salir'])){
		
		header('location:logout.php');
		
	}
	
	?>
	
	
	</body>
</html>