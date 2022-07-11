<script language="php">
session_start();
$matricula=$_SESSION['matricula'];
//$matricula="200543215";
include ('clases/conexion.php');
include ('clases/leerparcial.php');
$nombre=$_SESSION['nombres'];
$app=$_SESSION['apellidop'];
$apm=$_SESSION['apellidom'];
$conect=odbc_connect("sicoesnvo","","");
$mat1=$_SESSION['materia1'];
$mat2=$_SESSION['materia2'];
$mat3=$_SESSION['materia3'];
$mat4=$_SESSION['materia4'];
$mat5=$_SESSION['materia5'];
$mat6=$_SESSION['materia6'];
$mat7=$_SESSION['materia7'];
$promdef=$_SESSION['promdef'];
$beca=$_SESSION['beca'];
$grupo=$_SESSION['grupo'];
$fecha=date("d-m-o");
require('fpdf.php');
//mysql_connect("localhost","root","");
//$consulta2=mysql_db_query("sicoes","select Clave from claves where Matricula='$matricula'");
//$arreglo2=mysql_fetch_array($consulta2);
//$clav=$arreglo2[0];
//class PDF extends FPDF //clase fpdf
//{
//function Header() //cabecera
//{
//
$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/fondoclave.jpg',7,8,200);
//$pdf->SetFont('Arial','B',12);
//$pdf->Cell(25);
//$pdf->Cell(150,10,"TECNOLOGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA");
//$pdf->SetFont('Arial','B',8);
//$pdf->Ln(0);
//$pdf->Cell(47);
//$pdf->Cell(150,30,"Organismo Público Descentralizado del Estado de México");
//$pdf->Image('images/logo.jpg',170,8,20);
$pdf->SetFont('Arial','B',12);
//$pdf->Image('images/barrarep.jpg',18,31,190);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(150,30,"DATOS DEL ALUMNO"."                                ".$fecha);
$pdf->Ln(5);
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
$pdf->Ln(5);
$pdf->Cell(60);
$pdf->Cell(150,30,"Grupo:".$grupo);

$pdf->SetFont('Arial','',8);
$pdf->Ln(7);
$pdf->Cell(55);
$pdf->Cell(150,30,"Verifica que tus datos personales sean correctos");
//$pdf->Image('images/barrarep.jpg',18,75,190);
$pdf->SetFont('Arial','B',12);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(90,30,"MATERIAS SELECCIONADAS");
$pdf->SetFont('Arial','',7);
$pdf->Ln(5);
$pdf->Cell(60);
$pdf->Cell(150,30,"Materias seleccionadas a cursar en el siguiente semestre por el alumno.");

$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,"CLAVE"."              "."NOMBRE");

if ($mat1 <> "" )
{
$resasig=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat1'");
$arreglo= $resasig->fetch_array(MYSQLI_ASSOC);
$nom=$arreglo["Nombre"];
$cred=$arreglo["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat1."   ".$nom);
}
if ($mat2 <> "" )
{

$resasig1=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat2'");
$arreglo1= $resasig1->fetch_array(MYSQLI_ASSOC);
$nom1=$arreglo1["Nombre"];
$cred1=$arreglo1["Cred"];
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat2."   ".$nom1);
}
if ($mat3 <> "" )
{

$resasig2=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat3'");
$arreglo2= $resasig2->fetch_array(MYSQLI_ASSOC);
$nom2=$arreglo2["Nombre"];
$cred2=$arreglo2["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat3."   ".$nom2);
}
if ($mat4 <> "" )
{

$resasig3=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat4'");
$arreglo3= $resasig3->fetch_array(MYSQLI_ASSOC);
$nom3=$arreglo3["Nombre"];
$cred3=$arreglo3["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat4."   ".$nom3);
}
if ($mat5 <> "" )
{
$resasig4=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat5'");
$arreglo4= $resasig4->fetch_array(MYSQLI_ASSOC);
$nom4=$arreglo4["Nombre"];
$cred4=$arreglo4["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat5."   ".$nom4);

}
if ($mat6 <> "" )
{
$resasig5=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat6'");
$arreglo5= $resasig5->fetch_array(MYSQLI_ASSOC);
$nom5=$arreglo5["Nombre"];
$cred5=$arreglo5["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat6."   ".$nom5);
}
if ($mat7 <> "" )
{
$resasig6=$sicoesnvo->query("select Nombre,Cred from sicoesnvo.Materias where MATERIA='$mat7'");
$arreglo6= $resasig6->fetch_array(MYSQLI_ASSOC);
$nom6=$arreglo6["Nombre"];
$cred6=$arreglo6["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat7."   ".$nom6);
}
//$pdf->Image('images/barrarep.jpg',18,130,190);
$pdf->SetFont('Arial','B',10);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(70,30,"");
PintarB(Barras(  $matricula  ), 85, 140, $pdf);
//$pdf->Image('images/barrarep.jpg',18,147,190);
$pdf->SetFont('Arial','B',10);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(70,30,"CANTIDAD A PAGAR");

//La cantidad a pagar en esta ocación, por ser primer ingreso se pagara todo, despues se veran los descuentos por promedio... 

$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(70,30,"");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Inscripción Semestral:$151.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$2,687.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro Contra Accidentes :Pendiente");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$2,838.00");

$pdf->Ln(10);
$pdf->Cell(30);
$pdf->Cell(70,30,"NOTA: Cualquier duda con el cálculo de la cantidad a pagar y los descuentos revisar la sección de cuotas");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"si existe algún problema en tus datos favor de verificarlo personalmente en el área de control escolar.");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(30);
$pdf->Cell(70,30,"PAGOS SOLO CON LINEA DE CAPTURA EXPEDIDA.");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30," ");
$pdf->Ln(5);
//$pdf->Cell(75);
//$pdf->Cell(70,30,"Santander:00000002");
//  $pdf->Image('images/barrarep.jpg',18,230,190);


//termina la salida de la cantidad a pagar por el alumno












function Barras($Codigo)
{
	$strCodigo="";
    $bc[1] = "1 1221";            //pre-amble
    $bc[2] = "1 1221";            //post-amble digits
    $bc[48] = "11 221";           //1
    $bc[49] = "21 112";           //2
    $bc[50] = "12 112";           //3
    $bc[51] = "22 111";           //4
    $bc[52] = "11 212";           //5
    $bc[53] = "21 211";           //6
    $bc[54] = "12 211";           //7
    $bc[55] = "11 122";           //8
    $bc[56] = "21 121";           //9
    $bc[57] = "12 121";           //0
    
                                //capital letters
    $bc[65] = "211 12";           //A
    $bc[66] = "121 12";           //B
    $bc[67] = "221 11";           //C
    $bc[68] = "112 12";           //D
    $bc[69] = "212 11";           //E
    $bc[70] = "122 11";           //F
    $bc[71] = "111 22";           //G
    $bc[72] = "211 21";           //H
    $bc[73] = "121 21";           //I
    $bc[74] = "112 21";           //J
    $bc[75] = "2111 2";           //K
    $bc[76] = "1211 2";           //L
    $bc[77] = "2211 1";           //M
    $bc[78] = "1121 2";           //N
    $bc[79] = "2121 1";           //O
    $bc[80] = "1221 1";           //P
    $bc[81] = "1112 2";           //Q
    $bc[82] = "2112 1";           //R
    $bc[83] = "1212 1";           //S
    $bc[84] = "1122 1";           //T
    $bc[85] = "2 1112";           //U
    $bc[86] = "1 2112";           //V
    $bc[87] = "2 2111";           //W
    $bc[88] = "1 1212";           //X
    $bc[89] = "2 1211";           //Y
    $bc[90] = "1 2211";           //Z
                                //Misc
    $bc[32] = "1 2121";           //space
    $bc[35] = "";                 //# cannot do!
    $bc[36] = "1 1 1 11";         //$
    $bc[37] = "11 1 1 1";         //%
    $bc[43] = "1 11 1 1";         //+
    $bc[45] = "1 1122";           //-
    $bc[47] = "1 1 11 1";         //   /
    $bc[46] = "2 1121";           //.
    $bc[64] = "";                 //@ cannot do!
    $bc[65] = "1 1221";           //*
	
	$strCodigo = $strCodigo . $bc[1];
	for( $i=0; $i<=strlen($Codigo)-1; $i++ )
	{	$strCodigo = $strCodigo . $bc[ord(substr($Codigo,$i,1))]; }
	$strCodigo = $strCodigo . $bc[1];
	return $strCodigo;
 }
 
 function PintarB( $strCod, $X, $Y, $pdf ) 
 {
	$X1=$X;
	$X2=$X;
	$Y1=$Y;
	$Y2=$Y + 5;
	$pdf->SetLineWidth(.3);
 	
	for( $i=0; $i<=strlen($strCod)-1; $i++ )
	{
		if ( substr($strCod, $i, 1) == "1")
		{
			$pdf->SetDrawColor(0,0,0);
			$pdf->Line($X1, $Y1, $X2, $Y2 );
			$X1+=.6;
			$X2+=.6;
			
		}
		elseif ( substr($strCod, $i, 1) == "2")
		{
			$pdf->SetDrawColor(0,0,0);
			$pdf->Line($X1, $Y1, $X2, $Y2 ); 
			$X1+=.3;
			$X2+=.3;
			$pdf->Line($X1, $Y1, $X2, $Y2 ); 
			$X1+=.6;
			$X2+=.6;
			
		}
		else
		{
			$pdf->SetDrawColor(256,256,256);
			$pdf->Line($X1, $Y1, $X2, $Y2 ); 
			$X1+=.6;
			$X2+=.6;
		}
	}
 }  




$pdf->Output();


//}
//}
</script>

