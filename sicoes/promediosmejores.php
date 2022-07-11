<?php


session_start();
    //-----------------------------------------------------------------------------------
    //    Ejemplo básico de utilización de fPDF
    //-----------------------------------------------------------------------------------
    require('fpdf.php');
	include ('clases/conexion.php');
include ('clases/leerparcial.php');
	//$pdf->Image('images/HojaBoleta.jpg',7,8,200);
$fecha=date("d-m-y");
$matricula=$_SESSION['matricula'];

$resultado=$sicoes2->query("select Matricula from sicoesnvo.Kardex group by Matricula");
	
while($arreglo34 = $resultado->fetch_array(MYSQLI_ASSOC)){
 $matricula1=$arreglo34['Matricula'];

$resasig=$sicoesnvo->query("select sum(a.Defin) as promedio,COUNT(*) as registros from kardex as a inner join sicoesnvo.materias as b on a.MATERIA=b.MATERIA where Matricula='$matricula1'");
$arrnomat= $resasig->fetch_array(MYSQLI_ASSOC);
$Semestre=$arrnomat['promedio'];
$TotaldeMaterias=$arrnomat['registros'];
$Promedio= $Semestre/$TotaldeMaterias;
$PromedioGeneral= substr($Promedio, 0, 3);
//daatos del alumno
$DatosAlumno=$sicoesnvo->query("select Nombres,ApellidoP,ApellidoM,CARRERA from sicoesnvo.alumnos where Matricula='$matricula1'");
 $arrnomat1= $DatosAlumno->fetch_array(MYSQLI_ASSOC);
 $NombreCompleto= $arrnomat1["Nombres"]." ".$arrnomat1["ApellidoP"]." ".$arrnomat1["ApellidoM"];
 $Carrera=$arrnomat1["CARRERA"];
 $DatosAlumnoCreditos=$sicoesnvo->query("select sum(b.Cred) as creditoscubiertos from kardex as a inner join sicoesnvo.materias as b on a.MATERIA=b.MATERIA where Matricula='$matricula1'");
 $arrnomat2= $DatosAlumnoCreditos->fetch_array(MYSQLI_ASSOC);
 
 
 $CreditosCubiertos=$arrnomat2["creditoscubiertos"];
 if($Carrera==07){
   $CarreraBuena="Ing. Sistemas";	
}
if($Carrera==36){
   $CarreraBuena="Ing. Informática";	
}
if($Carrera==01){
   $CarreraBuena="Lic. Administración";	
}
if($Carrera==20){
   $CarreraBuena="Ing. Electrónica";	
}
if($Carrera==05){
   $CarreraBuena="Ing. Ambiental";	
}
if($Carrera==06){
   $CarreraBuena="Arquitectura";	
}
 

  $sicoes->query("insert into sicoesnvo.promedios values('$matricula1','$PromedioGeneral','$CarreraBuena')");
?>
<br>
<?php
 
  
  }
 ?>