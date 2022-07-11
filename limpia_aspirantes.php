<!doctype html>
<html>
	<center>
	  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
	</center>
	<br>
	<br><center>
	<strong>--CUIDADO--  INICIALIZA FOLIOS ELIMINANDO PERMANENTEMENTE ASPIRANTES REGISTRADOS</strong>
	</center>
<br><br>
	<td>
	
		
<form name="elimina_aspirantes" method="post" action="">	
<center>
	<fieldset style="border:solid"><legend>INICIALIZAR FOLIOS</legend> 

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
		   $elimina="delete from aspirante";
			$elimina_2="delete from usuario where tipo_usuario=5";
			$inicializa="alter table aspirante AUTO_INCREMENT=1001";
		    $rselimina= mysqli_query($conexion,$elimina);
			if($rselimina)
				mysqli_query($conexion,$inicializa);
				mysqli_query($conexion,$elimina_2);
				echo"<br>Aspirantes eliminados, folios inicializados a inicio en 1001 favorablemente";
					
			}
	}
	?>
	  
  

</html>