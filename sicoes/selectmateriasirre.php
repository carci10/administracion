<script language="php">
session_start();
</script>

<style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo2 {color: #000000; font-weight: bold; }
.Estilo3 {color: #333333}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','190','src','flash/encaalumno','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/encaalumno' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="800" height="190">
    <param name="movie" value="flash/encaalumno.swf" />
    <param name="quality" value="high" />
    <embed src="flash/encaalumno.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="800" height="190" ></embed>
  </object></noscript>
</p>

<p align="center">
<script language="php">
include ('clases/conexion.php');
include ('clases/leerparcial.php');
//session_start();
$matricula=$_SESSION['matricula'];
$conect=odbc_connect("sicoes","","");
$conect2=odbc_connect("sicoesnvo","","");
$mat1=$_REQUEST["1"];
$mat2=$_REQUEST["2"];
$mat3=$_REQUEST["3"];
$mat4=$_REQUEST["4"];
$mat5=$_REQUEST["5"];
$mat6=$_REQUEST["6"];
$mat7=$_REQUEST["7"];
$mat8=$_REQUEST["8"];
$mat9=$_REQUEST["9"];
$mat10=$_REQUEST["10"];
$mat11=$_REQUEST["11"];
$mat12=$_REQUEST["12"];
$mat13=$_REQUEST["9"];
session_register('materia1');
session_register('materia2');
session_register('materia3');
session_register('materia4');
session_register('materia5');
session_register('materia6');
session_register('materia7');
session_register('materia8');
session_register('materia9');
session_register('materia10');
session_register('materia11');
session_register('materia12');
session_register('materia13');
session_register('materia14');
$_SESSION['materia1']=$mat1;
$_SESSION['materia2']=$mat2;
$_SESSION['materia3']=$mat3;
$_SESSION['materia4']=$mat4;
$_SESSION['materia5']=$mat5;
$_SESSION['materia6']=$mat6;
$_SESSION['materia7']=$mat7;
$_SESSION['materia8']=$mat8;
$_SESSION['materia9']=$mat9;
$_SESSION['materia10']=$mat10;
$_SESSION['materia11']=$mat11;
$_SESSION['materia12']=$mat12;
$_SESSION['materia13']=$mat13;
$_SESSION['materia14']=$mat14;
echo "4 esto ".$_SESSION['materia11']=$mat11;
echo "5 esto ".$_SESSION['materia12']=$mat12;
/*
//echo "Materias:".$mat1,$mat2;
mysql_connect("localhost","tesi","sicoes");
$dif=substr($matricula,0,4);
$cont=0;
$consulprom="select Defin from Kardex where Matricula='$matricula';";//selecciona las calificaciones definitivas del alumno
if ($dif<"2010")
{
$resulprom=odbc_do($conect,$consulprom);
}
else
{
	$resulprom=odbc_do($conect2,$consulprom);
	}
  while ($arreprom=odbc_fetch_array($resulprom))//aqui se clacula el promedio
  {
  $cont=$cont+1;//se genera un contador para ver el numero de materias que se tienen
  $prom=$arreprom["Defin"];//se extrae la primer calificación del ciclo
  $prom2=$prom2+$prom;//se suman las calificaciones a lo largo del ciclo
  }
  $prome=$prom2/$cont;//se clacula el promedio definitivo dividiendo la suma de calificaciones entre las materias AQUI TAMBIEN
  $promdef=substr($prome,0,3);
  echo "Promedio General de la carrera:".$promdef."<br>
  Este promedio es una estimación, debes acudir control escolar a que lo calculen
  si eres candidato a descuento
";
*/   
session_register("promdef");//se enera la var de sssion del promedio para el reporte
session_register('semact');
$_SESSION['promdef']=$promdef;// se le asigna valor a la var de session para el reporte
$r1;
$r2;
$r3;
$r4;
$r5;
$r6;
$r7;
$r8;
$r9;


echo "<table border=1 align=center>";
print("<tr><td><center><b><font color=black>MATRICULA:".$matricula."<BR></font></tr></td></table>");
echo "<center><b>MATERIAS SELECCIONADAS<br>";
echo "<table  bordercolor=green  align=center>";
echo "<tr bgcolor=green align=center><font color=green><td>CLAVE_MATERIA</td><td>NOMBRE_MATERIA</td><td>CREDITOS</td></tr>";
if ($mat1 <> "" )
{
$r1=$mat1;
$resasig=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat1'");
$arreglo= $resasig->fetch_array(MYSQLI_ASSOC);
$nom=$arreglo['Nombre'];
$cred=$arreglo["Cred"];

//$consulta="select Nombre,Cred from Materias where MATERIA='$mat1';";//selecciona los grupos del alumno
//$arreglo=odbc_fetch_array($resul);
//$nom=$arreglo["Nombre"];
//$cred=$arreglo["Cred"];
echo "<tr><td align=center>".$mat1."</td><td>".$nom."</td><td align=center>".$cred."</td></tr>";
}
if ($mat2 <> "" )
{
$r2=$mat2;
$resasig1=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat2'");
$arreglo1= $resasig1->fetch_array(MYSQLI_ASSOC);
$nom1=$arreglo1['Nombre'];
$cred1=$arreglo1["Cred"];

//$consulta1="select Nombre,Cred from Materias where MATERIA='$mat2';";//selecciona los grupos del alumno

//$arreglo1=odbc_fetch_array($resul1);
//$nom1=$arreglo1["Nombre"];
//$cred1=$arreglo1["Cred"];
//echo $mat2.$nom1.$cred1."<br>";
echo "<tr><td align=center>".$mat2."</td><td>".$nom1."</td><td align=center>".$cred1."</td></tr>";

}
if ($mat3 <> "" )
{
$r3=$mat3;
//$consulta2="select Nombre,Cred from Materias where MATERIA='$mat3';";//selecciona los grupos del alumno
$resasig2=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat3'");
$arreglo2= $resasig2->fetch_array(MYSQLI_ASSOC);
$nom2=$arreglo2['Nombre'];
$cred2=$arreglo2["Cred"];

//$arreglo2=odbc_fetch_array($resul2);
//$nom2=$arreglo2["Nombre"];
//$cred2=$arreglo2["Cred"];
//echo $mat3.$nom2.$cred2."<br>";
echo "<tr><td align=center>".$mat3."</td><td>".$nom2."</td><td align=center>".$cred2."</td></tr>";
}
if ($mat4 <> "" )
{
$r4=$mat4;
//$consulta3="select Nombre,Cred from Materias where MATERIA='$mat4';";//selecciona los grupos del alumno
$resasig3=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat4'");
$arreglo3= $resasig3->fetch_array(MYSQLI_ASSOC);
$nom3=$arreglo3['Nombre'];
$cred3=$arreglo3["Cred"];
//echo $mat4.$nom3.$cred3."<br>";
echo "<tr><td align=center>".$mat4."</td><td>".$nom3."</td><td align=center>".$cred3."</td></tr>";
}
if ($mat5 <> "" )
{
$r5=$mat5;
$consulta4="select Nombre,Cred from Materias where MATERIA='$mat5';";//selecciona los grupos del alumno
$resasig4=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat5'");
$arreglo4= $resasig4->fetch_array(MYSQLI_ASSOC);
$nom4=$arreglo4['Nombre'];
$cred4=$arreglo4["Cred"];


//echo $mat5.$nom4.$cred4."<br>";


echo "<tr><td align=center>".$mat5."</td><td>".$nom4."</td><td align=center>".$cred4."</td></tr>";
}
if ($mat6 <> "" )
{
$r6=$mat6;
//$consulta5="select Nombre,Cred from Materias where MATERIA='$mat6';";//selecciona los grupos del alumno
$resasig5=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat6'");
$arreglo5= $resasig5->fetch_array(MYSQLI_ASSOC);
$nom5=$arreglo5['Nombre'];
$cred5=$arreglo5["Cred"];
//$consulta5="select Nombre,Cred from Materias where MATERIA='$mat6';";//selecciona los grupos del alumno

//$arreglo5=odbc_fetch_array($resul5);
//$nom5=$arreglo5["Nombre"];
//$cred5=$arreglo5["Cred"];
//echo $mat6.$nom5.$cred5."<br>";


echo "<tr><td align=center>".$mat6."</td><td>".$nom5."</td><td align=center>".$cred5."</td></tr>";
}
if ($mat7 <> "" )
{
$r7=$mat7;
//$consulta6="select Nombre,Cred from Materias where MATERIA='$mat7';";//selecciona los grupos del alumno
$resasig6=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat7'");
$arreglo6= $resasig6->fetch_array(MYSQLI_ASSOC);
$nom6=$arreglo6['Nombre'];
$cred6=$arreglo6["Cred"];
//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat7."</td><td>".$nom6."</td><td align=center>".$cred6."</td></tr>";

}
if ($mat8 <> "" )
{
$r8=$mat8;
//$consulta7="select Nombre,Cred from Materias where MATERIA='$mat8';";//selecciona los grupos del alumno
$resasig7=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat8'");
$arreglo7= $resasig7->fetch_array(MYSQLI_ASSOC);
$nom7=$arreglo7['Nombre'];
$cred7=$arreglo7["Cred"];

//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat8."</td><td>".$nom7."</td><td align=center>".$cred7."</td></tr>";

}
if ($mat9 <> "" )
{
$r9=$mat9;
//$consulta8="select Nombre,Cred from Materias where MATERIA='$mat9';";//selecciona los grupos del alumno
$resasig8=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat9'");
$arreglo8= $resasig8->fetch_array(MYSQLI_ASSOC);
$nom8=$arreglo8['Nombre'];
$cred8=$arreglo8["Cred"];

//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat9."</td><td>".$nom8."</td><td align=center>".$cred8."</td></tr>";

}

if ($mat10 <> "" )
{
$r10=$mat10;
//$consulta8="select Nombre,Cred from Materias where MATERIA='$mat9';";//selecciona los grupos del alumno
$resasig9=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat10'");
$arreglo9= $resasig9->fetch_array(MYSQLI_ASSOC);
$nom9=$arreglo9['Nombre'];
$cred9=$arreglo9["Cred"];

//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat10."</td><td>".$nom9."</td><td align=center>".$cred9."</td></tr>";

}
if ($mat11 <> "" )
{
$r11=$mat11;
//$consulta8="select Nombre,Cred from Materias where MATERIA='$mat9';";//selecciona los grupos del alumno
$resasig10=$sicoesnvo->query("select Nombre,Cred from Materias where MATERIA='$mat11'");
$arreglo10= $resasig10->fetch_array(MYSQLI_ASSOC);
$nom910=$arreglo10['Nombre'];
$cred10=$arreglo10["Cred"];

//echo $mat6.$nom5.$cred5."<br>";
echo "<tr><td align=center>".$mat11."</td><td>".$nom910."</td><td align=center>".$cred10."</td></tr>";

}


echo "</table><br>";
$credtotal=$cred+$cred1+$cred2+$cred3+$cred4+$cred5+$cred6+$cred7+$cred8;
$semdef=$_SESSION['semdef'];
echo $semdef;
if($semdef==9)
{
     if($credtotal<19 || $credtotal>64) 
     {
         echo "<script language=javascript>alert('Para poder inscribirte los creditos deben ser minimo 19 y maximo 64')</script>"; 
         echo"
         <style type=text/css>
       <!--
        .Estilo1 {
        color: #000066;
        font-weight: bold;
        }
        -->
           </style>
       ";
        echo "
         <script language=javascript>alert('los creditos que seleccionaste son $credtotal')</script>
           ";
           echo"
            <script language=javascript>self.location.href='menualumno.php'</script>
             ";
         }

if($credtotal<38 || $credtotal>64)
{
echo "<script language=javascript>alert('Para poder inscribirte los creditos deben ser minimo 38 y maximo 64')</script>
";
  echo"
  <style type=text/css>
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
}
-->
  </style>
";
  echo "
  <script language=javascript>alert('los creditos que seleccionaste son $credtotal')</script>
";
  echo"
  <script language=javascript>self.location.href='menualumno.php'</script>
";
  }
}
  $consulbeca="select Beca from Alumnos where Matricula='$matricula';";//selecciona los grupos del alumno
if ($dif<"2010")
{
$resulbeca=odbc_do($conect,$consulbeca);
}
else
{
	$resulbeca=odbc_do($conect2,$consulbeca);
	}
$arrebec=odbc_fetch_array($resulbeca);
  $beca=$arrebec["Beca"];
  session_register("beca");//se genera la var de sessio de beca para el reporte
  $_SESSION['beca']=$beca;// se le asigna el valor a la variable de session para el reporte
 /* if($beca=="BP") //DESCOMENTAR ESTO PARA LA BECAS
  {
   echo "<center><img src='images/aviso2.jpg' width='722' height='89'>";//AQUI SE COMKENTO LO DE LA BECA TAMBIEN
echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table border=1 bordercolor=green>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td><td>$2,335.50</td></tr>
<tr><td>SEGURO</td><td>$59.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$2,425.50</td></tr></table>
<p>";
  }
  else
  {
  
//AQUI SE EMPIEZA A COMENTAR LO DE EL PROCENTAJE DE BECA
if ($promdef>=8.0 && $promdef<=8.99)//CALCULO DE LA COLEGIATURA DEL 33%
  {
  echo"El alumno tiene un apoyo del 33% en el pago de su colegiatura<BR><br>
";
  echo "
  <center>
</p>
<table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$1,494.50</td></tr>
<tr><td>SEGURO</td><td>$59.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$1,684.50</td></tr></table>
";

	}
	if ($promdef>=9.0 && $promdef<=9.49)//CALCULO DE LA COLOGIATURA DEL 50%
    {
       echo"El alumno tiene un apoyo del 50% en el pago de su colegiatura<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$1,168.00</td></tr>
<tr><td>SEGURO</td><td>$59.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$1,358.00</td></tr></table>
";

	}
   	if ($promdef>=9.5 && $promdef<=10)//CALCULO DE LA COLEGIATURA DEL 100%
    {
       echo"El alumno tiene un apoyo del 100% en el pago de su colegiatura<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL CON DESCUENTO</td><td>$0.0</td></tr>
<tr><td>SEGURO</td><td>$59.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$190.00</td></tr></table>
";

	}
	if ($promdef<=7.99)//CALCULO DE LA COLOGIATURA DEL 0%
    {
       echo"El ALUMNO NO CUENTA CON APOYO EN SU COLEGIATURA POR SU PROMEDIO<BR><br>";
       echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td><td>$2,335.50</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$2,466.50</td></tr></table>
";
	}


}
/*else//SI EL ALUMNO NO TIENEN BECA
{ 
//echo "El alumno cuenta con algun tipo de beca por lo cual no se aplica el descuento de colegiatura por promedio" ;//AQUI SE COMKENTO LO DE LA BECA TAMBIEN
echo "<center><table><tr><td><b>CANTIDAD A PAGAR</td></tr></table>";
echo "<table border=1 bordercolor=green>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$131.00</td></tr>
<tr><td>COLEGIATURA SEMESTRAL</td><td>$2,335.50</td></tr>
<tr><td>SEGURO</td><td>$59.00</td></tr>
<tr><td>TOTAL A PAGAR</td><td>$2,425.50</td></tr></table>
<p>";
  //} //AQUI SE TERMINA DE COMENTAR LO DE LAS BECAS
//mysql_db_query("sicoes","insert into inscripcion values('$matricula',1)");
*/

echo "<center><img src='images/aviso3.jpg' width='700' height='140'>";//AQUI SE COMKENTO LO DE LA BECA TAMBIEN
echo "<center><table><tr><td><b>CANTIDAD A PAGAR FAVOR DE VERIFICARLA EN CONTROL ESCOLAR</td></tr></table>";
echo "<table border=1 bordercolor=green>
<tr bgcolor=green align=center><td bgcolor=green><span class=Estilo1>CONCEPTO</span></td>
<td><span class=Estilo1>TARIFA</td></tr>
<tr><td>REINSCRIPCION SEMESTRAL</td><td>$151</td></tr>
<tr><td>COLEGIATURA SEMESTRAL COMPLETA SIN DESCUENTO</td><td>$2687</td></tr>
<tr><td>SEGURO</td><td>PENDIENTE</td></tr></table>
<tr><td>TOTAL A PAGAR</td><td>$2,779</td></tr></table>
<p>";
  

  odbc_close($conect);
  odbc_close($conect2);
echo "<script language=javascript>alert('Verifica que las materias que se muestran sean correctas  e imprime tu tira de materias de incripción en el boton de ficha de inscripción')</script>";
  </script>
<p align="center" class="Estilo2">Verifica que las materias sean las seleccionadas, previamente y que los costos correspondan a tu promedio </p>
<p align="center" class="Estilo2">CUENTA PARA DEPOSITOS</p>
<table width="200" align="center">
  <tr>
    <td ><div align="center"></div></td>
    <td ><div align="center"></div></td>
  </tr>
  <tr>
    <td></td>
    <td><div align="center"></div></td>
  </tr>
</table>

<p align="center"><a href="certificadoirregular.php?dato=<?php echo $r1; ?>&dato2=<?php echo $r2; ?>&dato3=<?php echo $r3; ?>&dato4=<?php echo $r4; ?>&dato5=<?php echo $r5; ?>&dato6=<?php echo $r6; ?>&dato7=<?php echo $r7; ?>&dato8=<?php echo $r8; ?>&dato9=<?php echo $r9; ?>&mat=<?php echo $matricula; ?>" target="_blank"><img src="images/ficha.jpg" width="71" height="76" border="0" /></a><a href="destroy.php" ><img src="images/salir.jpg" width="71" height="76" border="0" /></a></p>
<p align="center"><strong>Al imprimir tu comprobante no olvides por seguridad, cerrar  tu sesi&oacute;n.</strong></p>
<p align="center">
<center><a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a></center>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
