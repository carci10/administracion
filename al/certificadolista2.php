<?php
session_start();
require('fpdf.php');


$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/actalist.jpg',7,8,200);


include('clases/conexion.php');
include('clases/leerparcial.php');


//Variables utilizadas
$clav=$_SESSION['usuario'];//clave del profesor
$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario

$parcial=$_SESSION['parci'];

$clavemat=$valor;//Obtiene la materia de la cadena enviada por el formulario
$obtine="select * from  profesores where correo_profesor='$clav'";
	$rsprofesor=mysqli_query($conexion,$obtine);
	$row=mysqli_fetch_assoc($rsprofesor);
	$id_profesor=$row['id_profesor'];

$group=mysqli_query($conexion,"SELECT * FROM imparte WHERE id_profesor='$id_profesor' AND id_periodo='$periodo'");
$rsgrupo=mysqli_fetch_assoc($group);
$grupo=$rsgrupo['id_grupo'];
$resasig=mysqli_query($conexion,"SELECT nombre_materia FROM materias WHERE id_materia='$clavemat' ");
$arrnomat=$resasig->fetch_array(MYSQLI_ASSOC);


$materia=$arrnomat['nombre_materia'];
$per=$_SESSION['peri'];
//$consmateria="select Carrera from Materias where MATERIA='$clavemat';";//selecciona el nombre de la materia del profesor 
$resmateria=mysqli_query($conexion,"SELECT id_carrera FROM materias WHERE id_materia='$clavemat' ");
$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
$carr=$arrenommat['id_carrera'];


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
if($carr==06){
	$carrera="Arquitectura";	
}
if($carr==70){
	$carrera="Ing. Biomedica";	
}
if($carr==8){
	$carrera="M. en Administracion";	
}

$fecha=date("d-m-y");
$nombre=$_SESSION['nomprof'];


$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,'LISTA DE ASISTENCIA');
$pdf->Ln(0);
$pdf->Cell(150);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(4);
$pdf->Cell(70);
$pdf->Cell(150,30,"Carrera: ".$carrera);
$pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(150,30,"Grupo: ".$grupo);
$pdf->Ln(0);
$pdf->Cell(70);
$pdf->Cell(150,30,"Fecha:".$fecha);
$pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(150,30,"Asignatura: ".$materia);
$pdf->Ln(0);
$pdf->Cell(120);
$pdf->Cell(150,30,"Docente: ".$nombre);
$pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(150,30,"Clave: ".$clavemat);
$pdf->Ln(0);
$pdf->Cell(70);
$pdf->Cell(150,30,"Correo: ".$clav);
$pdf->Ln(0);
$pdf->Cell(120);
$pdf->Cell(150,30,"Período: ".$per);


//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula in (select Matricula from Calif where Grupo='$grupo' and MATERIA='$clavemat' and Periodo='$per') ORDER BY ApellidoP,ApellidoM,Nombres";
/* ESTA IMPLEMENTACION FALLA AL CARGAR */ 

$matricula = mysqli_query($conexion,"SELECT matricula,apellido_p,apellido_m,nombre_alumno 
	FROM alumnos WHERE matricula IN ( SELECT matricula 
		FROM calificaciones WHERE id_materia='$clavemat' AND id_periodo='$per' ) 
			ORDER BY apellido_p,apellido_m,nombre_alumno");


/* NUEVA IMPLEMENTACION DE RECOLECION 

$allMatricula = $sicoesnvo->query("SELECT Matricula FROM Calif WHERE Grupo='$grupo' AND MATERIA='$clavemat' AND Periodo='$per'";

while ($NumeroMatricula = $allMatricula->fetch_array(MYSQLI_ASSOC) {
	$asignado = $NumeroMatricula['Matricula'];

	$TMPmatricula = $sicoesnvo->query("SELECT Matricula,ApellidoP,ApellidoM,Nombres FROM Alumnos WHERE Matricula = '$asignado' ORDER BY ApellidoP,ApellidoM,Nombres");
	if (!empty($matricula)) {
		$matricula = $matricula + $TMPmatricula;
	}else{
		$matricula = $TMPmatricula;
	}
}*/ 

$a=1;
$pdf->Ln(11);
$rep=0;//total de reprobados
$totalum=0;//total de alumnos
$apo=0;//total de aprobados


while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
	$pdf->SetFont('Arial','B',7);
	$pdf->Ln(3);
	$pdf->Cell(14);
	$pdf->Cell(150,30,$a);
	$mat=$arrematri['matricula'];
	$pdf->Ln(0);
	$pdf->Cell(26);
	$pdf->Cell(150,30,$mat);
	$app=$arrematri['apellido_p'];
	$pdf->Ln(0);
	$pdf->Cell(46);
	$pdf->Cell(150,30,$app);
	$apm=$arrematri['apellido_m'];
	$pdf->Ln(0);
	$pdf->Cell(63);
	$pdf->Cell(150,30,$apm);
	$name=$arrematri['nombre_alumno'];
	$pdf->Ln(0);
	$pdf->Cell(82);
	$pdf->Cell(150,30,$name);
	$a++;
}

$pdf->Output();

?>
