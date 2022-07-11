<!doctype html>
<?php 
include("conexion.php");
$consulta="select * from periodo_registrosaspirantes";

$obtiene_periodos_registro=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_assoc($obtiene_periodos_registro);
$fecha_inicial=$row['fecha_inicial'];
$fecha_final=$row['fecha_final'];

echo "<center> Periodo de registro de aspirantes del: $fecha_inicial al : $fecha_final </center>";
echo "<center> !!A T E N C I O N¡¡: Si el periodo de registro de aspirantes no esta activo, no podras registrarte </center>";
$fecha_actual = date('Y-m-d');
if($fecha_actual>=$fecha_inicial && $fecha_actual<=$fecha_final)
	$periodo_activo="enable";
else
	$periodo_activo="disabled";
	
//echo $periodo_activo;




//$periodo_activo=

?>

<html lang="en">
  <head>
    <title>Cuenta-Sistema</title>
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
	  <br>
	  
	  <fieldset style="border: groove" > 
		  
		  <center>
    <p>&nbsp;</p>
    <p><img src="imagenes/Logophp.png" width="373" height="135" alt=""/></p>
  </center>
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center><strong><h1>Tecnológico de Estudios Superiores de Ixtapaluca</strong></center></h1>
				<br>
				<center><p><big>Estimado aspirante a los Posgrados que se ofertan en el TES. Ixtapaluca,  para el pre-registro requires de Usuario y Contraseña para usar el Sistema Web, en este apartado puedes crearlo:</big></p></center>		
			</div>
	</div>
	
	<div class="row">	
		<div class="col-sm-12 col-md-6 col-lg-6">
		
		<h3>Crear una cuenta</h3><hr />
		
		<form method="post" action="create-account.php" method="POST">
			<div class="form-group">				
				<input type="text" class="form-control" name="name" placeholder="Ejemplo: Cisneros" required <?php echo "$periodo_activo" ?> </inpu></div>
		  
		  <div class="form-group">				
				<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required <?php echo "$periodo_activo" ?> >
			</div>
		  
		  <div class="form-group">				
				<input type="password" class="form-control" name="password" placeholder="Crear contraseña" required  <?php echo "$periodo_activo" ?> >
			</div>
			
			<div class="form-group">				
				<input type="password" class="form-control" name="confirma_password" placeholder="Repite tu contraseña" required <?php echo "$periodo_activo" ?> >
			</div>
		  
		  
		  <button type="submit" class="btn btn-success btn-block">Crear mi cuenta</button>
		</form>		
		</div>		
		<div class="col-sm-12 col-md-6 col-lg-6">
			<h3>Ingresar</h3><hr />
			<p>Ya tienes una cuenta? <a href="login.html" title="Login Here">Ingresar aqui!</a></p>
			<br> 
			<p>Volver al inicio <a href="index.html" title="Inicio">--> Inicio </a></p>
		</div>
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<br>
	  </fieldset>

	</body>
</html>