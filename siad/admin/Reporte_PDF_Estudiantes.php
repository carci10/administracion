<?php

require('fpdf/fpdf.php');
require('conexion.php');

class PDF extends FPDF
{
function Header()
{


	$this->Image('../imagenes/logoSIAD.png' , 10 ,10, 40 , 20,'PNG');
	$this->SetFont('Arial','B',20);
	$this->Cell(160);
	$this->Cell(50,20,'Reporte de Estudiantes',0,0,'C');
	$this->Ln(15);
	$this->SetFont('Arial','B',10);
	$this->Cell(300);
	$this->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0, 'R');
	$this->Ln(10);
		 // Colores de los bordes, fondo y texto
    $this->SetDrawColor(222,227,221);
     $this->SetFillColor(200,220,255);
   // $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
   // $this->SetLineWidth(1);

	$this->Cell(10, 8, 'No.' ,1,0,'C');
	$this->Cell(20, 8, 'Carnet' ,1,0,'C');
	$this->Cell(30, 8, 'Nombres' ,1,0,'C');
	$this->Cell(30, 8, 'Apellido Pat.' ,1,0,'C');
	$this->Cell(30, 8, 'Apellido Mat.' ,1,0,'C');
	$this->Cell(50, 8, 'Email' ,1,0,'C');
	$this->Cell(20, 8, 'Celular' ,1,0,'C');
	$this->Cell(20, 8, 'Telefono' ,1,0,'C');
	$this->Cell(50, 8, 'Carrera' ,1,0,'C');
	$this->Cell(30, 8, 'CURP   ' ,1,0,'C');
	$this->Ln(8);
}
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	$this->SetFont('Arial','I',8);
	$this->Cell(0,10,'Pagina '.$this->PageNo().' / {nb}',0,0,'C');
}
}
// Creación del objeto de la clase heredada
//$pdf = new PDF();
$pdf = new PDF('L','mm','legal'); //Tamaño en forma Horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf = new FPDF('L','mm','legal'); //Tamaño en forma Horizontal
//$pdf = new FPDF('P','mm','letter'); //Tamaño Normal
//$pdf->AddPage();
//$title = 'Reporte de Productos';
//$pdf->SetTitle($title);
//$pdf->SetFont('Arial', '', 10);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($conexion,"SELECT alumnos.*,carreras.nombre_carrera FROM alumnos inner join carreras on alumnos.id_carrera =carreras.id_carrera");
$item = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	$pdf->Cell(10, 8, $item, 0);
	$pdf->Cell(20, 8,$productos2['matricula'], 0);
	$pdf->Cell(30, 8, $productos2['nombre_alumno'], 0);
	$pdf->Cell(30, 8, $productos2['apellido_p'], 0);
	$pdf->Cell(30, 8, $productos2['apellido_m'], 0);
    $pdf->Cell(50, 8, $productos2['correo'], 0);
   	$pdf->Cell(20, 8, $productos2['telefono_movil'], 0);
   	$pdf->Cell(20, 8, $productos2['telefono_casa'], 0);
   	$pdf->Cell(50, 8, $productos2['nombre_carrera'], 0);
   	$pdf->Cell(20, 8, $productos2['curp'], 0);
	$pdf->Ln(5);
}
$pdf->Ln(8);
//$pdf->Cell(0, 10, 'Pagina: '.$pdf->PageNo(),0,0,'C');
//$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
$pdf->Output(); //Esta opcion es para ver en linea el documento
?>