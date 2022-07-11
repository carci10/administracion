<!doctype html>
<html lang="en">
  <head>
    <title>Crear cuenta en la BD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
	

<div class="container">

	<?php
	
		// Incluir la libreria PHPMailer
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			use PHPMailer\PHPMailer\SMTP;

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';
	    //----------------------------------------------------
	
    error_reporting(0);
	include 'conexion.php';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass2=$_POST['confirma_password'];
	if (!$conn) {
		die("Falla en la conexion al SGBD: " . mysqli_connect_error());
	}
	if($pass==$pass2)
	{
	// Query to check if the email already exist
	//$checkEmail = "SELECT * FROM usuario WHERE correo_usuario = '$_POST[email]'";
	$checkEmail = "SELECT correo_usuario FROM usuario where correo_usuario='$email'";

	// Variable $result hold the connection data and the query
	$result = mysqli_query($conn,$checkEmail);
	// Variable $count hold the result of the query   //
	$count = mysqli_num_rows($result);
	//VERIfic si existe o no el correo
		$esta=mysqli_fetch_assoc($result);
		$correo=$esta['correo_usuario'];
	
	
	if($correo==$email){
	//if(mysqli_num_rows($result)!=0){
			//if ($correo_almacenado == $email) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>El correo: $correo ya se encuentra registrado en nuestras Bases de Datos.</p>
					<p><a href='login.html'>Ingresar aqui</a></p>
				</div>";
	} else {	
		$query = "INSERT INTO usuario (nombre_usuario,correo_usuario, contrasena_usuario, 		                   tipo_usuario, estatus) VALUES ('$name', '$email','$pass',5,0)";

					if (mysqli_query($conn, $query)) {
							echo "<div class='alert alert-success mt-4' role='alert'><h3>$name tu cuenta de acceso se creo correctamente con los siguientes datos:<br> correo:  $email <br> contraseña: $pass </h3>
									<a class='btn btn-outline-primary' href='login.html' role='button'>Login</a></div>";
	//---______________________________________________________________--------------------------------------------------------------------------------------------------------ENVIAR DATOS DE ACCESO POR CORREO ELECTRONIOCO
						
										//	$to=$email;
										//	$subjet="Usuario y contraseña de registro en Posgrados TESI";
										//	$message="Estimado:  $name  su  Usuario de ingreso es: $email   y su Contraseña es: $pass";

										//	mail($to,$subjet,$message);



										//datos para envio de email

										// Mostrar errores PHP (Desactivar en producción)
										//ini_set('display_errors', 1);
										//ini_set('display_startup_errors', 1);
										//error_reporting(E_ALL);



										// Inicio
										$mail = new PHPMailer(true);

										//  librerias para enviar correo (superiores)
										
											
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
												$mail->addAddress($email, $name);  // Email y nombre del destinatario

												// Contenido del correo
												$mail->isHTML(true);
												$mail->Subject = 'Datos de acceso al Sistema para aspirantes a las Maestrias del TES.Ixtapaluca';
												$mail->Body  ='<b>'. $name.'</b> Tus datos de Acceso son:<br>Correo:<b> '.$email.'</b><br>Clave de usuario: <b>'.$pass. '</b>';
												$mail->AltBody = '<b>'. $name.' Tus datos de Acceso son:<br>Correo:<b> '.$email.'</b><br>Clave de usuario:<b>'.$pass.'</b>';
												$mail->send();
												//echo 'El mensaje se ha enviado a tu correo';

																echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
											<span aria-hidden='true'>&times;</span></button>

											<p>Estos datos tambien fueron enviados al correo registrado! Por favor checa tu bandeja de entrada.</p>";
						
						
						
	//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------TERMINA ENVIO DE CORREO					
						
												} else {
												echo "Error: " . $query . "<br>" . mysqli_error($conn);
												}	
									}	
		
		
					mysqli_close($conn);
		}
	else echo'<br><center><strong> ¡¡Atencion!! las contraseñas ingresadas no coinciden </strong><br> <a href="inicio_log.php">Intentar otra vez</a> </center>';
	?>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>