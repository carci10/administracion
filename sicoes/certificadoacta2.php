<?php
session_start();
//CONTROL: CONEXIONES
require('fpdf.php');
include('clases/conexion.php');

$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/acta.jpg',7,8,200);

//Variables utilizadas
$clav=$_SESSION['usuario'];//clave del profesor
$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario
$parcial=$_REQUEST["periodo"];
$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
$clavemat=substr($valor,4,4);//Obtiene la materia de la cadena enviada por el formulario
$bd=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`


if($bd==1){
   $resasig=$sicoes2->query("SELECT Nombre FROM sicoes2.Materias WHERE MATERIA = '$clavemat' ");
}
if($bd==2){
   $resasig=$sicoesnvo->query("SELECT Nombre FROM sicoesnvo.Materias WHERE MATERIA = '$clavemat' ");
}

$arrnomat= $resasig->fetch_array(MYSQLI_ASSOC);
$materia=$arrnomat['Nombre'];
$per=$_SESSION['peri'];
//$consmateria="select Carrera from Materias where MATERIA='$clavemat';";//selecciona el nombre de la materia del profesor 

if($bd==1){
   $resmateria=$sicoes2->query("SELECT Carrera FROM sicoes2.Materias WHERE MATERIA = '$clavemat' ");
}
if($bd==2){
   $resmateria=$sicoesnvo->query("SELECT Carrera FROM sicoesnvo.Materias WHERE MATERIA = '$clavemat' ");
}

$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
$carr=$arrenommat['Carrera'];

//$consfolio=mysql_db_query("sicoes","select Folio from folioacta  where Materia='$clavemat' and Grupo='$grupo' and Maestro='$clav' and Parcial='$parcial' and Periodo='$per'");
$consfolio=$sicoes->query("SELECT Folio FROM sicoes.folioacta WHERE Materia='$clavemat' AND Grupo='$grupo' AND Maestro='$clav' AND Parcial='$parcial' AND Periodo='$per' ");
$arrefolio=$consfolio->fetch_array(MYSQLI_ASSOC);
$folio=$arrefolio['Folio'];

if($folio==""){
   echo "<script language=javascript>alert('No se han capturado calificaciones  no se puede genrar el acta')</script>";
   echo "<script language=javascript>self.location.href='destroy.php'</script>";
}
if($carr==07){
   $carrera="Ing. Sistemas";	
}
if($carr==36){
   $carrera="Ing. Informática";	
}
if($carr==01){
   $carrera="Lic. Administración";	
}
if($carr==20){
   $carrera="Ing. Electronica";	
}
if($carr==05){
   $carrera="Ing. Ambiental";	
}

$fecha=date("d-m-y");
$nombre=$_SESSION['nomprof'];
$pdf->SetFont('Arial','B',12);
$pdf->Ln(12);
$pdf->Cell(70);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,'Tipo de acta:'.$parcial);
$pdf->Ln(0);
$pdf->Cell(150);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,'Folio:'.$folio);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(9);
$pdf->Cell(32);
$pdf->Cell(150,30,"Asignatura:".$materia);
$pdf->Ln(0);
$pdf->Cell(145);
$pdf->Cell(150,30,"Clave:".$clavemat);
$pdf->Ln(7);
$pdf->Cell(32);
$pdf->Cell(150,30,"Período:".$per);
$pdf->Ln(0);
$pdf->Cell(62);
$pdf->Cell(150,30,"Grupo:".$grupo);
$pdf->Ln(0);
$pdf->Cell(92);
$pdf->Cell(150,30,"Carrera:".$carrera);
$pdf->Ln(0);
$pdf->Cell(135);
$pdf->Cell(150,30,"Fecha:".$fecha);
$pdf->Ln(15);
$pdf->Cell(65);
$pdf->Cell(150,30,"Nombre:".$nombre);
$pdf->Ln(4);
$pdf->Cell(65);
$pdf->Cell(150,30,"Clave:".$clav);

//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula in (select Matricula from Calif where Grupo='$grupo' and MATERIA='$clavemat' and Periodo='$per') ORDER BY ApellidoP,ApellidoM,Nombres";


if($bd==1){
   $matricula=$sicoes2->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoes2.Alumnos WHERE Matricula IN (SELECT Matricula FROM sicoes2.Calif WHERE Grupo='$grupo' AND MATERIA='$clavemat' AND Periodo='$per' ) ORDER BY ApellidoP,ApellidoM,Nombres ");
}
if($bd==2){
   $matricula=$sicoesnvo->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM sicoesnvo.Alumnos WHERE Matricula IN (SELECT Matricula FROM sicoesnvo.Calif WHERE Grupo='$grupo' AND MATERIA='$clavemat' AND Periodo='$per' ) ORDER BY ApellidoP,ApellidoM,Nombres ");
}

$a=1;
$pdf->Ln(15);
$rep=0;//total de reprobados
$totalum=0;//total de alumnos
$apo=0;//total de aprobados

while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
   $pdf->SetFont('Arial','B',7);
   $pdf->Ln(3);
   $pdf->Cell(17);
   $pdf->Cell(150,30,$a);
   $mat=$arrematri['Matricula'];
   $pdf->Ln(0);
   $pdf->Cell(33);
   $pdf->Cell(150,30,$mat);
   $app=$arrematri['ApellidoP'];
   $pdf->Ln(0);
   $pdf->Cell(60);
   $pdf->Cell(150,30,$app);
   $apm=$arrematri['ApellidoM'];
   $pdf->Ln(0);
   $pdf->Cell(79);
   $pdf->Cell(150,30,$apm);
   $name=$arrematri['Nombres'];
   $pdf->Ln(0);
   $pdf->Cell(96);
   $pdf->Cell(150,30,$name);

   //$consulcalif="select $parcial from Calif where Matricula='$mat' and Grupo='$grupo' and MATERIA='$clavemat' and Periodo='$per'";
   
   if($bd==1){
      $rescons=$sicoes2->query("SELECT $parcial FROM sicoes2.Calif WHERE Matricula='$mat' AND Grupo='$grupo' AND MATERIA='$clavemat' AND Periodo='$per' ");
   }
   if($bd==2){
      $rescons=$sicoesnvo->query("SELECT $parcial FROM sicoesnvo.Calif WHERE Matricula='$mat' AND Grupo='$grupo' AND MATERIA='$clavemat' AND Periodo='$per' ");
   }

   $arrecons=$rescons->fetch_array(MYSQLI_ASSOC);
   $cal=$arrecons[$parcial];
   $totalum=$totalum+1;//Acumular los alumnos

   if($cal<7 || $cal==11){//Para acumular los reprobados
      $rep=$rep+1;   //Acumula los reprobados
   }
   if($cal>6 && $cal<11){//Para acumular los reprobados
   	$apo=$apo+1;   //Acumula los reprobados
   }
   if($cal==11){
      $cal="NP";
      $letra="NP";

      $pdf->Ln(0);
      $pdf->Cell(141);
      $pdf->Cell(150,30,$cal);
      $pdf->Ln(0);
      $pdf->Cell(161);
      $pdf->Cell(150,30,$letra);
   }else{
      if($cal==0){
      	$letra="CERO";   
      }
      if($cal==1){
      	$letra="UNO";   
      }
      if($cal==2){
      	$letra="DOS";   
      }
      if($cal==3){
      	$letra="TRES";   
      }
      if($cal==4){
      	$letra="CUATRO";   
      }
      if($cal==5){
      	$letra="CINCO";   
      }
      if($cal==6){
      	$letra="SEIS";   
      }
      if($cal==7){
      	$letra="SIETE";   
      }
      if($cal==8){
      	$letra="OCHO";   
      }
      if($cal==9){
      	$letra="NUEVE";   
      }
      if($cal==10){
      	$letra="DIEZ";   
      }
   $pdf->Ln(0);
   $pdf->Cell(141);
   $pdf->Cell(150,30,$cal);
   $pdf->Ln(0);
   $pdf->Cell(161);
   $pdf->Cell(150,30,$letra);
   }
   $a=$a+1;
}

$porrep=($rep*100)/$totalum;
$porapo=($apo*100)/$totalum;

$pdf->Ln(5);
$pdf->Cell(79);
$pdf->Cell(150,30,"Total de alumnos:".$totalum);
$pdf->Ln(3);
$pdf->Cell(79);
$pdf->Cell(150,30,"Total de reprobados:".$rep);
$pdf->Ln(3);
$pdf->Cell(79);
$pdf->Cell(150,30,"Porcentaje de reprobación:".$porrep);
$pdf->Ln(3);
$pdf->Cell(79);
$pdf->Cell(150,30,"Total de aprobados:".$apo);
$pdf->Ln(3);
$pdf->Cell(79);
$pdf->Cell(150,30,"Porcentaje de aprobación:".$porapo);
$pdf->Output();

?>