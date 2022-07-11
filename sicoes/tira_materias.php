<?php
session_start();
require('fpdf/fpdf.php');
require('../conexion.php');
//include('clases/leerparcial.php');
$usuario=$_SESSION['usuario'];
$matricula=$_SESSION['matricula'];
$carrera=$_SESSION['Carrera'];
$especialidad=$_SESSION['especialidad'];
$semestre=$_SESSION['semestre'];


class PDF extends FPDF
{
		function Header()
		{
			$this->Image('images/tira_materias.jpg',7,8,200);
			//$this->Image('../../imagenes/logoSIAD.png' , 10 ,10, 40 , 20,'PNG');
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			//$this->Cell(50,20,'Reporte de Asignaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(130);
			
			$this->Ln(10);
			$this->SetFont('Arial','B',10);
			$this->Cell(130);
			$this->Cell(50, 30, 'Fecha: '.date('d-m-Y').'', 0, 'R');
			
			$this->Ln(11);
			$this->SetFont('Arial','B',10);
			$this->Cell(30);
			$this->Cell(50, 30, 'Nombre: '.$_SESSION['Nombre'].' ' .$_SESSION['ApellidoPaterno'].' ' .$_SESSION['ApellidoMaterno'].'' , 0, 'R');
			
			$this->Ln(10);
			$this->SetFont('Arial','B',10);
			$this->Cell(30);
			$this->Cell(50, 30, 'Matricula: '.$_SESSION['matricula'].'', 0, 'R');
			
			if($_SESSION['Carrera']==8);
			   $carrera='M. en Admninistracion';
			$this->Cell(40);
			$this->Cell(40, 20, 'Carrera: '.$carrera.'', 0, 'R');
			
			
			$this->Ln(25);
		    // Colores de los bordes, fondo y texto
		    $this->SetDrawColor(222,227,221);
		     $this->SetFillColor(200,220,255);
		    //Cabecera de Titulos
			
			
			$this->Cell(20, 8, '#' ,5,0,'C');
			$this->Cell(15, 8, 'Clave' ,1,0,'C');
			$this->Cell(70, 8, 'Nombre' ,1,0,'C');
			$this->Cell(15, 8, 'Carrera' ,1,0,'C');
			$this->Cell(20, 8, 'Semestre' ,1,0,'C');
			$this->Cell(15, 8, 'Tipo' ,1,0,'C');
			$this->Cell(15, 8, 'Espec' ,1,0,'C');
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
		$pdf = new PDF();
		//$pdf = new FPDF('L','mm','legal'); //Tamaño en forma Horizontal
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->Cell(70, 8, '', 0);
		$pdf->Ln(8);
		$pdf->SetFont('Arial', '', 8);
		//Consulta a la base de Datos
		$asignaciones = mysqli_query($conexion,"select * from materias where (id_carrera=$carrera and  semestre=$semestre) and (id_espacialidad=0 or id_espacialidad =$especialidad)");
        
        $item = 0;
			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				$pdf->Cell(10, 8, '    ', 0,'C');
				$pdf->Cell(10, 8, $item, 0,'C');
				$pdf->Cell(18, 8, utf8_decode($asignaciones2['clave_materia']), 0,'C');
				$pdf->Cell(70, 8, utf8_decode($asignaciones2['nombre_materia']), 0, 'C');
				$pdf->Cell(20, 8, utf8_decode($asignaciones2['id_carrera']), 0,'C');
				$pdf->Cell(15, 8, utf8_decode($asignaciones2['semestre']), 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['id_tipom'], 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['id_espacialidad'], 0,'C');
			   
				$pdf->Ln(5);
			}
			$pdf->Ln(8);
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
?>