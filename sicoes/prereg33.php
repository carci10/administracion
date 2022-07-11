<?php

session_start();
$folio=$_SESSION['folio'];
include ('clases/conexion.php');
include ('clases/leerparcial.php');
$usuario=$_SESSION['usuario'];
//$conect=odbc_connect("sicoes","","");
?>
<html>

  <?php

//$conexion=odbc_connect("sicoesnvo","","");
$nombres=$_REQUEST['nombres'];
$apePaterno=$_REQUEST['apePaterno'];
$apeMaterno=$_REQUEST['apeMaterno'];
$carrera=$_REQUEST['carrera'];
$calle=$_REQUEST['calle'];
$numero=$_REQUEST['numero'];
$numInterior=$_REQUEST['numInterior'];
$estado=$_REQUEST['estado'];
$municipio=$_REQUEST['municipio'];
$colonia=$_REQUEST['colonia'];
$entreCalle=$_REQUEST['entreCalle'];
$iCalle=$_REQUEST['iCalle'];
$refDomicilio=$_REQUEST['refDomicilio'];
$localidad=$_REQUEST['localidad'];
$cp=$_REQUEST['cp'];
$telefono=$_REQUEST['telefono'];
$telCelular=$_REQUEST['telCelular'];
$telEmergencia=$_REQUEST['telEmergencia'];
$correo=$_REQUEST['correo'];
$civil=$_REQUEST['civil'];
$fechaSoli=$_REQUEST['fechaSoli'];
$fechaIngreso=$_REQUEST['fechaIngreso'];
$fechaNacimiento=$_REQUEST['fechaNacimiento'];
$tipoSangre=$_REQUEST['tipoSangre'];
$curp=$_REQUEST['curp'];
$lugarNac=$_REQUEST['lugarNac'];
$sexo=$_REQUEST['sexo'];
$nacionalidad=$_REQUEST['nacionalidad'];
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
$promBachillerato=$_REQUEST['promBachillerato'];
$añoEgreso=$_REQUEST['añoEgreso'];
$folioife=$_REQUEST['folioife'];
$folioifetutor=$_REQUEST['folioifetutor'];
$edadtutor=$_REQUEST['edadtutor'];


$consulta=$sicoesnvo->query("select matricula from sicoes.nvo_ingreso where FOLIO=$folio");
while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) //SE ACCESA AL DATO POR MEDIO DE LA REFERENCIA                      DE LA COLUMNA
       {
$matri=$row['matricula'];	

}

$sicoes->query("insert into sicoes.alumnos values('$matri','$nombres','$apePaterno','$apeMaterno','$carrera','$calle','$numero','$numInterior','$estado','$municipio','$colonia','$entreCalle','$iCalle','$refDomicilio','$localidad','$cp','$telefono','$telCelular','$telEmergencia','$correo','$civil','$fechaSoli','$fechaIngreso','$fechaNacimiento','$tipoSangre','$curp','$lugarNac','$sexo','$nacionalidad','$computadora','$internet','$idioma','$qidioma','$informacion','$padre','$madre','$escProcedencia','$munPro','$nomEscProcedencia','$promBachillerato','$añoEgreso','$folioife','$folioifetutor','$edadtutor')");

$sicoes->query("insert into sicoesnvo.Alumnos (Matricula,Nombres,ApellidoP,ApellidoM,CARRERA,Calle,NumE,NumI,Colonia,MunDel,Entidad,CodPos,Teléfono,EdoCiv,FechaS,FechaI,FechaN,TipoS,Curp,SEXO,TescP,EscPro,PromB,Munpro,LugarN,AnoE,correo) values('$matri','$nombres','$apePaterno','$apeMaterno','$carrera','$calle','$numero','$numInterior','$colonia','$municipio','$estado','$cp','$telefono','$civil','$fechaSoli',$fechaIngreso,$fechaNacimiento,'$tipoSangre','$curp','$sexo','$escProcedencia','$nomEscProcedencia',$promBachillerato,'$munPro','$lugarNac','$añoEgreso','$correo')");

$sicoes->query("update sicoes.nvo_ingreso set Estado=1 where FOLIO=$folio");
?>

</p>
<p>A continuaci&oacute;n se colocan los datos personales de tu registro que te ayudaran a continuar con el proceso de inscripci&oacute;n de nuevo ingreso</p>
<p>

<?php
echo "Nombre del alumno registrado:".$nombres."  ".$apePaterno."  ".$apeMaterno."<br>";
echo "Matricula del alumno:". $matri."<br>";
echo "Folio del alumno:".$folio."Verifica que el folio sea el mismo que se te proporciono en control escolar<br>";
echo "Para continuar con el proceso de preinscripción, deberas ingresar en la pagina principal www.tesi.org.mx<br>
y colocar tu usuario y contraseña los cuales son los siguientes:<br>
Usuario:al".$folio;
$password=rand(1000,999999);
echo "<br> Contraseña:".$password."<br>";
echo "Ingresa con este usuario y contraseña en la pagina principal para continuar con el proceso de preinscripción";
$sicoes->query("insert into sicoes.usuarios values('$matri','$folio','$password',4,'$nom')");


session_destroy();
?></p>
</p>
  <center>
  <a href="index.php"><img src="images/salir.jpg" width="56" height="70"></a><br>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf">
    <param name="quality" value="high">
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="100" ></embed>
</object><br>
</p>
<div align="center"> </div>



</html>

