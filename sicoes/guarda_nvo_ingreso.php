<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guarda Nuevo Ingres</title>
</head>

<body>


<center><img src="images/logocbt.jpg" width="373" height="135" /></center>
<?php
	   if(isset($_POST['gen_matricula']))
	   {
		   include('clases/conexion.php');
		   $folio=	$_POST['folio'];
		   $nombre=$_POST['nombre'];
		   $apellido_p=$_POST['apellido_p'];
		   $apellido_m=$_POST['apellido_m'];
		   $turno=$_POST['turno'];
		   //$grupo=$_POST['grupo'];
		   $año=$_POST['año'];
		   $carrera=$_POST['carrera'];
		   $matricula=$año.$carrera.$folio;
        echo"<center>-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_- </center><br><br>";   
		echo"<center>NOMBRE: $nombre  $apellido_p  $apellido_m</center><br>";
		echo"<center>FOLIO: $folio  CARRERA: $carrera </center><br>";
		echo"<center><strong>MATRICULA GENERADA :$matricula </strong></center>";
		echo" <a href='formnvo_ingreso.php'><center><input type='submit' name='gen_matricula' value='¡LISTO!'></center></a>";
	   }
		
		
	   ?>



</body>
</html>