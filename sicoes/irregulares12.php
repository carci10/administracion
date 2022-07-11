<script language="php">
session_start();
if ($_SESSION['usuario']=="")
{
  echo"<script language=javascript>alert('Error de sesion')</script>";
echo"<script language=javascript>self.location.href='destroy.php'</script>";
}

$conect=odbc_connect("sicoes","","");
$conect2=odbc_connect("sicoesnvo","","");
mysql_connect("localhost","tesi","sicoes");
</script>

<style type="text/css">
<!--
.Estilo1 {
	color: #000000;
	font-weight: bold;
}
.Estilo2 {color: #FF0000; font-weight: bold; }
.Estilo4 {color: #000000}
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
<img src="images/irregulares1.jpg" width="791" height="85" /></p>
<p align="center" class="Estilo1 Estilo4">
<script language="php">
//session_start();
$nombre=$_SESSION['usuario'];
session_register("carrera");
session_register("semestre");
session_register("semestredef");
session_register("matri");
$Matricula=$_SESSION['matricula'];
$_SESSION['matri']=$Matricula;
$dif=substr($Matricula,0,4);
$perido="14-2";//BLOQUE NUEVO
///AQUI SE MOVIO PARA SACAR EL GRUPO
$consulta="select Grupo from Kardex where Matricula='$Matricula' ORDER BY Grupo ;";
$cons2a="select Grupo from Calif where Matricula='$Matricula' ORDER BY Grupo;";
//$consulta="select Grupo from Calif where Matricula='$Matricula'   and Periodo='$perido';";//selecciona los grupos del alumno
//$consulta="select Grupo from Kardex where Matricula='$matricula'   and PeriodoDef='$perido';";//selecciona los grupos del alumno
//$consulta="select Grupo from TiraMat where Matricula='$matricula' ORDER BY Grupo ;";//selecciona los grupos del alumno
if ($dif<"2010")
{
$resultado=odbc_do($conect,$consulta);
}
else
{
$resultado=odbc_do($conect2,$cons2a);
}

$consulta2="select CARRERA from Alumnos where Matricula='$Matricula';";//selecciona la carrera del alumno
if ($dif<"2010")
{
$resul=odbc_do($conect,$consulta2);
}
else
{
$resul=odbc_do($conect2,$consulta2);
}
$arreglo2=odbc_fetch_array($resul);
$carr=$arreglo2['CARRERA'];//OBTIENE LA CARRERA DEL ALUMNO
$_SESSION['carrera']=$carr;
$nureg=odbc_num_rows($resultado);
while ($arreglo=odbc_fetch_array($resultado))
{
$semestre=$arreglo["Grupo"];//saca los semestres del del alumno
//echo "Semestre".$semestre;
//$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO
}



//echo "semestre".$semestre."carrera".$carrera;
$ulsem= substr($semestre,1,1);//OBTIENE EL ULTIMO SEMESTRE CURSADO POR EL ALUMNO

$semact=$ulsem+1;//OBTIENE EL SEMESTRE A CURSAR +1
$semdef="0".$semact;
echo "Semestre a cursar".$semdef;
$_SESSION['semestredef']=$semdef;
$_SESSION['matricula']=$matricula;
if ($semact>9)
{
echo"<script language=javascript>alert('El ultimo periodo que cursaste fue noveno semestre acude a control escolar')</script>
  ";
  echo"
  <script language=javascript>self.location.href='index.php'</script>
  ";
  }



//AQUI SE TERMINA PARA SACAR EL GRUPO Y SEMESTRE


echo "<table border=0 align=center ";
print("<tr><td><center><b><font color=black>MATRICULA:".$Matricula."<BR></font></tr></td></table>");
$Verificar="select * from kardex where Matricula='$Matricula'";
if ($dif<"2010")
{
$resveri=odbc_do($conect,$Verificar);
}
else
{
	$resveri=odbc_do($conect2,$Verificar);
	}
//$Verificar=mysql_db_query("control","select * from kardex where Matricula='$Matricula'");
//		while($Calificacion=mysql_fetch_array($Verificar)){
			while($Calificacion=odbc_fetch_array($resveri)){
			$CalifDefinitiva=$Calificacion["Defin"];
			$Materia=$Calificacion["MATERIA"];
			if($CalifDefinitiva<7){
				$MateriasReprobadas[]=$Materia;
				$CalMateriasReprobadas[]=$CalifDefinitiva;
				$Irregular=1;
			}
		}
		if($Irregular==1){
echo "<center><table border='1' >";
						echo "<tr bgcolor=green><td><div align='center'><span><b>Materias Resagadas</b></span></div></td></tr>";
						echo "</table>";
						echo "<table border='1'>";
						echo "<tr bgcolor=green><td><div align='center'><span>Materia</span></div></td><td><div align='center'><span>Calificacion</span></div></td></tr>";
for($i=0;$i<count($MateriasReprobadas);$i++){
								//$NomMateriasReprobadas=mysql_db_query("control","select * from materias where Materia='$MateriasReprobadas[$i]'");

								$NomMateriasReprobadas="select * from Materias where MATERIA='$MateriasReprobadas[$i]'";
								if ($dif<"2010")
                                {
								$resnommat=odbc_do($conect,$NomMateriasReprobadas);
								}
								else
								{
								$resnommat=odbc_do($conect2,$NomMateriasReprobadas);
								}
								//while($NombreMateriaReprobada=mysql_fetch_array($NomMateriasReprobadas)){
echo "<tr>";
while($NombreMateriaReprobada=odbc_fetch_array($resnommat)){
									$Nombre=$NombreMateriaReprobada['Nombre'];

								}
								echo "<tr><td>$Nombre</td>";
								echo "<td>$CalMateriasReprobadas[$i]</td></tr>";
							}
						echo "</table></center>";
					}


$contador=0;
	$consulta="select * from materias where Carrera='$carr' and Semestre='$semdef'";
          if ($dif<"2010")
                {
             $rescons=odbc_do($conect,$consulta);
				}
				else
				{
					             $rescons=odbc_do($conect2,$consulta);
					}
	while($arreglo=odbc_fetch_array($rescons)){
		$idMateria=$arreglo['MATERIA'];
		$NomMat=$arreglo['Nombre'];
		$Preid1=$arreglo['PREID1'];
		$Preid2=$arreglo['PREID2'];
		#CODIGO PARA AGREGAR 
		mysql_db_query("sicoes","insert into irregular values('$Matricula','$idMateria','$NomMat')");

		
		
	 if(count($MateriasReprobadas)>0){
			for($i=0;$i<count($MateriasReprobadas);$i++){
				if($Preid1==$MateriasReprobadas[$i]){
					$MateriasRequisito[]=$MateriasReprobadas[$i];
					$MateriasNoCursa[]=$idMateria;
				}
							
				//aqui se agrego
				else
				{
					$consul="select * from Materias where MATERIA='$Preid1'";
          if ($dif<"2010")
                {

$rescon=odbc_do($conect,$consul);
				}
				else
				{
					$rescon=odbc_do($conect2,$consul);
					}
while($arreglo=odbc_fetch_array($rescon))
					{
						$Preid1A=$arreglo['PREID1'];
					}
					
					if($Preid1A==$MateriasReprobadas[$i])
					{
						$MateriasRequisito[]=$MateriasReprobadas[$i];
						$MateriasNoCursa[]=$idMateria;
					}
			
					
				}
				
				//hasta aqui
				
				if($Preid2==$MateriasReprobadas[$i]){
					$MateriasRequisito[]=$MateriasReprobadas[$i];
					$MateriasNoCursa[]=$idMateria;
				}
			}
		}
		
	}
$consulta=mysql_db_query("sicoes","select * from irregular where Matricula='$Matricula'");
		while($arreglo=mysql_fetch_array($consulta)){
			$Requisito=$arreglo['idMateria'];
			for($i=0;$i<count($MateriasNoCursa);$i++){
				if($Requisito==$MateriasNoCursa[$i]){
					//ELIMINAMOS DE LA TABLA IRREGULARES LAS MATERIAS QUE NO VAN A PODER SER CURSADAS POR EL ALUMNO
					mysql_db_query("control","delete from irregular where idMat='$MateriasNoCursa[$i]' and Matricula='$Matricula'");			
					}
				}
			}				

echo "<center><img src='images/aviso.jpg' width='722' height='89'><br>
<table border=1><tr bgcolor=green><td>Materia</td><td>Clave</td></tr>";	

$consulta=mysql_db_query("sicoes","select * from irregular where Matricula='$Matricula'");
		while($arreglo=mysql_fetch_array($consulta)){
			$Requisito=$arreglo['IdMateria'];
			$Nombre=$arreglo['NomMat'];

						echo "<tr><td>$Nombre</td><td>$Requisito</td></tr>";
						$contador++;

			mysql_db_query("sicoes","delete from irregular where idMateria='$Requisito' and Matricula='$Matricula'");
}
			echo "</table>";
			
			
//BORRANDO MATERIAS DE LA TABLA IRREGULAR PARA EVITAR CONFLICTOS
		$consulta=mysql_db_query("sicoes","select * from irregular where Matricula='$Matricula'");
		while($arreglo=mysql_fetch_array($consulta)){
			$Requisito=$arreglo['Requisito'];

		}			

		//FIN DEL NUEVO BLOQUE
//echo "Usuario:".$nombre;



  odbc_close($conect);
  mysql_close();
  odbc_close($conect2);

  </script>
<center><a href="destroy.php"><img border="0" src="images/cerrarsesion.png" width="120" height="47" /></a></center><br />
<p align="center"><br />
<p><a href="impirregulares.php" target="_blank"><img src="images/imorimir.jpg" alt="" width="89" height="62" border="0" /></a></p><br />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="100">
    <param name="movie" value="flash/piepag.swf" />
    <param name="quality" value="high" />
    <embed src="flash/piepag.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="100" ></embed>
  </object>
</p>
