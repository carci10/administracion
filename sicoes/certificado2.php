<script language="php">
session_start();
$matricula=$_SESSION['matricula'];
$dif=substr($matricula,0,4);
//$matricula="200543215";

$conect=odbc_connect("sicoes","","");
$conect2=odbc_connect("sicoesnvo","","");
include ('clases/conexion.php');
include ('clases/leerparcial.php');
$mat1=$_SESSION['materia1'];
$mat2=$_SESSION['materia2'];
$mat3=$_SESSION['materia3'];
$mat4=$_SESSION['materia4'];
$mat5=$_SESSION['materia5'];
$mat6=$_SESSION['materia6'];
$mat7=$_SESSION['materia7'];
$mat8=$_SESSION['materia8'];
$mat9=$_SESSION['materia9'];
$promdef=$_SESSION['promdef'];
$beca=$_SESSION['beca'];
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
$mat11=$_GET["dato"];
$mat22=$_GET["dato2"];
$mat33=$_GET["dato3"];
$mat44=$_GET["dato4"];
$mat55=$_GET["dato5"];
$mat66=$_GET["dato6"];
$mat77=$_GET["dato7"];
$mat88=$_GET["dato8"];
$mat99=$_GET["dato9"];

//$pdf->SetFont('Arial','B',12);
//$pdf->Cell(25);
//$pdf->Cell(150,10,"TECNOLOGICO DE ESTUDIOS SUPERIORES DE IXTAPALUCA");
//$pdf->SetFont('Arial','B',8);
//$pdf->Ln(0);
//$pdf->Cell(47);
//$pdf->Cell(150,30,"Organismo Público Descentralizado del Estado de México");
//$pdf->Image('images/logo.jpg',170,8,20);
$DatosAlumno=$sicoesnvo->query("select Nombres,ApellidoP,ApellidoM,CARRERA from sicoesnvo.alumnos where Matricula='$matricula'");
 $arrnomat1= $DatosAlumno->fetch_array(MYSQLI_ASSOC);
 $NombreCompleto= $arrnomat1["Nombres"]." ".$arrnomat1["ApellidoP"]." ".$arrnomat1["ApellidoM"];
 $nombre=$arrnomat1["Nombres"];
 $app=$arrnomat1["ApellidoP"];
 $apm=$arrnomat1["ApellidoM"];
 
 $Carrera=$arrnomat1["CARRERA"];

$pdf->SetFont('Arial','B',12);
//$pdf->Image('images/barrarep.jpg',18,31,190);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(150,30,"DATOS DEL ALUMNO"."                                ".$fecha);
$pdf->Ln(10);
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
$pdf->SetFont('Arial','',8);
$pdf->Ln(7);
$pdf->Cell(55);
$pdf->Cell(150,30,"Verifica que tus datos personales sean correctos");
$pdf->Ln(1);
$pdf->Cell(5);
$pdf->Cell(150,30,"____________________________________________________________________________________________________________________");

//$pdf->Image('images/barrarep.jpg',18,75,190);
$pdf->SetFont('Arial','B',12);
$pdf->Ln(5);
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

if ($mat11 <> "" )
{
$resasig=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat11'");
$arreglo= $resasig->fetch_array(MYSQLI_ASSOC);
$nom=$arreglo['Nombre'];
$cred=$arreglo["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat11."   ".$nom);
}
if ($mat2 <> "" )
{

//$consulta1="select Nombre,Cred from Materias where MATERIA='$mat2';";//selecciona los grupos del alumno

$resasig1=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat2'");
$arreglo1= $resasig1->fetch_array(MYSQLI_ASSOC);
$nom1=$arreglo1['Nombre'];
$cred1=$arreglo1["Cred"];

$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat22."   ".$nom1);
}
if ($mat3 <> "" )
{

$resasig2=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat3'");
$arreglo2= $resasig2->fetch_array(MYSQLI_ASSOC);
$nom2=$arreglo2['Nombre'];
$cred2=$arreglo2["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat3."   ".$nom2);
}
if ($mat4 <> "" )
{

//$consulta3="select Nombre,Cred from Materias where MATERIA='$mat4';";//selecciona los grupos del alumno
$resasig3=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat4'");
$arreglo3= $resasig3->fetch_array(MYSQLI_ASSOC);
$nom3=$arreglo3['Nombre'];
$cred3=$arreglo3["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat4."   ".$nom3);
}
if ($mat5 <> "" )
{
//$consulta4="select Nombre,Cred from Materias where MATERIA='$mat5';";//selecciona los grupos del alumno
$resasig4=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat5'");
$arreglo4= $resasig4->fetch_array(MYSQLI_ASSOC);
$nom4=$arreglo4['Nombre'];
$cred4=$arreglo4["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat5."   ".$nom4);

}
if ($mat6 <> "" )
{
//$consulta5="select Nombre,Cred from Materias where MATERIA='$mat6';";//selecciona los grupos del alumno
$resasig5=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat6'");
$arreglo5= $resasig5->fetch_array(MYSQLI_ASSOC);
$nom55=$arreglo5['Nombre'];
$cred55=$arreglo5["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat6."   ".$nom55);
}
if ($mat7 <> "" )
{
$consulta6="select Nombre,Cred from Materias where MATERIA='$mat7';";//selecciona los grupos del alumno
$resasig6=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat7'");
$arreglo6= $resasig6->fetch_array(MYSQLI_ASSOC);
$nom6=$arreglo6['Nombre'];
$cred6=$arreglo6["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat7."   ".$nom6);
}
if ($mat8 <> "" )
{
$consulta7="select Nombre,Cred from Materias where MATERIA='$mat8';";//selecciona los grupos del alumno
$resasig7=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat8'");
$arreglo7= $resasig7->fetch_array(MYSQLI_ASSOC);
$nom7=$arreglo7['Nombre'];
$cred7=$arreglo7["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat8."   ".$nom7);
}
if ($mat9 <> "" )
{
$consulta8="select Nombre,Cred from Materias where MATERIA='$mat9';";//selecciona los grupos del alumno
if ($dif<"2010")
{

$resul8=odbc_do($conect,$consulta8);
}
else
{
	$resul8=odbc_do($conect2,$consulta8);
	}
$arreglo8=odbc_fetch_array($resul8);
$nom8=$arreglo8["Nombre"];
$cred8=$arreglo8["Cred"];
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(90,30,$mat9."   ".$nom8);
}




$resasig12=$sicoesnvo->query("select sum(a.Defin) as promedio,COUNT(*) as registros from kardex as a inner join sicoesnvo.materias as b on a.MATERIA=b.MATERIA where Matricula='$matricula'");
$arrnomat12= $resasig12->fetch_array(MYSQLI_ASSOC);
$Semestre12=$arrnomat12['promedio'];
$TotaldeMaterias12=$arrnomat12['registros'];
$Promedio12= $Semestre12/$TotaldeMaterias12;
$PromedioGeneral12= substr($Promedio12, 0, 3);
$ValidaDescuento12=0;




if($ValidaDescuento<>0){
$mensaje="0% TIENE MATERIAS REPROBADAS";
$importe=2687+151;
}else{
if($PromedioGeneral12<=8.9 and $PromedioGeneral12>=8.0){
$mensaje="33% tu pago es de $1881.00";
$importe=1881+151;
}else{
if($PromedioGeneral12<=9.4 and $PromedioGeneral12>=9.0){
$importe=1334+151;
$mensaje="50% tu pago es de $1344.00";
}else{
if($PromedioGeneral12<=10 and $PromedioGeneral12>=9.5){
$importe=151;
$mensaje="100%";
}else{
if($PromedioGeneral12<8.0){
$mensaje="2687.00 NO CUMPLES CON EL PROMEDIO MÍNIMO";
$importe=151+2687;
}
}
}
}
}





 
 











//$pdf->Image('images/barrarep.jpg',18,130,190);
$pdf->Ln(1);
$pdf->Cell(5);
$pdf->Cell(150,30,"____________________________________________________________________________________________________________________");
$pdf->SetFont('Arial','B',10);
$pdf->Ln(15);
$pdf->Cell(70);
$pdf->Cell(70,30,"");
PintarB(Barras(  $matricula  ), 85, 133, $pdf); ////descomentar aqui para el código de barras
$pdf->Image('images/barrarep.jpg',18,147,190);
$pdf->SetFont('Arial','B',10);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"CANTIDAD A PAGAR");
$pdf->SetFont('Arial','B',8);
$pdf->Ln(4);
$pdf->Cell(60);
$pdf->Cell(70,30,"En la cuenta  colocada al final de este documento");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$151.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$ ". $mensaje);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro:PENDIENTE");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$". $importe .".00");
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(70,30,"Aviso:Existe un descuento del 33%,50% o 100% dependiendo de tu promedio general de la carrera en el pago de la colegiatura"); 
$pdf->Ln(3);
$pdf->Cell(5);
$pdf->Cell(70,30,"semestral, para hacer efectivo el descuento no debes depositar en el banco, acude a caja para que se te realice el cálculo"); 
$pdf->Ln(3);
$pdf->Cell(5);
$pdf->Cell(70,30,"del descuento y se te indique la cantidad que debes pagar."); 
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(70,30,"En la página principal puedes verificar el monto  de los descuentos, pero solo en control escolar se autoriza el pago que aplica,"); 
$pdf->Ln(3);
$pdf->Cell(5);
$pdf->Cell(70,30,"no debes depositar antes si no se te ha autorizado el descuento."); 
$pdf->Ln(1);
$pdf->Cell(5);
$pdf->Cell(150,30,"____________________________________________________________________________________________________________________");

//Inicia la salida de la cantidad a pagar

 if($beca=="BP") //DESCOMENTAR ESTO PARA LA BECAS
  {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(40);
/*$pdf->Cell(70,30,"Actualmente cuentas con una beca PRONABE por lo tanto no eres candidato a descuento");
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"Si la información es incorrecta acude a control escolar para aclararlo y no realices el depósito");*/
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"NOTA: Cualquier duda con  la cantidad a pagar verificarlo en caja");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"CUENTA BANCARIA");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30,"");
}
  else
  {
  if ($promdef>=8.0 && $promdef<=8.99)//CALCULO DE LA COLEGIATURA DEL 33%
  {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(70,30,"Tienes un posible apoyo del 33% en el pago de tu colegiatura");
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"Acude a control escolar a verificar si la información es correcta y  autorizar el pago");
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->Cell(70,30,"Promedio estimado: ". $PromedioGeneral12);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"NOTA: Cualquier duda con  la cantidad a pagar verificarlo en caja");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30," ");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30," ");
}//termina el calculo del 30%
	if ($promdef>=9.0 && $promdef<=9.49)//CALCULO DE LA COLOGIATURA DEL 50%
    {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(70,30,"Tienes un posible apoyo del 50% en el pago de su colegiatura");
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"Acude a control escolar a verificar si la información es correcta y a autorizar el pago");
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->Cell(70,30,"Promedio estimado: ". $PromedioGeneral12);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"NOTA: Cualquier duda con  la cantidad a pagar verificarlo en caja");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30," ");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30," ");
}//Termina el calculo del 50%
   	if ($promdef>=9.5 && $promdef<=10)//CALCULO DE LA COLEGIATURA DEL 100%
    {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(70,30,"Tienes un posible apoyo del 100% en el pago de su colegiatura");
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"Acude a control escolar a verificar si la información es correcta y a autorizar el pago");
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->Cell(70,30,"Promedio estimado: ". $PromedioGeneral12);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"NOTA: Cualquier duda con  la cantidad a pagar verificarlo en caja");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30," ");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30," ");
}//Termina e claculo de la colegiatura del 100%
	if ($promdef<=7.99)//CALCULO DE LA COLOGIATURA DEL 0%
    {
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(70,30,"NO CUENTAS CON APOYO EN TU COLEGIATURA POR TU PROMEDIO");
$pdf->Ln(5);
$pdf->Cell(40);
$pdf->Cell(70,30,"Si la información es incorrecta consultalo en control escolar");
$pdf->Ln(5);
$pdf->Cell(80);
$pdf->Cell(70,30,"Promedio estimado: ". $PromedioGeneral12);
      $pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"NOTA: Cualquier duda con  la cantidad a pagar verificarlo en caja");
$pdf->Ln(5);
$pdf->Cell(30);
$pdf->Cell(70,30,"");
//  $pdf->Image('images/barrarep.jpg',18,202,190);
      $pdf->SetFont('Arial','B',10);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30," ");
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(75);
$pdf->Cell(75,30," ");
	}


}



//AQUI TERMINA UNA PARTE DE LO DE LAS BECAS HAY QUE DESCOMENTAR PARA VOLVER A UTILIZAR
//else//SI EL ALUMNO  TIENEN BECA AQUI TAMBIEN
//{ AQUI TAMBIEN

/* if($beca=="BP") //DESCOMENTAR ESTO PARA LA BECAS
  {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"Cantidad a pagar en la cuenta  colocada al final de este documento");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$131.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$2,335.50");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro:$59.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$2,425.50");


  }
  else
  {
  if ($promdef>=8.0 && $promdef<=8.99)//CALCULO DE LA COLEGIATURA DEL 33%
  {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"El alumno tiene un apoyo del 33% en el pago de su colegiatura");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$131.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$1,494.50");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro:$59.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$1,684.50");

}//termina el calculo del 30%
	if ($promdef>=9.0 && $promdef<=9.49)//CALCULO DE LA COLOGIATURA DEL 50%
    {
$pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"El alumno tiene un apoyo del 50% en el pago de su colegiatura");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$131.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$1,168.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro:$59.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$1,358.00");
	}//Termina el calculo del 50%
   	if ($promdef>=9.5 && $promdef<=10)//CALCULO DE LA COLEGIATURA DEL 100%
    {
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"El alumno tiene un apoyo del 100% en el pago de su colegiatura");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$131.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$0.0");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Seguro:$59.00");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$190.00");

}//Termina e claculo de la colegiatura del 100%
	if ($promdef<=7.99)//CALCULO DE LA COLOGIATURA DEL 0%
    {
      $pdf->SetFont('Arial','B',8);
$pdf->Ln(10);
$pdf->Cell(50);
$pdf->Cell(70,30,"El ALUMNO NO CUENTA CON APOYO EN SU COLEGIATURA POR SU PROMEDIO");
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(70,30,"Reinscripción Semestral:$0");
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Colegiatura Semestral:$0");
$pdf->Ln(5);
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(70,30,"Total a Pagar:$00");

      
	}


}AQUI TERMINA UNA PARTE DE LO DE LAS BECAS HAY QUE DESCOMENTAR PARA VOLVER A UTILIZAR*/








//  }AQUI TAMBIEN

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