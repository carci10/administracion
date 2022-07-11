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

</html>

