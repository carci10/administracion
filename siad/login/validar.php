
<?php session_start(); ?>

		<?php
			include '../admin/conexion.php';
			if(isset($_POST['usuario'])){
				
				$usuario = htmlentities($_POST['usuario']);
				$pw = htmlentities($_POST['password']);

			//	$numero = srand((double)microtime()*1000000);

				$log = mysqli_query($conexion,"SELECT * FROM usuarios WHERE NombreUsuario='$usuario' AND PassUsuario='$pw'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);

					$_SESSION["NombreUsuario"] = $row['NombreUsuario']; 
				  	$_SESSION["NivelUsuario"] = $row['NivelUsuario']; 
				  	$_SESSION["Codigo"] = $row['Codigo']; 
				  	if ($_SESSION["NivelUsuario"] == 1) {
				  		echo '<script> window.location="../admin/admin.php"; </script>';
				  	}
					  	  elseif ($_SESSION["NivelUsuario"] == 2) {
					  	 	echo '<script> window.location="../docentes/docentes.php"; </script>';
					  	 }

							 else {
								 $matricula=$_SESSION['Codigo'];
								 $consulta="select * from alumnos where matricula='$matricula'";
								 $rsconsulta=mysqli_query($conexion,$consulta);
								 $row=mysqli_fetch_assoc($rsconsulta);
								 $_SESSION['matricula']=$row['matricula'];
								 $_SESSION['carrera']=$row['id_carrera'];
								 $_SESSION['plan']=$row['id_plan'];
								 $_SESSION['semestre']=$row['semestre_actual'];
								 $_SESSION['especialidad']=$row['id_especialidad'];
								 
						  	 	echo '<script> window.location="../estudiantes/estudiantes.php"; </script>';
						  	 	echo $numero;
						  	 }
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos. ");</script>';
					echo '<script> window.location="../login.php"; </script>';
				}
			}
		?>	
