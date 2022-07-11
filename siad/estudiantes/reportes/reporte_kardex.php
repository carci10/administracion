<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	//$codigo = $_SESSION["Codigo"];
	$nivel=$_SESSION["NivelUsuario"];
$codigo=$_POST['matricula'];

if($nivel==1){
		
	 
	
	$totcred = 0;
	$mat_curs = 0;

	require('../fpdf/fpdf.php');
	require('../Conexion.php');
//CODIGO QR------------------------------------------------	
	require('phpqrcode/qrlib.php');
	$dir = 'temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'test.png';
 
        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	
	
        //Mostramos la imagen generada
	//echo '<img src="'.$dir.basename($filename).'" /><hr/>'; 

	//-----------------------------------------------------CADENA ORIGINAL  DE CALIFICACIONES TOTALES DEL ALUMNO
	$cadena=mysqli_query($conexion,"SELECT GROUP_CONCAT(id_materia,id_periodo,id_tipoe,calificacion,observacion_calificacion SEPARATOR '|') AS cadena FROM calificaciones WHERE matricula='$codigo';");
	$row=mysqli_fetch_assoc($cadena);
	$cadena_original=$row['cadena'];
	
//------------------------------------------------------	
	
	
//-----------------------------------------------------	
	$consulta_asig_total = "SELECT kardex.asignatura AS id_materia 
					FROM kardex 
					INNER JOIN materias ON kardex.asignatura = materias.id_materia 
					WHERE matricula ='$codigo'";
	$asig_total = mysqli_query($conexion, $consulta_asig_total);
	while($asignaciones_total = mysqli_fetch_array($asig_total)){
		$mat_curs = $mat_curs + 1;
		$asignatura_cred_total = $asignaciones_total['id_materia'];
		$consulta_creditos = "SELECT sum(creditos_teoricos + creditos_practicos) AS creditos 
								FROM materias 
								WHERE id_materia = $asignatura_cred_total";
		
		$obtiene_total_creditos = mysqli_query($conexion,$consulta_creditos);
	
		
		
		$total_creditos = mysqli_fetch_assoc($obtiene_total_creditos);
		$totcred = $totcred + $total_creditos['creditos'];


	}
	
	$porcentaje_total_creditos=(($obtiene_total_creditos*100)/$obtiene_total_creditos); // obtiene porcentaje de creditos totales de la carrera
			$porcentaje_totcred=($totcred*100); // obtiene porcentaje de creditos totales cursados
			$porcentaje_avance=$porcentaje_totcred/64; // es el numero de creditos totales en la maestria registrada en BD
              
	$consulta_asignaciones = "SELECT kardex.asignatura AS id_materia,
									 materias.clave_materia,
									 materias.nombre_materia,
									 kardex.ordinario,
								 	 kardex.recursamiento,
									 kardex.extraordinario,
									 kardex.intensivo,
									 kardex.suficiencia,
									 kardex.extraordinario2,
									 kardex.equivalencia,
									 kardex.definitiva AS Definitiva, 
									 kardex.periodo_def AS descripcion_periodo
								FROM kardex 
								INNER JOIN materias ON  kardex.asignatura = materias.id_materia 
								WHERE matricula = '$codigo' 
								ORDER BY kardex.periodo_def";
	$asignaciones = mysqli_query($conexion, $consulta_asignaciones);

	$consulta_promedio = "SELECT matricula, 
								 round(avg (definitiva),1) AS promedio 
							FROM kardex 
							WHERE matricula = '$codigo'";
	$res_promedio = mysqli_query($conexion, $consulta_promedio);
	$obtiene_promedio = mysqli_fetch_assoc($res_promedio);

	$consulta_alumnos = "SELECT alumnos.nombre_alumno,
								alumnos.apellido_p,
								alumnos.apellido_m,
								alumnos.matricula,
								alumnos.id_carrera,
								alumnos.semestre_actual,
								planes.creditos_totales,
								carreras.nombre_carrera 
						FROM alumnos 
						INNER JOIN planes ON alumnos.id_plan = planes.id_plan 
						INNER JOIN carreras ON alumnos.id_carrera = carreras.id_carrera 
						WHERE matricula = '$codigo'";
	$rsalumno = mysqli_query($conexion,$consulta_alumnos);
	$dato_a = mysqli_fetch_assoc($rsalumno);

	$promedio = $obtiene_promedio['promedio'];
	$nombre = $dato_a['nombre_alumno'];
	$apellido_p = $dato_a['apellido_p'];
	$apellido_m = $dato_a['apellido_m'];
	$carrera = $dato_a['nombre_carrera'];
	$total_cred_carrera = $dato_a['creditos_totales'];

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial", "B", 15);
	$pdf->Image("../imagenes/escudo_estado_mexico.png",5,5,20);
	$pdf->Cell(190,6, utf8_decode("TECNOLÓGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA"),0,1,"C");
	$pdf->Image("../imagenes/logo_maestria.png", 185,8,20);
	$pdf->Ln(3);
	$pdf->SetFont("Arial", "B", 11);
	$pdf->Cell(190,5,utf8_decode("KARDEX"),0,1,"C");
	$pdf->SetFont("Arial", "B", 8);
	$pdf->Cell(190,5,utf8_decode("EMITIDO POR SUBDIRECIÓN DE ESTUDIOS PROFESIONALES"),0,1,"C");
	$pdf->Ln(7);
	$pdf->SetFont("Arial","B",5);
	$pdf->Cell(15,3,utf8_decode("NOMBRE:"),0);
	$pdf->Cell(140,3,utf8_decode("$nombre  $apellido_p  $apellido_m"),0);
	$pdf->Cell(15,3,"MATRICULA:",0);
	$pdf->Cell(15,3,"$codigo",0,1);
	$pdf->Cell(15,3,utf8_decode("CARRERA:"),0);
	$pdf->Cell(80,3,utf8_decode("$carrera"),0);
	$pdf->Cell(60,3,utf8_decode("MATERIAS CURSADAS:          $mat_curs "),0);
	$pdf->Cell(15,3,"PROMEDIO:",0);
	$pdf->Cell(15,3,"$promedio",0,1);
	$pdf->Cell(155,3,"CREDITOS:          $porcentaje_total_creditos ",0);
	$pdf->Cell(15,3,"FECHA:",0);
	$pdf->Cell(15,3,date('d/m/y'),0,1);
	$pdf->Cell(70,3,"CREDITOS CUBIERTOS:          $porcentaje_avance %",0);
	$pdf->Ln(12);
	$pdf->Cell(8,5,"CLAVE",0,0,"C");
	$pdf->Cell(7,5,"CRED",0,0,"C");
	$pdf->Cell(65,5,"NOMBRE ASIGNATURA",0,0,"C");
	$pdf->Cell(7,5,"ORD.",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"REC.",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"EXT.1",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"EXT.2",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"INT.",0,0,"C");
	$pdf->Cell(7,5,"SUF.",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"EQUIV.",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Cell(7,5,"DEF.",0,0,"C");
	$pdf->Cell(7,5,"PER.",0,0,"C");
	$pdf->Ln(6);

	while($asignaciones2 = mysqli_fetch_array($asignaciones)){
		$pdf->Cell(8, 5, utf8_decode($asignaciones2['clave_materia']),0, 0,'C');
		$asignatura = $asignaciones2['id_materia'];
		$obtiene_creditos = mysqli_query($conexion,"SELECT sum(creditos_teoricos+creditos_practicos) AS creditos FROM materias WHERE id_materia = $asignatura");				
		$creditos = mysqli_fetch_assoc($obtiene_creditos);
		$cred=$creditos['creditos'];
		$pdf->Cell(7, 5, utf8_decode(($cred)),0,0,'C');
		$pdf->Cell(65, 5, utf8_decode($asignaciones2['nombre_materia']),0);
		if($asignaciones2['ordinario']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['ordinario'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['recursamiento']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['extraordinario']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['extraordinario'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['extraordinario2']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['intensivo']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['suficiencia']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		if($asignaciones2['equivalencia']!=null) {
			$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
			$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		}
		else {
			$pdf->Cell(7, 5,"",0,0,'C');
			$pdf->Cell(7, 5,"",0,0,'C');
		}
		$pdf->Cell(7, 5, $asignaciones2['Definitiva'],0,0,'C');
		$pdf->Cell(7, 5, $asignaciones2['descripcion_periodo'],0,0,'C');
		$pdf->Ln(3);
	}
	
	//IMPRIME QR
	$contenido = "Kardex correspondiente al Alumno(a): $nombre $apellido_p $apellido_m, Creditos cubiertos :$porcentaje_avance % Promedio General: $promedio   Emitido por Tecnologicos de Estudios Superiores de Ixtapaluca. SIAD-TESI-JCCR"; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
	
	$pdf->Image("temp/test.png", 174,265,30);
	$pdf->Image("../imagenes/logo_tesi.png",182,277,15);
	
	$pdf->SetXY(7,265);
	$pdf->SetFont("Arial","B",5);
	//$pdf->Cell(165,10,utf8_decode("$cadena_original"),1,1,"C");
	$pdf->Multicell(165, 3, utf8_decode("Cadena Original: $cadena_original"), 0, 'l', false);
	
	
    //---------------------------------------------------------------
	$pdf->Ln(8);
	ob_end_clean();
	$pdf->Output();
} 
	else
		echo "No tienes el Nivel para realizar esta actividad ... $nivel ... $codigo";

?>