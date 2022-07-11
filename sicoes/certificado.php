<?php
session_start();
$matricula=$_SESSION['matri'];
$nombre=$_SESSION['nombre'];
$app=$_SESSION['app'];
$apm=$_SESSION['apm'];


require('fpdf.php');
//CONTROL: CONEXIONES
include('clases/conexion.php');


$consulta2=$sicoes->query("SELECT Clave FROM sicoes.claves WHERE Matricula='$matricula'");
$arreglo2=$consulta2->fetch_array(MYSQLI_ASSOC);

$clav=$arreglo2["Clave"];

$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/clave.jpg',7,8,200);
//$pdf->Image('images/logoedo.jpg',10,8,20);

/*$pdf->SetFont('Arial','B',12);
$pdf->Cell(25);
$pdf->Cell(150,10,"TECNOLOGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA");
$pdf->SetFont('Arial','B',8);
$pdf->Ln(0);
$pdf->Cell(47);
$pdf->Cell(150,30,"Organismo Público Descentralizado del Estado de México");
$pdf->Image('images/logo.jpg',170,8,20);*/
$pdf->SetFont('Arial','B',12);
//$pdf->Image('images/barrarep.jpg',18,31,190);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(150,30,"DATOS DEL ALUMNO");
$pdf->Ln(10);
$pdf->Cell(60);

$pdf->Cell(150,30,"Nombre:".$nombre);
$pdf->Ln(5);
$pdf->Cell(60);
$pdf->Cell(150,30,"Apellido Paterno:".$app);
$pdf->Ln(5);
$pdf->Cell(60);
$pdf->Cell(150,30,"Apellido Materno:".$apm);
$pdf->Ln(5);
$pdf->Cell(60);
$pdf->Cell(150,30,"Matricula:".$matricula);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(7);
$pdf->Cell(55);
$pdf->Cell(150,30,"Verifica que tus datos personales sean correctos");
//$pdf->Image('images/barrarep.jpg',18,75,190);
/*$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(90,30,"CLAVE DE REGISTRO");
$pdf->SetFont('Arial','',7);
$pdf->Ln(5);
$pdf->Cell(11);
$pdf->Cell(150,30,"La siguiente clave es de uso personal e intransferible, con esta clave el alumno debe acceso al portal de inscripciones y registrarse.");
$pdf->SetFont('Arial','',7);
$pdf->Ln(3);
$pdf->Cell(11);
$pdf->Cell(150,30,"La dirección del portal es http://tesi.gob.mx una vez dentro del portal deberás accesar en la opción de regístrate.");

$pdf->Ln(3);
$pdf->Cell(11);
$pdf->Cell(150,30,"Proporciona tu matricula y la calve que se encuentra en este documento, y continua con el proceso de registro.");

$pdf->Ln(3);
$pdf->Cell(11);
$pdf->Cell(150,30,"Una vez concluido el registro, debes acceder con  tu usuario y contraseña para realizar tu reinscripción.");

$pdf->Ln(3);
$pdf->Cell(11);
$pdf->Cell(150,30,"Cualquier anomalía en tu proceso de registro, favor de reportarlo al departamento de Control Escolar.");*/

$pdf->SetFont('Arial','B',10);
$pdf->Ln(110);
$pdf->Cell(70);
$pdf->Cell(90,30,"CLAVE PERSONAL:".$clav);

$pdf->Output();

//}
//}
?>
