<!doctype html>
<html>
	<center>
	  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
	</center>
	<br>
	<br><center>
	<strong>--CUIDADO--  ELIMINANDO PERMANENTEMENTE LAS FECHAS  QUE LOS ASPIRANTES PUEDEN VISUALIZAR</strong>
	</center>
<br><br>
	<td>
	
		
<form name="elimina_FECHAS" method="post" action="">	
<center>
	<fieldset style="border:solid"><legend>ELIMINA FECHAS PARA CITAS y LAS CITAS REGISTRADAS ENTERIORMENTE</legend> 

  <div>		
  <label> Correo: </label>
	  <input type="tex" name="usuario">
		</div>
	
		<br>
		
		<div>		
  <label> Clave: </label>
	  <input type="password" name="contra">
		</div>
		<br>
		<input type="submit" name="valida" Value="Limpiar">
		</fielset>
		</form>
    <?php
	include('conexion.php');
  	if(isset($_POST['valida'])){
		$usuario=$_POST['usuario'];
		$contra=$_POST['contra'];
	
		$correcto = "select * from usuario where correo_usuario='$usuario' and contrasena_usuario='$contra' and tipo_usuario=1";
	$rscorrecto	= mysqli_query($conexion,$correcto);
	if(mysqli_num_rows($rscorrecto) == 0)
		echo '<br>Usuario o Contrasena Incorrectos Verifica para eliminar<br>';	
	else  {
		   $elimina="delete from fecha_cita";
			$elimina_2="delete from citas";
		    $rselimina= mysqli_query($conexion,$elimina);
			if($rselimina)
				mysqli_query($conexion,$elimina_2);
				echo"<br>fechas y citas eliminadas correctamente";
					
			}
	}
	?>
	  
  

</html>