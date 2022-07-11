<?php

require('../fpdf/fpdf.php');
require('conexion.php');
session_start();
$codigo = $_SESSION["Codigo"];
class PDF extends FPDF
{
		function Header()
		{
			require('conexion.php');
			$this->Image('../../imagenes/logoSIAD.png' , 10 ,10, 40 , 20,'PNG');
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			$this->Cell(50,20,'Reporte de mis Asignaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(160);
			$this->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0, 'R');
			$this->Ln(5);
            $this->SetFont('Arial','B',12);
		    $this->Cell(20,20,'Mis Asignaciones:',0,0,'L');
		    $codigo = $_SESSION["Codigo"];
		        $docente = mysqli_query($conexion,"SELECT concat(nombre_maestro, ' ',apellido_p,' ',apellido_m ) as Docente from profesores where id_profesor = '$codigo'");
		            while($row = mysqli_fetch_row($docente)){
		            $NombreDocente = $row[0];

            }

		 $this->Cell(95,20, $NombreDocente, 0,0,'R');
			$this->Ln(15);
		    // Colores de los bordes, fondo y texto
		    $this->SetDrawColor(222,227,221);
		     $this->SetFillColor(200,220,255);
		    //Cabecera de Titulos
			$this->Cell(15, 8, '#' ,1,0,'C');
			$this->Cell(25, 8, 'Asignacion' ,1,0,'C');
			
			$this->Cell(70, 8, 'Asignatura' ,1,0,'C');
			$this->Cell(20, 8, 'Grupo' ,1,0,'C');
			$this->Cell(20, 8, 'Periodo' ,1,0,'C');
			
			$this->Cell(20, 8, 'Estado' ,1,0,'C');
			$this->Ln(5);
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
		$asignaciones = mysqli_query($conexion,"SELECT imparte.id_imparte AS Asignacion, concat(profesores.nombre_maestro,' ',profesores.apellido_p,' ',apellido_m) as Docente, materias.nombre_materia AS Asignatura, grupos.clave_grupo AS Grupo,periodos.descripcion_periodo as periodo,imparte.estado AS Estado FROM imparte
INNER JOIN profesores ON imparte.id_profesor = profesores.id_profesor
		INNER JOIN materias ON materias.id_materia = imparte.id_materia
		INNER JOIN grupos ON imparte.id_grupo = grupos.id_grupo
INNER JOIN periodos ON imparte.id_periodo = periodos.id_periodo
        where profesores.id_profesor= '$codigo' and imparte.estado = '1'");
        
        $item = 0;
			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				$pdf->Cell(15, 8, $item, 0,'C');
				$pdf->Cell(28, 8, utf8_decode($asignaciones2['Asignacion']), 0,'C');
				
				$pdf->Cell(70, 8, utf8_decode($asignaciones2['Asignatura']), 0,'C');
				$pdf->Cell(20, 8, $asignaciones2['Grupo'], 0,'C');
			    $pdf->Cell(20, 8, $asignaciones2['periodo'], 0,'C');
			
			   	$pdf->Cell(20, 8, $asignaciones2['Estado'], 0,'C');
				$pdf->Ln(5);
			}
			$pdf->Ln(8);
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
?>