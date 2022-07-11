<?php

require('../fpdf/fpdf.php');
require('../conexion.php');

class PDF extends FPDF
{
		function Header()
		{
			$this->Image('../../imagenes/logoSIAD.png' , 10 ,10, 40 , 20,'PNG');
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			$this->Cell(50,20,'Reporte de Asignaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(160);
			$this->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0, 'R');
			$this->Ln(10);
		    // Colores de los bordes, fondo y texto
		    $this->SetDrawColor(222,227,221);
		     $this->SetFillColor(200,220,255);
		    //Cabecera de Titulos
			$this->Cell(5, 8, '#' ,1,0,'C');
			$this->Cell(15, 8, 'Asig' ,1,0,'C');
			$this->Cell(15, 8, 'Numero' ,1,0,'C');
			$this->Cell(50, 8, 'Docente' ,1,0,'C');
			$this->Cell(55, 8, 'Asignatura' ,1,0,'C');
			$this->Cell(15, 8, 'Grupo' ,1,0,'C');
			$this->Cell(15, 8, 'Periodo' ,1,0,'C');
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
		$asignaciones = mysqli_query($conexion,"SELECT  imparte.id_imparte AS id, imparte.id_profesor AS Asignacion,concat(profesores.nombre_maestro,' ',profesores.apellido_p,'',profesores.apellido_m) as Docente,
             materias.nombre_materia AS Asignatura, grupos.clave_grupo AS Grupo, periodos.descripcion_periodo AS periodo, tipo_inscripcion.descripcion AS tipo, estado
FROM       imparte
            INNER JOIN profesores ON imparte.id_profesor = profesores.id_profesor
            INNER JOIN materias ON imparte.id_materia = materias.id_materia
            INNER JOIN grupos ON imparte.id_grupo = grupos.id_grupo
            INNER JOIN periodos ON imparte.id_periodo = periodos.id_periodo
            INNER JOIN tipo_inscripcion ON imparte.id_tipoi = tipo_inscripcion.id_tipoi
            ORDER BY imparte.id_imparte ASC");
        
        $item = 0;
			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				$pdf->Cell(10, 8, $item, 0,'C');
				$pdf->Cell(15, 8, utf8_decode($asignaciones2['id']), 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['Asignacion'], 0, 'C');
				$pdf->Cell(50, 8, utf8_decode($asignaciones2['Docente']), 0,'C');
				$pdf->Cell(55, 8, utf8_decode($asignaciones2['Asignatura']), 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['Grupo'], 0,'C');
				$pdf->Cell(15, 8, $asignaciones2['periodo'], 0,'C');
			   
				$pdf->Ln(5);
			}
			$pdf->Ln(8);
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
?>