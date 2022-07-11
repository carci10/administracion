<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');


 $codigo = $_SESSION["Codigo"];


require('../fpdf/fpdf.php');
require('../conexion.php');

$cons = mysqli_query($conexion,"SELECT * FROM periodos where estado_perido=1");

while ( $arre = mysqli_fetch_assoc($cons)) {

	$parciale = $arre['parcial_actual'];
	$periodo = $arre['id_periodo'];
					
	
	}






class PDF extends FPDF
{
		function Header()
		{
			$this->Image('../../imagenes/boleta.jpg' , 7,8, 200);
			//$this->Image('../../images/boleta.jpg',7,8,200);
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			//$this->Cell(50,20,'Reporte de Calificaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(160);
			$this->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0, 'R');
			$this->Ln(10);
		    // Colores de los bordes, fondo y texto
		    $this->SetDrawColor(222,227,221);
		     $this->SetFillColor(200,220,255);
		    //Cabecera de Titulos
			/*
			$this->Cell(5, 8, '#' ,1,0,'C');
			$this->Cell(15, 8, 'Asig' ,1,0,'C');
			$this->Cell(30, 8, 'Semestre' ,1,0,'C');
			$this->Cell(50, 8, 'Creditos' ,1,0,'C');
			$this->Cell(55, 8, 'Asignatura' ,1,0,'C');
			$this->Cell(15, 8, 'Puntaje' ,1,0,'C');
			$this->Cell(15, 8, 'Periodo' ,1,0,'C');
			$this->Ln(8);*/
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
		$asignaciones = mysqli_query($conexion,"select calificaciones.id_materia, materias.clave_materia, materias.nombre_materia,
sum(materias.creditos_teoricos+materias.creditos_practicos) as creditos,round(avg(calificacion),0)as Definitiva, periodos.descripcion_periodo,tipo_inscripcion.descripcion
from calificaciones
INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
INNER JOIN periodos ON  periodos.id_periodo =  calificaciones.id_periodo
INNER JOIN tipo_inscripcion ON  tipo_inscripcion.id_tipoi =  calificaciones.id_tipoi
where matricula='$codigo' and calificaciones.id_tipoi=1 group by calificaciones.id_materia order by descripcion_periodo" );






        
        $item = 0;
				

			$consulta_alumnos="select alumnos.nombre_alumno,alumnos.apellido_p,alumnos.apellido_m,alumnos.matricula, alumnos.id_carrera,
planes.descripcion_plan,carreras.nombre_carrera
from alumnos
inner join planes on alumnos.id_plan=planes.id_plan
inner join carreras on alumnos.id_carrera=carreras.id_carrera
where matricula='$codigo'";
			$rsalumno=mysqli_query($conexion,$consulta_alumnos);
			$dato_a=mysqli_fetch_assoc($rsalumno);
			$nombre=$dato_a['nombre_alumno'];
			$apellido_p=$dato_a['apellido_p'];
			$apellido_m=$dato_a['apellido_m'];
		$carrera=$dato_a['nombre_carrera'];
				$plan=$dato_a['descripcion_plan'];

			$pdf->Cell(1, 15, utf8_decode(" Matricula: $codigo                                                                                                Carrera: $carrera "), 0,'C');	
			$pdf->Cell(1, 25, utf8_decode("Nombre Alumno: $nombre  $apellido_p   $apellido_m "), 0,'C');
$pdf->Cell(6, 35, utf8_decode("Plan de estudios: $plan"), 0,'C');


//$pdf->Cell(10, 1, ' ', 0,'C');

			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				
				//$pdf->Cell(10, 75, '', 0,'C');
				$pdf->Cell(15, 75, utf8_decode($asignaciones2['clave_materia']), 0,'C');
				//$pdf->Cell(30, 70, $asignaciones2['descripcion_periodo'], 0, 'C');
				
				$pdf->Cell(75, 75, utf8_decode($asignaciones2['nombre_materia']), 0,'C');
				$pdf->Cell(20, 75, utf8_decode(($cred=$asignaciones2['creditos']/3)), 0,'C');
				$pdf->Cell(25, 75, $asignaciones2['Definitiva'], 0,'C');

				$pdf->Cell(25, 75, $asignaciones2['descripcion'], 0, 'C');
				//if($asignaciones2['id_tipoi']==2)
					//		$pdf->Cell(25, 75, 'Ext', 0, 'C');
				
				
				
				$pdf->Cell(15, 75, $asignaciones2['descripcion_periodo'], 0,'C');
			   
				$pdf->Ln(5);
				$pdf->Cell(8, 75, ' ', 0,'C');
				
				
				
				//-------------------------------------------------------------------------------------PARA EXTRAS-------------------------------
				if($asignaciones2['Definitiva']<=70){
					
					$obtiene_extra = mysqli_query($conexion,"select calificaciones.id_materia, materias.clave_materia, materias.nombre_materia,calificaciones.calificacion, periodos.descripcion_periodo,tipo_inscripcion.descripcion
from calificaciones
INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
INNER JOIN periodos ON  periodos.id_periodo =  calificaciones.id_periodo
INNER JOIN tipo_inscripcion ON  tipo_inscripcion.id_tipoi =  calificaciones.id_tipoi
where matricula='$codigo' and calificaciones.id_tipoi=2 group by calificaciones.id_materia order by descripcion_periodo" );
					
					
					
					while($obtiene_extra2 = mysqli_fetch_array($obtiene_extra)){
				$item = $item+1;
				$pdf->Cell(15, 75, utf8_decode($obtiene_extra2['clave_materia']), 0,'C');
				//$pdf->Cell(30, 70, $asignaciones2['descripcion_periodo'], 0, 'C');
				
				$pdf->Cell(75, 75, utf8_decode($obtiene_extra2['nombre_materia']), 0,'C');
				$pdf->Cell(20, 75, utf8_decode(($cred=$asignaciones2['creditos']/3)), 0,'C');
				$pdf->Cell(25, 75, $obtiene_extra2['calificacion'], 0,'C');
						$pdf->Cell(25, 75, $obtiene_extra2['descripcion'], 0, 'C');
				$pdf->Cell(15, 75, $asignaciones2['descripcion_periodo'], 0,'C');
			   
				$pdf->Ln(5);
				$pdf->Cell(8, 75, ' ', 0,'C');
					
				}
				
				}
//-------------------------------------------------------------------------------------fin--------------------------------------				
				
				
				
				
				
			}

//------------------------------------------------------Imprime Boleta Copia para Alumno


//-------------------------------------------------------------------------------------

			$pdf->Ln(8);
ob_end_clean();
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
?>