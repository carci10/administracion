<!doctype html>
<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 1) {
        $user = $_SESSION['NombreUsuario'];
           $codigo = $_SESSION["Codigo"];

              $consulta=mysqli_query($conexion,"select Foto from usuarios where Codigo = $codigo");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }

	 }
	echo "$user :   $codigo" ;
	
}
$consulta="select * from periodo_registrosaspirantes";

$obtiene_periodos_registro=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_assoc($obtiene_periodos_registro);
$fecha_inicial=$row['fecha_inicial'];
$fecha_final=$row['fecha_final'];

echo "<center> El periodo de registro de aspirantes actual registrado es del: $fecha_inicial al : $fecha_final </center>";
echo "<center> A T E N C I O N: Si el periodo de registro de aspirantes no es correcto, los aspirantes no podran hacer sus registros </center>";
?>


<html>
<head>
<meta charset="utf-8">
<title>Alta de Fechas de Registro de Aspirantes</title>

</head>

<body>
	
	
	<br>
<fieldset style="border-color: brown"> 
	<legend> Area para crear Periodo de Registro de Aspirantes </legend>
		<center>
		<form name="fecha_aspirantes" method="post" action="">
			<div>
				<label> Ingresar Fecha Inicial:</label>
				<input type="date" name="fecha_inicial" required>
					
			</div>
		
			<br>
		  <div>
				<label> Ingresar Fecha Final:</label>
				<input type="date" name="fecha_final" required>
					
			</div>
		
			<br>
			<div>
				<input type="submit" name="Actualizar" Value="Actualiza Fechas">
				<a href="admin.php"> <input type="button" name="Salir" Value=" Salir sin Actualizar"> </a>
				
					
			</div>
		
		
		
		</form>
	</center>
	
	</fieldset>
	
	<?php
	if(isset($_POST['Actualizar'])){
		$fecha_1=$_POST['fecha_inicial'];
		$fecha_2=$_POST['fecha_final'];
		
		
		$sql="UPDATE `periodo_registrosaspirantes` SET `fecha_inicial` = '$fecha_1', `fecha_final` = '$fecha_2' WHERE `periodo_registrosaspirantes`.`id_fecha_registro` = 1";
		$rsactualiza=mysqli_query($conexion,$sql);
		if($rsactualiza)
		{
		  ?>
			<script> confirm("Se actualizo correctamente el periodo de registro de Aspirantes ");</script>
			<script>window.location.replace("admin.php");</script>
		 <?php
    	}
	}
	
	?>
	
	
</body>
</html>