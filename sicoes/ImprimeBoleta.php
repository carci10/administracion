<?php
session_start();
    //-----------------------------------------------------------------------------------
    //    Ejemplo básico de utilización de fPDF
    //-----------------------------------------------------------------------------------
    require('fpdf.php');
	include('clases/conexion.php');
    $pdf=new FPDF();
    $pdf->AddPage();
	$pdf->SetMargins(20,20,20); 
	$pdf->Image('images/hojadeatras.jpg',7,8,200);
	//$pdf->Image('images/HojaBoleta.jpg',7,8,200);
$fecha=date("d-m-y");
$matricula=$_SESSION['matricula'];

$resasig=mysqli_query($conexion,"select avg(calificacion) as promedio,COUNT(*) as registros from calificaciones as a inner join materias as b on a.id_materia=b.id_materia where matricula='$matricula'");
$arrnomat= mysqli_fetch_assoc($resasig);
$Semestre=$arrnomat['promedio']; echo $Semestre;
$TotaldeMaterias=$arrnomat['registros'];
$PromedioGeneral=['promedio'];
//$PromedioGeneral= substr($Promedio, 0, 3);
//daatos del alumno
$DatosAlumno=mysqli_query($conexion,"select nombre_alumno,apellido_p,apellido_m,id_carrera from alumnos where matricula='$matricula'");
 $arrnomat1=mysqli_fetch_assoc($DatosAlumno);
 $NombreCompleto= $arrnomat1["nombre_alumno"]." ".$arrnomat1["apellido_p"]." ".$arrnomat1["apellido_m"];
 $Carrera=$arrnomat1["id_carrera"];
 $DatosAlumnoCreditos=mysqli_query($conexion,"select sum(creditos_practicos) as creditoscubiertos
from materias as a inner join calificaciones as b on a.id_materia=b.id_materia where matricula='$matricula'");
 $arrnomat2= mysqli_fetch_assoc($DatosAlumnoCreditos);
 $CreditosCubiertos=$arrnomat2["creditoscubiertos"];
 //selecciona materias aprobadas
 



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
//Calificaciones del Alumno
$Historial=mysqli_query($conexion,"select a.id_materia,a.id_periodo,a.id_tipoe,a.calificacion, (b.creditos_teoricos+b.creditos_practicos) as creditostotales,b.nombre_materia
from calificaciones as a
inner join materias as b on a.id_materia=b.id_materia where matricula='$matricula' order by id_materia asc");
 
 
	$pdf->Ln(0);
 	$pdf->Cell(13);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(180,10,'','C');
	$pdf->Ln(10);
	$pdf->Cell(220,10,'                                            ','C');
	$pdf->Ln(8);
	$pdf->SetFont('Arial','B',07);
	$pdf->Cell(180,10,'NOMBRE:  '.$NombreCompleto.'      																										               					                   		                            MATRÍCULA:	  '.$matricula,'C');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',07);
	$pdf->Cell(180,10,'CARRERA:  '.$CarreraBuena.'      																										               					                   		                        										 					 			  PROMEDIO:	  '.$PromedioGeneral,'C' );
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',07);
	$pdf->Cell(180,10,'CREDITOS:   '.'      																										               											            											     																											FECHA:	  '.$fecha,'C');
	$pdf->Ln(5);
	$pdf->Cell(5);
$pdf->Cell(150,30,"Clave     Cred           Materia");
$pdf->Ln(0);
$pdf->Cell(115);
$pdf->Cell(150,30,"PER");
$pdf->Ln(0);
$pdf->Cell(108);
$pdf->Cell(150,30,"ORD");
$pdf->Ln(0);
$pdf->Cell(122);
$pdf->Cell(150,30,"EXT");
$pdf->Ln(0);
$pdf->Cell(132);
$pdf->Cell(150,30,"REC");
$pdf->Ln(0);
$pdf->Cell(147);
$pdf->Cell(150,30,"INT");
$pdf->Ln(0);
$pdf->Cell(158);
$pdf->Cell(150,30,"SUF");
	
	
	
	
	
	
	
	
	$contar=1;
	$ValidaDescuento=0;
$resultado=mysqli_query("SELECT id_materia,calificacion,id_periodo FROM calificaciones WHERE matricula='$matricula'");	
//checamos q este correcto
 while($arreglo34 = $resultado->fetch_array(MYSQLI_ASSOC)){
    
    //echo "<tr>";
    $dato=$arreglo34['id_materia'];
    $dato1=$arreglo34['calificacion'];
	$Periodo=$arreglo34['id_periodo'];
    $brinca=substr($dato,1,1);
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';";
    $resultado2=mysqli_query($conexion,"SELECT nombre_materia,(creditos_practicos+creditos_teoricos) as ct FROM materias WHERE id_mateia='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    $dat=$arreglo1['nombre_materia'];
    $dat1=$arreglo1['ct'];

	
    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
    $resultado3=$mysqli_query("SELECT * FROM calificaciones WHERE id_materia='$dato' AND matricula='$matricula'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['id_tipoe'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=mysqli_query($conexion,"SELECT calificacion FROM calificaciones WHERE matricula = '$matricula' AND id_materia = '$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      
    }
    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }
  
  if($brinca<>$contar)
  {
  $pdf->Ln(4);
  $contar=$brinca;
  
  }
    
  $pdf->Ln(3);
$pdf->Cell(7);
$pdf->Cell(150,30," ".$dato."   ".$dat1. "      ".$dat);
$pdf->Ln(0);
$pdf->Cell(115);
$pdf->Cell(150,30,$Periodo);
$pdf->Ln(0);
$pdf->Cell(111);
$pdf->Cell(150,30,$dato1);
$pdf->Ln(0);
$pdf->Cell(122);
$pdf->Cell(150,30,$dato2);
$pdf->Ln(0);
$pdf->Cell(132);
$pdf->Cell(150,30,$dato3);
$pdf->Ln(0);
$pdf->Cell(147);
$pdf->Cell(150,30,$dato4);
$pdf->Ln(0);
$pdf->Cell(155);
$pdf->Cell(150,30,$dato5);
  if($dato1<=6 and $dato2 <= 6 and $dato3 <= 6 and $dato4 <= 6 and $dato5<=6 ){
  $ValidaDescuento=1;
  }
   
  
  
   
  }
  
   
  
  
if($datos22 > '6'){
$pdf->Ln(12);

}else
{
$pdf->Ln(12);
}  












if($ValidaDescuento<>0){
$mensaje="0% TIENE MATERIAS REPROBADAS";
}else{
if($PromedioGeneral<=8.9 and $PromedioGeneral>=8.0){
$mensaje="33%";
}else{
if($PromedioGeneral<=9.4 and $PromedioGeneral>=9.0){
$mensaje="50%";
}else{
if($PromedioGeneral<=10 and $PromedioGeneral>=9.5){
$mensaje="100%";
}else{
if($PromedioGeneral<8.0){
$mensaje="0% NO CUMPLES CON EL PROMEDIO MÍNIMO";
}
}
}
}
}


 $pdf->Ln(8);
 $pdf->Cell(10);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(150,30,"USTED TIENE DESCUENTO DEL  ".$mensaje."  TU PROMEDIO ES ". $PromedioGeneral);
 
	$pdf->Output();
	
?>
<?
echo"<script>alert('Usted esta siendo redireccionado a la pagina principal')</script>"; 
?>	