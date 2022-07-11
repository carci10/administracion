<!doctype html>
<html lang="en">
	<head>		
    	<title>Recupera Contraseña</title>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			
			<?php
			include 'conexion.php';

			//datos para envio de email

			// Mostrar errores PHP (Desactivar en producción)
			//ini_set('display_errors', 1);
			//ini_set('display_startup_errors', 1);
			//error_reporting(E_ALL);

			// Incluir la libreria PHPMailer
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			use PHPMailer\PHPMailer\SMTP;

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';

			// Inicio
			$mail = new PHPMailer(true);

			//  librerias para enviar correo (superiores)

			
			$correo = $_POST['email'];	//viende del formulario de recuperacion			
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT correo_usuario, contrasena_usuario,nombre_usuario FROM usuario WHERE correo_usuario='$correo'";				
			$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				
				
				$clave_usuario =  $row['contrasena_usuario'];
				$nombre_usuario = $row['nombre_usuario'];
				$correo_usuario=$row['correo_usuario'];

				//////////////////
				try {
				    // Configuracion SMTP
				   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Mostrar salida (Desactivar en producción)
				    $mail->isSMTP();                                               // Activar envio SMTP
				    $mail->Host  = 'smtp.office365.com';                     // Servidor SMTP
				    $mail->SMTPAuth  = true;                                       // Identificacion SMTP
				    $mail->Username  = 'posgradostesi@tesi.edu.mx';                  // Usuario SMTP
				    $mail->Password  = '*20192020Maestrias';	          // Contraseña Correo
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				    $mail->Port  = 587;
				    $mail->setFrom('posgradostesi@tesi.edu.mx', 'Division de Posgrados-Tecnologico de Estudios Superiores de Ixtapaluca');                // Remitente del correo
		
				    // Destinatarios
				    $mail->addAddress($correo, $nombre_usuario);  // Email y nombre del destinatario

				    // Contenido del correo
				    $mail->isHTML(true);
				    $mail->Subject = 'Datos de recuperacion de acceso a Sistema de Maestria - TESI';
				    $mail->Body  ='<b>'. $nombre_usuario.'</b> Tus datos de Acceso son:<br>Correo:<b> '.$correo_usuario.'</b><br>Clave de usuario: <b>'.$clave_usuario. '</b>';
				    $mail->AltBody = '<b>'. $nombre_usuario.' Tus datos de Acceso son:<br>Correo:<b> '.$correo_usuario.'</b><br>Clave de usuario:<b>'.$clave_usuario.'</b>';
				    $mail->send();
				    //echo 'El mensaje se ha enviado a tu correo';
				    
                                    echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<p>Correo enviado! Por favor checa tu bandeja de entrada.</p>
				<p><a class='alert-link' href=login.html>Login</a></p></div>";

					} catch (Exception $e) {
				   
				
				    echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<br>El mensaje no se ha enviado.<br> 
				<br>{$mail->ErrorInfo}</br>
			        <br>Verifique que sea un correo válido</br>
				<p><a class='alert-link' href=login.html>Login</a></p></div>";			            




					}					
		
				
				
			} else {
				
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>

				<p>El correo no se encuentra en nuestra base de datos</p>
				<p><a class='alert-link' href=login.html>Login</a></p></div>";
			}
			?>
		</div>
	</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>