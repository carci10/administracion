<?php
session_start();
require('fpdf.php');
include('clases/conexion.php');
include('clases/leerparcial.php');

$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/acta.jpg',7,8,200);

//Variables utilizadas
$clav=$_SESSION['usuario'];//clave del profesor
$rs_profesor=mysqli_query($conexion,"select id_profesor from profesores where correo_profesor='$clav'");
$row = mysqli_fetch_assoc($rs_profesor);
$id_profesor=$row['id_profesor'];



$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario
$parcial=$_REQUEST["periodo"];

//echo $valor;
//echo $parcial;

$rs_tipoe=mysqli_query($conexion,"select * from tipos_evaluaciones where id_tipoe=$parcial");
$row=mysqli_fetch_assoc($rs_tipoe);
$tipo_e=$row['descripcion_evaluacion'];

//$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
//$clavemat=substr($valor,4,4);//Obtiene la materia de la cadena enviada por el formulario
//$bd=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`

$rs_datos=mysqli_query($conexion,"select * from imparte where id_materia=$valor and id_periodo=$periodo");
$row=mysqli_fetch_assoc($rs_datos);


$grupo=$row['id_grupo'];
$clavemat=$row['id_materia'];

$id_periodo=$row['id_periodo'];
$rsperiodo=mysqli_query($conexion,"select descripcion_periodo from periodos where id_periodo=$id_periodo");
$row=mysqli_fetch_assoc($rsperiodo);
$periodo=$row['descripcion_periodo'];

$rsclavegrupo=mysqli_query($conexion,"select clave_grupo from grupos where id_grupo=$grupo");
$row=mysqli_fetch_assoc($rsclavegrupo);
$clave_grupo=$row['clave_grupo'];


$resasig=mysqli_query($conexion,"SELECT nombre_materia FROM materias WHERE id_materia = '$clavemat' ");

$arrnomat= $resasig->fetch_array(MYSQLI_ASSOC);
$materia=$arrnomat['nombre_materia'];
$per=$_SESSION['peri'];
//$consmateria="select Carrera from Materias where MATERIA='$clavemat';";//selecciona el nombre de la materia del profesor 

   $resmateria=mysqli_query($conexion,"SELECT id_carrera, clave_materia FROM materias WHERE id_materia= '$clavemat' ");

$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
$carr=$arrenommat['id_carrera'];
$calave_materia=$arrenommat['clave_materia'];


//$consfolio=mysql_db_query("sicoes","select Folio from folioacta  where Materia='$clavemat' and Grupo='$grupo' and Maestro='$clav' and Parcial='$parcial' and Periodo='$per'");
$consfolio=mysqli_query($conexion,"SELECT Folio FROM folioacta WHERE Materia='$clavemat' AND Grupo='$grupo' AND Maestro='$id_profesor' AND Parcial='$parcial' AND Periodo='$per'");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//echo"SELECT Folio FROM folioacta WHERE Materia='$clavemat' AND Grupo='$grupo' AND Maestro='$clav' AND Parcial='$parcial' AND Periodo='$per'";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$arrefolio=$consfolio->fetch_array(MYSQLI_ASSOC);
$folio=$arrefolio['Folio'];

//echo "Folio: $folio, Carrera: $carr, Materia: $materia, Clave Materia: $clavemat, Profesor: $id_profesor";


if($folio==""){
   echo "<script language=javascript>alert('No se han capturado calificaciones  no se puede genrar el acta')</script>";
   //echo "<script language=javascript>self.location.href='destroy.php'</script>";
}
if($carr==7){
   $carrera="Ing. Sistemas";	
}
if($carr==36){
   $carrera="Ing. Informática";	
}
if($carr==1){
   $carrera="Lic. Administración";	
}
if($carr==20){
   $carrera="Ing. Electronica";	
}
if($carr==5){
   $carrera="Ing. Ambiental";	
}
if($carr==8){
   $carrera="M. en Administración";	
}



$fecha=date("d-m-y");
$nombre=$_SESSION['nomprof'];
$pdf->SetFont('Arial','B',12);
$pdf->Ln(12);
$pdf->Cell(70);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,'Tipo de acta: '.$tipo_e);
$pdf->Ln(0);
$pdf->Cell(150);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,'Folio:'.$folio);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(9);
$pdf->Cell(32);
$pdf->Cell(150,30,utf8_decode("Asignatura: ".$materia));
$pdf->Ln(0);
$pdf->Cell(145);
$pdf->Cell(150,30,"Clave: ".$calave_materia);
$pdf->Ln(7);
$pdf->Cell(32);
$pdf->Cell(150,30,"Período: ".$periodo);
$pdf->Ln(0);
$pdf->Cell(62);
$pdf->Cell(150,30,"Grupo: ".$clave_grupo);
$pdf->Ln(0);
$pdf->Cell(92);
$pdf->Cell(150,30,"Carrera: ".$carrera);
$pdf->Ln(0);
$pdf->Cell(135);
$pdf->Cell(150,30,"Fecha: ".$fecha);
$pdf->Ln(15);
$pdf->Cell(65);
$pdf->Cell(150,30,utf8_decode("Nombre: ".$nombre));
$pdf->Ln(4);
$pdf->Cell(65);
$pdf->Cell(150,30,"Usuario o Correo: ".$clav);

//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula in (select Matricula from Calif where Grupo='$grupo' and MATERIA='$clavemat' and Periodo='$per') ORDER BY ApellidoP,ApellidoM,Nombres";



   $matricula=mysqli_query($conexion,"SELECT matricula, apellido_p, apellido_m, nombre_alumno FROM alumnos WHERE matricula IN (SELECT matricula FROM calificaciones WHERE id_materia='$clavemat' AND id_periodo='$per' ) ORDER BY apellido_p,apellido_m,nombre_alumno");


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
   $mat=$arrematri['matricula'];
   $pdf->Ln(0);
   $pdf->Cell(33);
   $pdf->Cell(150,30,$mat);
   $app=$arrematri['apellido_p'];
   $pdf->Ln(0);
   $pdf->Cell(60);
   $pdf->Cell(150,30,utf8_decode($app));
   $apm=$arrematri['apellido_m'];
   $pdf->Ln(0);
   $pdf->Cell(79);
   $pdf->Cell(150,30,utf8_decode($apm));
   $name=$arrematri['nombre_alumno'];
   $pdf->Ln(0);
   $pdf->Cell(96);
   $pdf->Cell(150,30,$name);

   //$consulcalif="select $parcial from Calif where Matricula='$mat' and Grupo='$grupo' and MATERIA='$clavemat' and Periodo='$per'";
   
   
      $rescons=mysqli_query($conexion,"SELECT * FROM calificaciones WHERE matricula='$mat' AND id_materia='$clavemat' AND id_periodo='$per' AND id_tipoe='$parcial'");
   

   $arrecons=$rescons->fetch_array(MYSQLI_ASSOC);
   $cal=$arrecons['calificacion'];
   $observacion=$arrecons['observacion_calificacion'];
   $totalum=$totalum+1;//Acumular los alumnos

   if($cal<70 || $cal==0){//Para acumular los reprobados
      $rep=$rep+1;   //Acumula los reprobados
   }
   if($cal>70 && $cal<=100){//Para acumular los reprobados
   	$apo=$apo+1;   //Acumula los reprobados
   }
   if($cal<70 and ($observacion=="NP" or $observacion=="NA")){
      $cal="0";
      $letra="$observacion";
   
      $pdf->Ln(0);
      $pdf->Cell(141);
      $pdf->Cell(150,30,$cal);
      $pdf->Ln(0);
      $pdf->Cell(161);
      $pdf->Cell(150,30,$letra);
   }else{
	     switch($cal){
			 case '70': $letra="SENTENTA"; break;
				 case '71': $letra="SETENTA Y UNO"; break;
				 case '72': $letra="SETENTA Y DOS"; break;
				 case '73': $letra="SETENTA Y TRES"; break;
				 case '74': $letra="SETENTA Y CUATRO"; break;
				 case '75': $letra="SETENTA Y CINCO"; break;
				 case '76': $letra="SETENTA Y SEIS"; break;
				 case '77': $letra="SETENTA Y SIETE"; break;
				 case '78': $letra="SETENTA Y OCHO"; break;
				 case '79': $letra="SETENTA Y NUEVE"; break;
				 case '80': $letra="OCHENTA"; break;
				 case '81': $letra="OCHENTA Y UNO"; break;
				 case '82': $letra="OCHENTA Y DOS"; break;
				 case '83': $letra="OCHENTA Y TRES"; break;
				 case '84': $letra="OCHENTA Y CUATRO"; break;
				 case '85': $letra="OCHENTA Y CINCO"; break;
				 case '86': $letra="OCHENTA Y SEIS"; break;
				 case '87': $letra="OCHENTA Y SIETE"; break;
				 case '88': $letra="OCHENTA Y OCHO"; break;
				 case '89': $letra="OCHENTA Y NUEVE"; break;
				 case '90': $letra="NOVENTA"; break;
				 case '91': $letra="NOVENTA Y UNO"; break;
				 case '92': $letra="NOVENTA Y DOS"; break;
				 case '93': $letra="NOVENTA Y TRES"; break;
				 case '94': $letra="NOVENTA Y CUATRO"; break;
				 case '95': $letra="NOVENTA Y CINCO"; break;
				 case '96': $letra="NOVENTA Y SEIS"; break;
				 case '97': $letra="NOVENTA Y SIETE"; break;
				 case '98': $letra="NOVENTA Y OCHO"; break;
				 case '99': $letra="NOVENTA Y NUEVE"; break;
				 case '100': $letra="CIEN"; break;
				 default: $letra="JCCR"; break;
				 
		 }
	   /*
      if($cal==70){
      	$letra="SETENTA";   
      }
	   
      if($cal==80){
      	$letra="OCHENTA";   
      }
      if($cal==90){
      	$letra="NOVENTA";   
      }
      if($cal==100){
      	$letra="CIEN";   
      }
	   */
	  // echo $totalum, $rep, $apo;
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