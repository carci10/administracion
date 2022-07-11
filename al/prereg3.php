<?php
session_start();
$folio=$_SESSION['folio'];
include ('clases/conexion.php');
include ('clases/leerparcial.php');
//include ('obtener_folio.php');
//$usuario=$_SESSION['usuario'];
//$conect=odbc_connect("sicoes","","");
?>
<html>
	
<?php
//$conexion=odbc_connect("sicoesnvo","","");
$matricula=$_REQUEST['matricula'];
$nombres_o=$_REQUEST['nombres'];
	$nombres =ucwords(strtolower($nombres_o));
$apePaternoo=$_REQUEST['apePaterno'];
	$apePaterno =ucwords(strtolower($apePaternoo));
$apeMaternoo=$_REQUEST['apeMaterno'];
	$apeMaterno =ucwords(strtolower($apeMaternoo));
$nacionalidado=$_REQUEST['nacionalidad'];
	$nacionalidad =ucwords(strtolower($nacionalidado));
$calleo=$_REQUEST['calle'];
	$calle =ucwords(strtolower($calleo));
$estado=$_REQUEST['estado'];
$municipio=$_REQUEST['municipio'];
$colonia=$_REQUEST['colonia'];

	$numero=$_REQUEST['numero'];
	$numero_int=$_REQUEST['numero_int'];
$telefono=$_REQUEST['telEmergencia'];
$telCelular=$_REQUEST['telCelular'];
$curp=$_REQUEST['curp'];
$sexo=$_REQUEST['sexo'];
$fechaNacimiento=$_REQUEST['fechaNacimiento'];
$promBachillerato=$_REQUEST['promedio_anterior'];
$carrera=$_REQUEST['carrera'];
$fechaIngreso=$_REQUEST['fechaIngreso'];
$periodo_inicio=$_REQUEST['periodo'];
$turno=$_REQUEST['turno'];
$plan=$_REQUEST['plan'];
$especialidad=$_REQUEST['especialidad'];
$correo=$_POST['correo'];
$semestre=1;
/*
$lugarNac=$_REQUEST['lugarNac'];
$numInterior=$_REQUEST['numInterior'];
$entreCalle=$_REQUEST['entreCalle'];
$iCalle=$_REQUEST['iCalle'];
$refDomicilio=$_REQUEST['refDomicilio'];
$localidad=$_REQUEST['localidad'];
$cp=$_REQUEST['cp'];
$telEmergencia=$_REQUEST['telEmergencia'];
$civil=$_REQUEST['civil'];
$fechaSoli=$_REQUEST['fechaSoli'];
$tipoSangre=$_REQUEST['tipoSangre'];
$computadora=$_REQUEST['computadora'];
$internet=$_REQUEST['internet'];
$idioma=$_REQUEST['idioma'];
$qidioma=$_REQUEST['qidioma'];
$informacion=$_REQUEST['informacion'];
$padre=$_REQUEST['padre'];
$madre=$_REQUEST['madre'];
$escProcedencia=$_REQUEST['escProcedencia'];
$nomEscProcedencia=$_REQUEST['nomEscProcedencia'];
$munPro=$_REQUEST['munPro'];
$añoEgreso=$_REQUEST['añoEgreso'];
$folioife=$_REQUEST['folioife'];
$folioifetutor=$_REQUEST['folioifetutor'];
$edadtutor=$_REQUEST['edadtutor'];


$consulta=mysqli_query($conexion,"select * from folios where folio_aspirante=$folio");
while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) //SE ACCESA AL DATO POR MEDIO DE LA REFERENCIA DE LA COLUMNA
       {
$matri=$row['matricula'];	
$turno=$row['turno'];
$plan=$row['plan_estudios'];
$ano_inicio=$row['año_inicio'];
}
*/

$ingresa_alumno="insert into alumnos (matricula,nombre_alumno,apellido_p,apellido_m,nacionalidad_alumno,id_entidad,id_municipio,id_colonia,calle,numero_exterior,numero_interior,telefono_movil,telefono_casa,curp,sexo,fecha_nac,prom_bachillerato,id_carrera,fecha_inicio,id_periodo,id_turno,id_plan,id_especialidad,correo,semestre_actual)values('$matricula','$nombres','$apePaterno','$apeMaterno','$nacionalidad','$estado','$municipio','$colonia','$calle','$numero','$numero_int','$telCelular','$telefono','$curp','$sexo','$fechaNacimiento','$promBachillerato','$carrera','$fechaIngreso','$periodo_inicio','$turno','$plan','$especialidad','$correo','$semestre')";

//echo $ingresa_alumno;
	
$rsinserta=mysqli_query($conexion,$ingresa_alumno);
if($rsinserta)	
	$rsactualiza_folio=mysqli_query($conexion,"update folios set estatus_aspirante=1 where folio_aspirante=$folio");
?>

</p>
<center><img src="images/Logophp.jpg" width="1152" height="164" alt=""/></center>
<p>A continuacion se colocan los datos personales de tu registro que te ayudaran a continuar con el proceso de inscripcion de nuevo ingreso</p>
<p>

<?php
	if($rsinserta){
echo "Nombre del alumno registrado:".$nombres."  ".$apePaterno."  ".$apeMaterno."<br>";
echo "Matricula del alumno:". $matricula."<br>";
echo "Folio del alumno: ".$folio." Verifica que el folio sea el mismo que se te proporciono en tu preregistro en linea como aspirante. <br>";
echo "Para continuar con el proceso de preinscripcion, deberas ingresar en la pagina principal www.posgrados.tesi.org.mx<br>
y colocar tu usuario y contrasena  los cuales son los siguientes: !!Recuerda apuntarlos!! <br>
<strong>Usuario:al".$folio."</strong>";
$password=rand(1000,999999);
echo "<br> <strong> Contrasena:".$password."</strong> <br>";
echo "Ingresa con este usuario y contrasena en la pagina principal para continuar con el proceso de preinscripcion";
		
		//consulta si existe el usuario mediante la matricula del alumno en la tabla aesta como Codigo
		$consul="select Codigo from usuarios where Codigo='$matricula'";
		$consulta=mysqli_query($conexion,$consul);
		$rsconsulta=mysqli_fetch_assoc($consulta);
		$mat_almacenada=$rsconsulta['Codigo'];
		
		if($mat_almacenada==$matricula){
			echo("El alumno ya cuenta con usuario y contraseña por lo que debera solicitarla en el depto. correspondiente");
		} else{
		
		mysqli_query($conexion,"insert into usuarios (nombreUsuario,PassUsuario,NivelUsuario,Codigo) values('al$folio','$password',3,'$matricula')"); 
		
						}
	
	
		} else("Hay un problema con la insercion y se debe  notificar a Mtro. Cisneros");

session_destroy();
?></p>
  <center>
  <a href="index.php"><img src="images/salir.jpg" width="56" height="70"></a><br><br>
</p>
<div align="center"> </div>




</html>

