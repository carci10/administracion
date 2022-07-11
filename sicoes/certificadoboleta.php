<script language="php">
session_start();
include ('clases/conexion.php');
include ('clases/leerparcial.php');
require('fpdf.php');
$pdf=new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('images/boleta.jpg',7,8,200);
$matricula=$_SESSION['matricula'];
$nombre=$_SESSION['Nombre'];
$app=$_SESSION['ApellidoPaterno'];
$apm=$_SESSION['ApellidoMaterno'];
$dif=substr($matricula,0,4);
$carr=$_SESSION['Carrera'];

//FLUJO ENTRE DATABASE sicoes2 Todos antes del 2010 sicoesnvo Todos adelante del 2010
if ($dif < "2010"){
 
  $res2=$sicoes2->query("SELECT Grupo FROM sicoes2.Kardex WHERE Matricula='$matricula' ORDER BY Grupo");
  }else{

  $res2=$sicoesnvo->query("SELECT Grupo FROM sicoesnvo.Calif where Matricula='$matricula' ORDER BY Grupo");
  }

while ($arre2=$res2->fetch_array(MYSQLI_ASSOC) ){
  $sem=$arre2['Grupo'];
  
}

$ulsem= substr($sem,1,1); //OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
$semes=$ulsem;
//$semact=$ulsem + 1;//OBTIENE EL SEMESTRE A CURSAR
$semestre="0".$semes;

if ($carr==01){
  $carrera="Lic. en Administración";
}if ($carr==07){
  $carrera="Ing. en Sistemas Computacionales ";
}
if ($carr==36){
$carrera="Ing. Informática ";
}
if ($carr==20){
  $carrera="Ing. Electrónica ";
}
if ($carr==05){
  $carrera="Ing. Ambiental";
}
if ($carr==06){
  $carrera="Arquitectura";
}
if ($carr==70){
  $carrera="Ing.Biomedica";
}
session_register("carr");
$_SESSION['carr']=$carrera;
$tipo="ORD";
$fecha=date("d-m-o");

//$consulta="select MATERIA,Defin from Kardex where Matricula='$matricula' and PeriodoDef='$periodo';";//selecciona los grupos del alumno aquie esta el problema
//$consulta="select MATERIA,Defin from Calif where Matricula='$matricula' and Per='$periodo' and Tipo='$tipo';";//selecciona los grupos del alumno aquie esta el problema


/*
echo "<table align=center>";
echo "<tr><td><strong>Nombre:</strong>"."".$nombre ."  ". $app."  ". $apm."</td><td>    </td><td><strong>Carrera:</strong>".$carr."</td></tr>";
echo "<tr><td><strong>No. de Matricula:</strong>".$matricula."</td>><td></td><td><strong>Semestre:</strong>".$semestre."</td></tr>";
echo "<tr><td><strong>Periodo:</strong>".$periodo."</td><td></td><td><strong>Fecha:</strong>".$fecha."</td></tr>";
echo "</table><br><br>";
echo "<table border=0 align=center>";
echo"<tr bgcolor=green><td>CLAVE</TD><TD>MATERIA</TD><TD>CRED</TD><TD>ORD</TD><TD>EXT</TD><td>REC</td><td>INT</td><td>SUF</td>";
*/
$resultadoa1=$sicoesnvo->query("select sum(Defin) as prome,count(*) as prom from sicoesnvo.kardex where Matricula='$matricula' and Periodo='17-1'");
      $arregloa1=$resultadoa1->fetch_array(MYSQLI_ASSOC);
      $dato11=$arregloa1['prome'];
	  $datos22=$arregloa1['prom'];
	  $Promedios=$dato11/$datos22;
	  $promdef= substr($Promedios,0,3);
	  
$pdf->SetFont('Arial','B',12);
//$pdf->Image('images/barrarep.jpg',18,31,190);

$pdf->Ln(28);
$pdf->Cell(8);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,"NOMBRE:".$nombre ."  ". $app."  ". $apm);
$pdf->Ln(0);
$pdf->Cell(103);

$pdf->Cell(150,30,"CARRERA:".$carr);

$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(150,30,"NO. DE MATRICULA:".$matricula);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"SEMESTRE:".$semestre);

$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(150,30,"PERIODO:".$periodo);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"PROMEDIO:".$promdef);

$pdf->Ln(5);
$pdf->Cell(8);                 
$pdf->Cell(150,30,"FECHA:".$fecha);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"GRUPO:".$sem);
$pdf->SetFont('Arial','',8);
$pdf->Ln(7);
$pdf->Cell(55);
$pdf->Cell(150,30,"");

$resultado=$sicoes2->query("SELECT MATERIA,Defin FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef = '$periodo' ");
$resultadox2=$sicoesnvo->query("SELECT PeriodoDef FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef = '$periodo' ");


//APARTIR DE AQUI NO IMPRIME NADA 
  while($arreglo = $resultado->fetch_array(MYSQLI_ASSOC)){
    
    //echo "<tr>";
    $dato=$arreglo['MATERIA'];
    $dato1=$arreglo['Defin'];

    
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';";
    $resultado2=$sicoes2->query("SELECT Nombre,Cred FROM sicoesnvo.Materias WHERE MATERIA='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    $dat=$arreglo1['Nombre'];
    $dat1=$arreglo1['Cred'];

    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
    $resultado3=$sicoes2->query("SELECT Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia FROM sicoesnvo.Kardex WHERE MATERIA='$dato' AND Matricula='$matricula' and PeriodoDef='$periodo'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['Extraordinario2'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=$sicoes2->query("SELECT Defin FROM sicoesnvo.Calif WHERE Matricula = '$matricula' AND MATERIA = '$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      $dato1=$arregloa['Defin'];
    }
    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }
    
  $pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(150,30," ".$dato."       ".$dat);
$pdf->Ln(0);
$pdf->Cell(93);
$pdf->Cell(150,30,$dat1);
$pdf->Ln(0);
$pdf->Cell(107);
$pdf->Cell(150,30,$dato1);
$pdf->Ln(0);
$pdf->Cell(120);
$pdf->Cell(150,30,$dato2);
$pdf->Ln(0);
$pdf->Cell(135);
$pdf->Cell(150,30,$dato3);
$pdf->Ln(0);
$pdf->Cell(150);
$pdf->Cell(150,30,$dato4);
$pdf->Ln(0);
$pdf->Cell(165);
$pdf->Cell(150,30,$dato5);
  
  
  
  }
  
  
  
  
  
if($datos22 > '6'){
$pdf->Ln(35);

}else
{
$pdf->Ln(52);
}  
  
  
// entra la segunda parte

















if ($dif < "2010"){
 
  $res2=$sicoes2->query("SELECT Grupo FROM sicoes2.Kardex WHERE Matricula='$matricula' ORDER BY Grupo");
  }else{

  $res2=$sicoesnvo->query("SELECT Grupo FROM sicoesnvo.Calif where Matricula='$matricula' ORDER BY Grupo");
  }

while ($arre2=$res2->fetch_array(MYSQLI_ASSOC) ){
  $sem=$arre2['Grupo'];
  
}

$ulsem= substr($sem,1,1); //OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
$semes=$ulsem;
//$semact=$ulsem + 1;//OBTIENE EL SEMESTRE A CURSAR
$semestre="0".$semes;

if ($carr==01){
  $carrera="Lic. en Administración";
}if ($carr==07){
  $carrera="Ing. en Sistemas Computacionales ";
}
if ($carr==36){
$carrera="Ing. Informática ";
}
if ($carr==20){
  $carrera="Ing. Electrónica ";
}
if ($carr==05){
  $carrera="Ing. Ambiental";
}
if ($carr==06){
  $carrera="Arquitectura";
}
if ($carr==70){
  $carrera="Ing.Biomedica";
}
session_register("carr");
$_SESSION['carr']=$carrera;
$tipo="ORD";
$fecha=date("d-m-o");

//$consulta="select MATERIA,Defin from Kardex where Matricula='$matricula' and PeriodoDef='$periodo';";//selecciona los grupos del alumno aquie esta el problema
//$consulta="select MATERIA,Defin from Calif where Matricula='$matricula' and Per='$periodo' and Tipo='$tipo';";//selecciona los grupos del alumno aquie esta el problema


/*
echo "<table align=center>";
echo "<tr><td><strong>Nombre:</strong>"."".$nombre ."  ". $app."  ". $apm."</td><td>    </td><td><strong>Carrera:</strong>".$carr."</td></tr>";
echo "<tr><td><strong>No. de Matricula:</strong>".$matricula."</td>><td></td><td><strong>Semestre:</strong>".$semestre."</td></tr>";
echo "<tr><td><strong>Periodo:</strong>".$periodo."</td><td></td><td><strong>Fecha:</strong>".$fecha."</td></tr>";
echo "</table><br><br>";
echo "<table border=0 align=center>";
echo"<tr bgcolor=green><td>CLAVE</TD><TD>MATERIA</TD><TD>CRED</TD><TD>ORD</TD><TD>EXT</TD><td>REC</td><td>INT</td><td>SUF</td>";
*/
$resultadoa1=$sicoesnvo->query("select sum(Defin) as prome,count(*) as prom from sicoesnvo.kardex where Matricula='$matricula' and Periodo='17-1'");
      $arregloa1=$resultadoa1->fetch_array(MYSQLI_ASSOC);
      $dato11=$arregloa1['prome'];
	  $datos22=$arregloa1['prom'];
	  $Promedios=$dato11/$datos22;
	  $promdef= substr($Promedios,0,3);
	  
$pdf->SetFont('Arial','B',12);
//$pdf->Image('images/barrarep.jpg',18,31,190);

$pdf->Ln(28);
$pdf->Cell(8);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(150,30,"NOMBRE:".$nombre ."  ". $app."  ". $apm);
$pdf->Ln(0);
$pdf->Cell(103);

$pdf->Cell(150,30,"CARRERA:".$carr);

$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(150,30,"NO. DE MATRICULA:".$matricula);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"SEMESTRE:".$semestre);

$pdf->Ln(5);
$pdf->Cell(8);
$pdf->Cell(150,30,"PERIODO:".$periodo);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"PROMEDIO:".$promdef);

$pdf->Ln(5);
$pdf->Cell(8);                 
$pdf->Cell(150,30,"FECHA:".$fecha);
$pdf->Ln(0);
$pdf->Cell(103);
$pdf->Cell(150,30,"GRUPO:".$sem);
$pdf->SetFont('Arial','',8);
$pdf->Ln(10);
$pdf->Cell(55);
$pdf->Cell(150,30,"");

$resultado=$sicoes2->query("SELECT MATERIA,Defin FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef = '$periodo' ");
$resultadox2=$sicoesnvo->query("SELECT PeriodoDef FROM sicoesnvo.Kardex WHERE Matricula='$matricula' AND PeriodoDef = '$periodo' ");


//APARTIR DE AQUI NO IMPRIME NADA 
  while($arreglo = $resultado->fetch_array(MYSQLI_ASSOC)){
    
    //echo "<tr>";
    $dato=$arreglo['MATERIA'];
    $dato1=$arreglo['Defin'];

    
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';";
    $resultado2=$sicoes2->query("SELECT Nombre,Cred FROM sicoesnvo.Materias WHERE MATERIA='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    $dat=$arreglo1['Nombre'];
    $dat1=$arreglo1['Cred'];

    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
    $resultado3=$sicoes2->query("SELECT Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia FROM sicoesnvo.Kardex WHERE MATERIA='$dato' AND Matricula='$matricula' and PeriodoDef='$periodo'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['Extraordinario2'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=$sicoes2->query("SELECT Defin FROM sicoesnvo.Calif WHERE Matricula = '$matricula' AND MATERIA = '$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      $dato1=$arregloa['Defin'];
    }
    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }
    
  $pdf->Ln(5);
$pdf->Cell(10);
$pdf->Cell(150,30," ".$dato."       ".$dat);
$pdf->Ln(0);
$pdf->Cell(93);
$pdf->Cell(150,30,$dat1);
$pdf->Ln(0);
$pdf->Cell(107);
$pdf->Cell(150,30,$dato1);
$pdf->Ln(0);
$pdf->Cell(120);
$pdf->Cell(150,30,$dato2);
$pdf->Ln(0);
$pdf->Cell(135);
$pdf->Cell(150,30,$dato3);
$pdf->Ln(0);
$pdf->Cell(150);
$pdf->Cell(150,30,$dato4);
$pdf->Ln(0);
$pdf->Cell(165);
$pdf->Cell(150,30,$dato5);
  
  
  
  }
    
/*
  while($arreglo = $resultadox2->fetch_array(MYSQLI_ASSOC)){
 
    echo "<tr>";
    $dato=$arreglo['MATERIA'];
    $dato1=$arreglo['Defin'];
    echo "<td>".$dato."<br></td>";
  
    //$consulta2="select Nombre,Cred from Materias where MATERIA='$dato';"; //AQUI ZONKED 
    $resultado2=$sicoesnvo->query("SELECT  Nombre,Cred FROM sicoesnvo.Materias WHERE MATERIA='$dato'");
    $arreglo1=$resultado2->fetch_array(MYSQLI_ASSOC);
    $dat=$arreglo1['Nombre'];
    $dat1=$arreglo1['Cred'];
    echo "<td>".$dat."<br></td>";
    echo "<td>".$dat1."<br></td>";

    $cont=$cont+1;
    $prom=$prom+$dato1;
    //if($dat1<7)
    //{
    //$consulta3="select Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia from Kardex where MATERIA='$dato' and Matricula='$matricula' and PeriodoDef='$periodo';";
    $resultado3=$sicoesnvo->query("SELECT Extraordinario,Extraordinario2,Recursamiento,Intensivo,Suficiencia FROM sicoesnvo.Kardex WHERE MATERIA='$dato' AND Matricula='$matricula' AND PeriodoDef='$periodo'");
    $arreglo2=$resultado3->fetch_array(MYSQLI_ASSOC);
    $extra2=$arreglo2['Extraordinario2'];

    if($extra2<>0){
      $dato2=$arreglo2['Extraordinario2'];
    }else{
      $dato2=$arreglo2['Extraordinario'];
    }

    $dato3=$arreglo2['Recursamiento'];
    $dato4=$arreglo2['Intensivo'];
    $dato5=$arreglo2['Suficiencia'];

    if($dato2==0){
      $dato2="";
    }else{
      //$consultaa="select Defin from Calif where Matricula='$matricula'  and MATERIA='$dato'";
      $resultadoa=$sicoesnvo->query("SELECT Defin FROM sicoesnvo.Calif WHERE Matricula='$matricula' AND MATERIA='$dato'");
      $arregloa=$resultadoa->fetch_array(MYSQLI_ASSOC);
      $dato1=$arregloa['Defin'];
    }

    if($dato3==0){
      $dato3=NULL;
    }
    if($dato4==0){
      $dato4=NULL;
    }
    if($dato5==0){
      $dato5=NULL;
    }

    echo "<td>".$dato1."<br></td>";
    echo "<td>".$dato2."<br></td>";
    echo "<td>".$dato3."<br></td>";
    echo "<td>".$dato4."<br></td>";
    echo "<td>".$dato5."<br></td>";
    echo"</tr>";    
  }
//$prome=$prom/$cont; //se clacula el promedio definitivo dividiendo la suma de calificaciones entre las materias
//$promdef=substr($prome,0,3);}

$resultadoa1=$sicoesnvo->query("select sum(Defin) as prome,count(*) as prom from sicoesnvo.kardex where Matricula='$matricula' and Periodo='16-1'");
      $arregloa1=$resultadoa1->fetch_array(MYSQLI_ASSOC);
      $dato11=$arregloa1['prome'];
	  $datos22=$arregloa1['prom'];
	  $Promedios=$dato11/$datos22;
	  $promdef= substr($Promedios,0,3);
//$PromedioSemestre=$sicoesnvo->query("select sum(Defin) as prome,count(*) as prom from sicoesnvo.kardex where Matricula='$matricula' and Periodo='16-1'");
//$ArregloPromedios=$PromedioSemestre->fetch_array(MYSQLI_ASSOC);
//$PromedioTotal= $ArregloPromedio['prome'];
//$numeroos =$ArregloPromedio['prom'];
//$promdef= $PromedioTotal/$numeroos;
//echo "imprimer total". $PromedioTotal;
//echo "Imprime Registro".$numeroos;
session_register("promedio");
$_SESSION['promedio']=$promdef;
echo "</table><br>";
echo "<table border=0 align=center><tr><td><strong>PROMEDIO:</strong>".$promdef."</td></tr></table>";

*/
//TESTING
/*
echo "Matricula ".$matricula." <br>";
echo "Nombre ".$nombre." <br>";
echo "APP ".$app." <br>";
echo "APM ".$apm." <br>";
echo "DIF ".$dif." <br>";
echo "CARR ".$carr." <br>";
echo "SEM ".$sem." <br>";
echo "ULSEM ".$ulsem." <br>";
echo "SEMES ".$semes." <br>";
echo "SEMESTRE ".$semestre." <br>";
echo "TIPO ".$tipo." <br>";
echo "FECHA ".$fecha." <br>";
echo "DATO ".$dato." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DAT ".$dat." <br>";
echo "DAT1 ".$dat1." <br>";
echo "CONT ".$cont." <br>";
echo "PROM ".$prom." <br>";
echo "EXTRA2 ".$extra2." <br>";
echo "DATO2 ".$dato2." <br>";
echo "DATO3 ".$dato3." <br>";
echo "DATO4 ".$dato4." <br>";
echo "DATO5 ".$dato5." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DATO ".$dato." <br>";
echo "DATO1 ".$dato1." <br>";
echo "DAT ".$dat." <br>";
echo "DAT1 ".$dat1." <br>";
echo "CONT ".$cont." <br>";
echo "PROM ".$prom." <br>";
echo "EXTRA2 ".$extra2." <br>";
echo "DATO2 ".$dato2." <br>";
echo "DATO3 ".$dato3." <br>";
echo "DATO4 ".$dato4." <br>";
echo "DATO5 ".$dato5." <br>";
echo "DATO1 ".$dato1." <br>";
echo "PROME ".$prome." <br>";
echo "PROMDEF ".$promdef." <br>";
*/


$pdf->Output();
odbc_close($conect);
</script>