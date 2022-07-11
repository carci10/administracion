<?php
session_start();
$licencia="JCCR-FpoYkNoaVlYTmxOalJmWkdWamIyUmxLQ0phV0Zwb1lrTm9hVmxZVG14T2FsSm1Xa2RXYW1JeVVteExRMHBoVjBWd05WbHFUa3RhYlU1MFZtNWthVTB3YjNkWlZtTXhZbXQwUlZGWVFsQmtNMEozVjIxc1FtSXlSbGxVYm5CaFYwWkdkbE5yV1RWV1JrcFhVMnhrVTFacmNHbFRWM1J2VmxaYVIx-LIC-VALIDA";
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Verifica Ingreso y crea una Sesion</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			// Connection info. file
			include 'conexion.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.html 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Query sent to database
			$result = mysqli_query($conexion,"SELECT correo_usuario, contrasena_usuario, nombre_usuario, tipo_usuario,estatus FROM usuario WHERE correo_usuario = '$email'");
			
			$row = mysqli_fetch_assoc($result);
			$contraseña=$row['contrasena_usuario'];
			$correo_usuario=$row['correo_usuario'];
			$tipo_usuario=$row['tipo_usuario'];
			$estatus=$row['estatus'];
			
			
			
			$result2 = mysqli_query($conexion,"SELECT *  FROM aspirante WHERE correo = '$email'");
			$row2 = mysqli_fetch_assoc($result2);
			$correo_aspirante=$row2['correo'];
			$nombre_aspirante=$row2['nombre'];
			$folio_aspirante=$row2['id_aspirante'];
			
			$jccr = mysqli_query($conexion,'SELECT licencia_valida  FROM licencia');
			$lic_jccr = mysqli_fetch_assoc($jccr);
			$correcto=$lic_jccr['licencia_valida'];
			
		
			
			// Valida entrada de usuarios aspirantes con cuenta pero aun sin registro .
			if($correo_usuario==$email && $contraseña==$password){
					if($tipo_usuario==5 && $estatus==0){
			
			 
							$_SESSION['ingresado'] = true; //ingreso correcto
							$_SESSION['nombre'] = $row['nombre_usuario']; // nombre sobre tabla usuario
							$_SESSION['correo'] = $row['correo_usuario']; // correo tabla usuario
							//$_SESSION['inicio'] = time();
							//$_SESSION['termina'] = $_SESSION['inicio'] + (5 * 60) ;	
							header('location: aspirantes.php');					
				
					}
				   
				     if($tipo_usuario==5 && $estatus==1)
							{
							$_SESSION['ingresado'] = true; //ingreso correcto
							$_SESSION['nombre'] = $nombre_aspirante; // nombre sobre tabla usuario
							$_SESSION['correo'] =$correo_aspirante; // correo tabla usuario
							$_SESSION['folio'] = $folio_aspirante;
						
				     		header('location: aspirante_registrado.php');	
		
							}
				//Valida Administrador 
					if($tipo_usuario==1 and $correcto=="JCCR-FpoYkNoaVlYTmxOalJmWkdWamIyUmxLQ0phV0Zwb1lrTm9hVmxZVG14T2FsSm1Xa2RXYW1JeVVteExRMHBoVjBWd05WbHFUa3RhYlU1MFZtNWthVTB3YjNkWlZtTXhZbXQwUlZGWVFsQmtNMEozVjIxc1FtSXlSbGxVYm5CaFYwWkdkbE5yV1RWV1JrcFhVMnhrVTFacmNHbFRWM1J2VmxaYVIx-LIC-VALIDA"){

						$_SESSION['ingresado'] = true;
						$_SESSION['nombre'] = $row['nombre_usuario'];
						$_SESSION['tipo'] = $row['tipo_usuario'];
						$_SESSION['correo']=$row['correo_usuario'];
						header('location: inicio.php');

						} 
			
			
			
			} else
				{
				$_SESSION['ingresado'] = false;	
				echo "<div class='alert alert-danger mt-4' role='alert'>Correo o Contraseña incorrectos!<p><a href='login.html'><strong>Intenta otra vez!</strong></a></p></div>";			
				}	
			

		?>
        
        
        
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>