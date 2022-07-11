<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;
<meta charset="utf-8">
<title>Consulta Certificados Validos</title>
</head>

<body>
	<center><img src="../../imagenes/baner0.png"></center>
	<CENTER>
		
		
		<big><b> VALIDACIÓN DE CERTIFICADOS EMITIDOS PARA POSGRADOS DEL TECNOLOGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA </b></big><BR><BR>
		
		
	<form name="valida certificado" method="post" action="">
		<div>
		<B><label>Ingrese numero de FOLIO:</labeL></B>
		<input type="int" name="folio" required>
			<img src="../../imagenes/docente1.png">
	   </div><br>
		<input type="submit" name="validar" value="VALIDAR CERTIFICADO">
		
	
	</form>
		<br>
		<center><a href="http://posgrados.tesi.org.mx"><input type="submit" name="validar" value="TERMINAR"></a></center>
		
		</CENTER>
		<div align="right">
		
		</div>
		
		
	
	<?php
	
	if(isset($_POST['validar'])){
		include('conexion.php');
		
		$folio=$_POST['folio'];
		$consulta="select certificados.id_certificado,certificados.id_alumno,certificados.num_registro,certificados.libro,certificados.fojas,certificados.fecha, alumnos.nombre_alumno,alumnos.apellido_p,alumnos.apellido_m from certificados
inner join alumnos on certificados.id_alumno=alumnos.matricula where id_certificado=$folio";
		

		
		$rsconsulta1=mysqli_query($conexion,$consulta);
		$rsconsulta=mysqli_fetch_assoc($rsconsulta1);
		$id_certificado=$rsconsulta['id_certificado'];
		
		
		if($folio==$id_certificado){
		$id_alumno=$rsconsulta['id_alumno'];
		$nombre=$rsconsulta['nombre_alumno'];
		$apellidoP=$rsconsulta['apellido_p'];
		$apellidoM=$rsconsulta['apellido_m'];
		$numero=$rsconsulta['num_registro'];
		$libro=$rsconsulta['libro'];
		$fojas=$rsconsulta['fojas'];
		$fecha=$rsconsulta['fecha'];
		
		
		echo'<script> alert("El Folio'.$folio.' Corresponde A: '.$nombre.' '.$apellidoP.' '.$apellidoM.' Con fecha de registro el '.$fecha.' y Numero de registro '.$numero.' en el Libro '.$libro.' Foja '.$fojas.' Certificado Validado por el Tecnologico de Estudios Superiores de Ixtapaluca.- Division de Posgrados.- Datos obtenidos de la base de datos de control escolar.-JCCR"); 
		window.location.href="http://posgrados.tesi.org.mx";
		</script>';
			
		}
			else{
				echo'<script> alert("El folio que se ingreso NO ES VALIDO o no se encuentra en las bases de datos de control escolar")
				window.location.href="http://posgrados.tesi.org.mx";
				</script>';
			}
		/*
		echo"El folio numero $folio    corresponde  a:<br>";
		echo"Nombre Alumno:  $nombre <br>";
		echo"Apellido Paterno: $apellidoP <br>";
		echo"Apellido Materno: $apellidoM <br>";
		echo"Numero de Registro: $numero <br>";
		echo"Libro de Registro:  $libro <br>";
		echo"A fojas:  $fojas <br>";
		echo"Fecha de Registro $fecha <br>";
		echo"</center>";
		*/
		
	}
		mysql_close('conexion.php');
		?>
	
	
</body>
</html>