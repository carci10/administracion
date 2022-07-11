<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
$nivel=$_SESSION["NivelUsuario"];

if($nivel==1)
{
$existe=true;
 //$codigo = $_SESSION["Codigo"];
$codigo=$_POST['matricula']; 
	
    $registro=$_POST['registro'];
	$libro=$_POST['libro'];
	$fojas=$_POST['fojas'];
	$fecha_creacion=date('Y-m-d');
	

require('../fpdf/fpdf.php');
require('../conexion.php');
include('leerparcial.php');
	
	
	
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

	
	
  //-----------------------------------------------------terminA qr	
	

	
	
	//Consultamos si el alumno es egresado
	$rs_egresado=mysqli_query($conexion,"select id_situacion from alumnos where matricula='$codigo'");
	$confirmar_egreso=mysqli_fetch_assoc($rs_egresado);
	$id_situacion=$confirmar_egreso['id_situacion'];
	
	
	
	
	//consultamos si existe el certificado
	
	$rsconsulta=mysqli_query($conexion,"select * from certificados where id_alumno='$codigo'");
	$obtiene_datos=mysqli_fetch_assoc($rsconsulta);
	$id_certificado=$obtiene_datos['id_certificado'];
	if(is_null($id_certificado)){
		$existe=false;
	}
	
	
//Si no existe lo creamos
	
if($existe==false && $id_situacion==3){	
$crear_certificado="insert into certificados(id_alumno,num_registro,libro,fojas,fecha) values ('$codigo',$registro,$libro,$fojas,'$fecha_creacion')";
$certificado_creado=mysqli_query($conexion,$crear_certificado);
	$existe=true;
}

	

$periodo_actual=$_SESSION['peri'];
$cons_period_actual=mysqli_query($conexion,"Select descripcion_periodo from periodos where id_periodo=$periodo_actual");
$obtiene_periodo_actual=mysqli_fetch_assoc($cons_period_actual);
$descripcion_p=$obtiene_periodo_actual['descripcion_periodo'];


if($existe){

class PDF extends FPDF
{
		function Header()
		{
			$this->Image('../../imagenes/CERTIFICADO_TOTAL.jpg' , 7,8, 200);
			//$this->Image('../../images/boleta.jpg',7,8,200);
			$this->SetFont('Arial','B',20);
			$this->Cell(80);
			//$this->Cell(50,20,'Reporte de Calificaciones',0,0,'C');
			$this->Ln(15);
			$this->SetFont('Arial','B',10);
			$this->Cell(160);
			//$this->Cell(1, 50,'Fecha:'.date('d-m-Y').'', 0, 'R');    //imprime la fecha de impresion
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
		$pdf = new PDF('P','mm','legal');
		//$pdf = new FPDF('P','mm','legal'); //Tamaño 
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 9);
		$pdf->Cell(70, 8, '', 0);
		$pdf->Ln(8);
		$pdf->SetFont('Arial', '', 9);
		//Consulta a la base de Datos
		/*$asignaciones = mysqli_query($conexion,"select calificaciones.id_materia, materias.clave_materia, materias.nombre_materia,
sum(materias.creditos_teoricos+materias.creditos_practicos) as creditos,round(avg(calificacion),0)as Definitiva, periodos.descripcion_periodo,tipo_inscripcion.descripcion
from calificaciones
INNER JOIN materias ON  calificaciones.id_materia =  materias.id_materia
INNER JOIN periodos ON  periodos.id_periodo =  calificaciones.id_periodo
INNER JOIN tipo_inscripcion ON  tipo_inscripcion.id_tipoi =  calificaciones.id_tipoi
where matricula='$codigo' group by calificaciones.id_materia order by descripcion_periodo" );*/

$asignaciones = mysqli_query($conexion,"SELECT kardex.asignatura AS id_materia,
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
								ORDER BY kardex.periodo_def" );



$consulta_promedio=mysqli_query($conexion, "SELECT matricula, 
								 round(avg (definitiva),0) AS promedio 
							FROM kardex 
							WHERE matricula = '$codigo'");

$obtiene_promedio=mysqli_fetch_assoc($consulta_promedio);
$promedio=$obtiene_promedio['promedio'];

        
        $item = 0;
				

			$consulta_alumnos="SELECT alumnos.nombre_alumno,
								alumnos.apellido_p,
								alumnos.apellido_m,
								alumnos.matricula,
								alumnos.id_carrera,
								alumnos.semestre_actual,
								alumnos.fecha_inicio,
								alumnos.fecha_egreso,
								planes.creditos_totales,
								carreras.nombre_carrera,
								especialidad.nombre_especialidad
						FROM alumnos 
						INNER JOIN planes ON alumnos.id_plan = planes.id_plan 
						INNER JOIN carreras ON alumnos.id_carrera = carreras.id_carrera
						INNER JOIN especialidad ON alumnos.id_especialidad= especialidad.id_especialidad
						WHERE matricula = '$codigo'";
			$rsalumno=mysqli_query($conexion,$consulta_alumnos);
			$dato_a=mysqli_fetch_assoc($rsalumno);
			$nombre=strtoupper($dato_a['nombre_alumno']);
			$apellido_p=strtoupper($dato_a['apellido_p']);
			$apellido_m=strtoupper($dato_a['apellido_m']);
		    $carrera=$dato_a['nombre_carrera'];
			$plan=$dato_a['descripcion_plan'];
            $semestre=$dato_a['semestre_actual'];
			$fecha_ingreso=$dato_a['fecha_inicio'];
			$fecha_egreso=$dato_a['fecha_egreso'];	
			$lgc=$dato_a['nombre_especialidad'];
			
	
			$director_tesi="MTRO. DEMETRIO MORENO ARCEGA";
		
			$pdf->Cell(1, 17, utf8_decode("                                                                                         $director_tesi "), 0,'C');	

			$pdf->Cell(1, 45, utf8_decode("                $codigo "), 0,'C');	
			$pdf->Cell(1, 39, utf8_decode("                                                                                                                   $nombre  $apellido_p  $apellido_m "), 0,'C');	
			//$pdf->Cell(1, 25, utf8_decode("Nombre Alumno: $nombre  $apellido_p   $apellido_m                                           Periodo: $descripcion_p "), 0,'C');
//$pdf->Cell(6, 35, utf8_decode("Plan de estudios: $plan                                                               Semestre inscrito: $semestre "), 0,'C');

//$pdf->Cell(0.1, 50, utf8_decode("                                                                                                                Promedio del semestre: $promedio"), 0,'R');

//$pdf->Cell(10, 1, ' ', 0,'C');
	
	

			$pdf->SetXY(130,82);// CORDENADA PARA PONER EL NOMBRE DE LINEA DE GENERACION DEL COPNOCIMEINTO
			$pdf->SetFont('Arial', '', 7);
				$pdf->Cell(75,7, utf8_decode("$lgc"), 0,0,'C');
	
	
	//----------------------------------------------------------------------------IMPRIME CALIFICACIONES---------------------------------------------------------------
				$pdf->SetFont('Arial', '', 9);
	
			while($asignaciones2 = mysqli_fetch_array($asignaciones)){
				$item = $item+1;
				
				
				if($item==1){
					$pdf->SetXY(63,97);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
			
				}
				
				
				if($item==2){
				$pdf->SetXY(63,104);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==3){
				$pdf->SetXY(63,111);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
			   
				
				if($item==4){
				$pdf->SetXY(63,125);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==5){
				$pdf->SetXY(63,132);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==6){
				$pdf->SetXY(63,139);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==7){
				$pdf->SetXY(63,153);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==8){
				$pdf->SetXY(63,160);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				if($item==9){
				$pdf->SetXY(63,167);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				
				if($item==10){
				$pdf->SetXY(63,181);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				if($item==11){
				$pdf->SetXY(63,188);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				
				if($item==12){
				$pdf->SetXY(63,195);
				$pdf->Cell(91,7, utf8_decode("$asignaciones2[nombre_materia]"), 0,0,'C');
				$asignatura=$asignaciones2['id_materia'];
				
				
				$obtiene_creditos=mysqli_query($conexion,"select sum(creditos_teoricos+creditos_practicos) as creditos from materias where id_materia=$asignatura");				
				
				$creditos=mysqli_fetch_assoc($obtiene_creditos);
				$cred=$creditos['creditos'];
				
				$pdf->Cell(14, 7,"$asignaciones2[descripcion_periodo]", 0,0,'C');
				$pdf->Cell(27, 7, "$asignaciones2[Definitiva]", 0,0,'C');
				}
				//$pdf->Ln(5);
				//$pdf->Cell(8, 75, ' ', 0,'C');
				
				
			}
	
	
	
	
	//----------------------------------------------------------------------------TERMINA IMPRIME CALIFICACIONES---------------------------------------------------------------
	
	
	//--------------------------------------------------IMPRIMIR DATOS DEL REGISTRO DEL CERTIFICADO
	
	
	
	//----------------------------------------obtenemos datos del registro del certificado de la base de datos
	$obtener_registros=mysqli_query($conexion,"select * from certificados where id_alumno='$codigo'");
	$rs_obtener_registros=mysqli_fetch_assoc($obtener_registros);
	$folio=$rs_obtener_registros['id_certificado'];
	$numero_registro=$rs_obtener_registros['num_registro'];
	$libro_registro=$rs_obtener_registros['libro'];
	$fojas_registro=$rs_obtener_registros['fojas'];
	$fecha_registro=$rs_obtener_registros['fecha'];
	$qr_registro="https://posgrados.tesi.org.mx/siad/estudiantes/reportes/consulta_certificados.php";
	//-------------------------------------------------------------------------------------------------------
	
	$pdf->SetXY(0,170);// CORDENADA PARA PONER EL NUMERO DE REGISTRO
				$pdf->Cell(75,7, utf8_decode("$numero_registro"), 0,0,'C');
	
	$pdf->SetXY(0,178);// CORDENADA PARA PONER EL NUMERO DE libro
				$pdf->Cell(91,7, utf8_decode("$libro_registro"), 0,0,'C');
				
	
	$pdf->SetXY(0,188);// CORDENADA PARA PONER EL NUMERO DE foja
				$pdf->Cell(75,7, utf8_decode("$fojas_registro"), 0,0,'C');
				
	
	$pdf->SetXY(0,197);// CORDENADA PARA PONER EL NUMERO DE fecha
				$pdf->Cell(77,7, utf8_decode("$fecha_registro"), 0,0,'C');
	
	
			
	//-----------------------------Imprime promedio----------------------------------------------------------------------------------------------------------------------------
	if($promedio==70)
		$promedio_letra="SETENTA";
	if($promedio==71)
		$promedio_letra="SETENTA Y UNO";
	if($promedio==72)
		$promedio_letra="SETENTA Y DOS";
	if($promedio==73)
		$promedio_letra="SETENTA Y TRES";
	if($promedio==74)
		$promedio_letra="SETENTA Y CUATRO";
	if($promedio==75)
		$promedio_letra="SETENTA Y CINCO";
	if($promedio==76)
		$promedio_letra="SETENTA Y SEIS";
	if($promedio==77)
		$promedio_letra="SETENTA Y SIETA";
	if($promedio==78)
		$promedio_letra="SETENTA Y OCHO";
	if($promedio==79)
		$promedio_letra="SETENTA Y NUEVE";
	if($promedio==80)
		$promedio_letra="OCHENTA";
	
	
	if($promedio==81)
		$promedio_letra="OCHENTA Y UNO";
	if($promedio==82)
		$promedio_letra="OCHENTA Y DOS";
	if($promedio==83)
		$promedio_letra="OCHENTA Y TRES";
	if($promedio==84)
		$promedio_letra="OCHENTA Y CUATRO";
	if($promedio==85)
		$promedio_letra="OCHENTA Y CINCO";
	if($promedio==86)
		$promedio_letra="OCHENTA Y SEIS";
	if($promedio==87)
		$promedio_letra="OCHENTA Y SIETE";
	if($promedio==88)
		$promedio_letra="OCHENTA Y OCHO";
	if($promedio==89)
		$promedio_letra="OCHENTA Y NUEVE";
	if($promedio==90)
		$promedio_letra="NOVENTA";
	
	
	
	if($promedio==91)
		$promedio_letra="NOVENTA Y UNO";
	if($promedio==92)
		$promedio_letra="NOVENTA Y DOS";
	if($promedio==93)
		$promedio_letra="NOVENTA Y TRES";
	if($promedio==94)
		$promedio_letra="NOVENTA Y CUATRO";
	if($promedio==95)
		$promedio_letra="NOVENTA Y CINCO";
	if($promedio==96)
		$promedio_letra="NOVENTA Y SEIS";
	if($promedio==97)
		$promedio_letra="NOVENTA Y SIETE";
	if($promedio==98)
		$promedio_letra="NOVENTA Y OCHO";
	if($promedio==99)
		$promedio_letra="NOVENTA Y NUEVE";
	if($promedio==100)
		$promedio_letra="CIEN";
	
	
	
	
	
	
	$pdf->SetXY(107,217);
	$pdf->Cell(80,7, utf8_decode("              $promedio                           $promedio_letra "), 0,0,'C');
	
	//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	
	
	//----------------------------------------------Imprime fechas de emision, plan de estudios fecha de inicio uy termino ------------------------------------------------------------------------------------------------
	$plan="MPADM-2011-26";
	
	//corrdenada para el plan de estudios 
	$pdf->SetXY(36,243);
	$pdf->Cell(80,7, utf8_decode("$plan"), 0,0,'C');
	
	//Obtenemos fecha de impresion 
	$dia=date('d', strtotime($fecha_creacion));
	$mes=date('m', strtotime($fecha_creacion)); // M mayuscula da el nombre del mes m miniscula da el numero del mes 
	switch($mes){
		case 1: $nombre_mes="ENERO";
				break;
		case 2: $nombre_mes="FEBRERO";
				break;	
		case 3: $nombre_mes="MARZO";
				break;	
		case 4: $nombre_mes="ABRIL";
				break;
		case 5: $nombre_mes="MAYO";
				break;
		case 6: $nombre_mes="JUNIO";
				break;
		case 7: $nombre_mes="JULIO";
				break;	
		case 8: $nombre_mes="AGOSTO";
				break;
		case 9: $nombre_mes="SEPTIEMBRE";
				break;	
		case 10: $nombre_mes="OCTUBRE";
				break;
		case 11: $nombre_mes="NOVIEMBRE";
				break;	
		case 12: $nombre_mes="DICIEMBRE";
				break;	
	}
	
	
	$anio=date('Y', strtotime($fecha_creacion));	
	
	
	
	$pdf->SetXY(122,243); // cordenada fecha inicio 
	$pdf->Cell(80,7, utf8_decode("$fecha_ingreso"), 0,0,'C');
	
	
	$pdf->SetXY(148,243); // cordenada fecha final
	$pdf->Cell(80,7, utf8_decode("$fecha_egreso"), 0,0,'C');
	
	
	$pdf->SetXY(105,247); // cordenada DIAS 
	$pdf->Cell(80,7, utf8_decode("$dia DIAS"), 0,0,'C');
	
	$pdf->SetXY(147,247); // cordenada MES
	$pdf->Cell(80,7, utf8_decode("$nombre_mes"), 0,0,'C');
	
	$pdf->SetXY(38,251); // cordenada AÑO
	$pdf->Cell(80,7, utf8_decode("$anio"), 0,0,'C');
	
	
	
	//IMPRIMIR CODIGO QR
	
	//IMPRIME QR
	$contenido =$qr_registro; 
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
	
	$pdf->Image("temp/test.png", 24,280,33);
		$pdf->Image("../imagenes/logo_tesi.png",31,295,20);
	//-----------------------------------------------------------------------------------------------------------------------------
	
	$pdf->SetXY(0,310); // iMPRIME folio
	$pdf->Cell(80,7, utf8_decode("FOLIO: $folio"), 0,0,'C');
	
	
	
	//-------------------------------------------------------------------------------------------------------------------------------
	
	
			$pdf->Ln(8);
            ob_end_clean();
			$pdf->Output(); //Esta opcion es para ver en linea el documento //$pdf->Output('reporteProductos.pdf','D'); Esta opcion es para descargar el archivo
	
}//Fin Existe
	
	else{
				echo"<center>El alumno ingresado NO tiene un certificado Asociado y no ha sido posible crearlo, verifica si Ya esta registrado como alumno egresado</center> ";
				 echo'<center><strong><a href="../../admin/form_egreso.php">Verificar</a></strong></center>';
		}
	
	
}
 else echo" No tienes el Nivel o el permiso para hacer esta tarea en el Sistema : ... Tu nivel es: $nivel";
?>
