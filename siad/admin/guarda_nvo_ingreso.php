<?php 
include ('conexion.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guarda Nuevo Ingreso</title>
</head>

<body>


<center>
  <img src="../../imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<?php
	
	   if(isset($_POST['gen_matricula']))
	   {
		   $folio=	$_POST['folio'];
		   $nombre=$_POST['nombre'];
		   $apellido_p=$_POST['apellido_p'];
		   $apellido_m=$_POST['apellido_m'];
		   $turno=$_POST['turno'];
		   //$grupo=$_POST['grupo'];
		   $anual=$_POST['anual'];
		   $carrera=$_POST['carrera'];
		   $plan=$_POST['plan'];
		   
		   $clave=mysqli_query($conexion,"select clave_carrera from carreras where id_carrera=$carrera");
		   $rsclave=mysqli_fetch_assoc($clave);
		   $clave_carrera=$rsclave['clave_carrera'];
		   
		   $matricula=$anual.$clave_carrera.$folio;
		   
		   
		
		  $consulta = mysqli_query($conexion,"select folio_aspirante from folios where folio_aspirante=$folio");
			$rsconsulta=mysqli_fetch_assoc($consulta);
		    $folio_guardado=$rsconsulta['folio_aspirante'];
			   		echo $folio_guardado;
 
		 				if($folio_guardado==$folio)  
		 					{
			 				 $actualiza="update folios set folio_aspirante=$folio,estatus_aspirante=0,matricula=$matricula,id_plan=$plan,id_turno=$turno";
							 $rsactualiza=mysqli_query($conexion,$actualiza);
							 if($rsactualiza)
								 echo"<center>-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_- </center><br><br>";   
								echo"<center>NOMBRE: $nombre  $apellido_p  $apellido_m</center><br>";
								echo"<center>FOLIO: $folio  CARRERA: $carrera </center><br>";
								echo"<center><strong>MATRICULA GENERADA :$matricula </strong></center>";
								echo" <a href='formnvo_ingreso.php'><center><input type='submit' name='gen_matricula' value='¡LISTO!'></center></a>";
		   						
								 
		 					}
				
		  
			else{
		 		$inserta=mysqli_query($conexion,"insert into folios(folio_aspirante,estatus_aspirante,matricula,id_plan,id_turno)values($folio,0,'$matricula',$plan,$turno)");  
				
		   				if ($inserta){
			   
			   					echo"<center>-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_- </center><br><br>";   
								echo"<center>NOMBRE: $nombre  $apellido_p  $apellido_m</center><br>";
								echo"<center>FOLIO: $folio  CARRERA: $carrera </center><br>";
								echo"<center><strong>MATRICULA GENERADA :$matricula </strong></center>";
								echo" <a href='formnvo_ingreso.php'><center><input type='submit' name='gen_matricula' value='¡LISTO!'></center></a>";
		   						}
		   
	     					}		
	   	   
	   		}
	 
	   ?>



</body>
</html>