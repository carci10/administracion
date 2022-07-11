<?php
session_start();
?>
<html>
<center>
  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
  <?php
  include('conexion.php');
$nombres=$_REQUEST['nombres'];
$apePaterno=$_REQUEST['apePaterno'];
$apeMaterno=$_REQUEST['apeMaterno'];
$telCelular=$_REQUEST['telCelular'];
$telEmergencia=$_REQUEST['telEmergencia'];
$correo=$_SESSION["correo"];
$fechaNacimiento=$_REQUEST['fechaNacimiento'];
$curp=$_REQUEST['curp'];
$sexo=$_REQUEST['sexo'];
$carrera=$_REQUEST['carrera'];
$especialidad=$_REQUEST['especialidad'];
$calle=$_REQUEST['calle'];
$numero=$_REQUEST['numero'];
$colonia=$_REQUEST['colonia'];
$escProcedencia=$_REQUEST['escProcedencia'];
$carrera_cursada=$_REQUEST['carrera_aspirante'];
$trabaja=$_REQUEST['trabaja'];
$trabajo_actual=$_REQUEST['trabajo_actual'];
$puesto=$_REQUEST['puesto'];

//--------------------------

$verifica_existencia="select curp  from aspirante where curp='$curp'";
$result=mysqli_query($conexion,$verifica_existencia);
	$row=mysqli_fetch_assoc($result);
	$curp_almacenados=$row['curp'];
	
	
if($curp_almacenados==$curp)
{
	echo "<center>USUARIO REGISTRADO ANTERIORMENTE  </center><br>";
	 header('location: aspirante_registrado.php');

}
else{
//--------------------------
$inserta="INSERT INTO aspirante (nombre,apellido_p,apellido_m,celular,telefono_casa,correo,fecha_nac,curp,sexo,carrera,especialidad,calle,numero,colonia,escuela_proc,carrera_cursada,trabaja,trabajo_actual,puesto)VALUES('$nombres','$apePaterno','$apeMaterno','$telCelular','$telEmergencia','$correo','$fechaNacimiento','$curp','$sexo','$carrera',$especialidad,'$calle',$numero,'$colonia','$escProcedencia','$carrera_cursada','$trabaja','$trabajo_actual','$puesto')";

	//echo($inserta);
$rsingresa = mysqli_query($conexion,$inserta);
if($rsingresa)
{
	$actualiza_estatus_usuario="update usuario set estatus=1 where correo_usuario='$correo'";
	$actualizado = mysqli_query($conexion,$actualiza_estatus_usuario);
	if($actualizado) {
		echo"<center>";
		echo"-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_<br>";
		echo"Se actualizo el estatus del registro del apsirante correctamente <br>";
	}
	
    session_destroy();
	printf( "Registro almacenado en BD para continuar con el proceso ahora debes obtener tu cita, misma que es el sigueinte paso en el proceso de eleccion de aspirantres de nuevo ingreso a la Maestria<br> <br> <br>");
	echo' <a href="login.html">"'.$nombres.'"  Obtenen tu cita</a>';
	echo"<center>";
	}
}
?>
  



</html>

