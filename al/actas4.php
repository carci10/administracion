<center>
  <img src="images/proceso.jpg" width="517" height="66" />
<?php
session_start();

//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');
$parcial=$_SESSION['par'];
$per=$_SESSION['periodo'];
$docente=$_SESSION['id_profesor'];
	$id_tipoi=$_SESSION['id_tipoi'];

//$bd=$_SESSION['bd'];
$numcal=$_SESSION['numcal'];
$califs=$numcal-1;

echo "<br>";
echo "Parcial Seleccionado:".$parcial."<br>";
echo "Materia:".$_SESSION['materia']."Clave:".$_SESSION['clavemat']."<br>";
echo "Grupo:".$_SESSION['grup']."<br>";
$mat=$_SESSION['clavemat'];

for($i=1;$i<=$califs;$i++){
	$valor[$i]=$_SESSION["va".$i];
	
  $val=$valor[$i];
  $matri= $_SESSION["ma".$i];

		if($val>=70){
			$observacion='A';
		}
	
	    else
			if($val=="NP"){
    			$val=0;
			$observacion='NP';
  		}
	
	    else if($val=="NA"){
    			$val=0;
				$observacion='NA';
		
  		}
//	   Variables que pasan la calificacion y la matricula derl alumno ¡¡¡¡aunque no se como lo logra pero lo hace!!!
	//echo $_SESSION["va".$i]; 
	//echo $_SESSION["ma".$i];

  $fecha=date('Y-m-d');
    	//mysqli_query($conexion,"UPDATE calificaciones SET $parcial='$val' WHERE matricula='$matri' AND id_periodo='$per' AND id_materia='$mat'");
	$guarda_cal="insert into calificaciones (matricula,id_materia,id_periodo,id_tipoe,id_profesor,id_tipoi,calificacion,fecha_calificacion,observacion_calificacion) values ('$matri',$mat,$periodo,$parcial,$docente,$id_tipoi,$val,'$fecha','$observacion')";
	
	
	//echo $guarda_cal;
	
	$rs_ingresa=mysqli_query($conexion,$guarda_cal)or die("No se ingreso la captura: $guarda_cal ");
		
  
}

$consfolio=mysqli_query($conexion,"SELECT * FROM folioacta");

		
while($arrefolio=mysqli_fetch_assoc($consfolio)){
  $folio=$arrefolio['Folio'];
	
	//echo"Folio: $folio";
  	$folio=$folio+1;
		


$grupo=$_SESSION['grup'];

//$calv=$_SESSION['usuario'];

$_SESSION['folio']=$folio;




$altafolio = mysqli_query($conexion,"INSERT INTO folioacta VALUES ('$folio','$grupo','$mat','$parciale','$docente','$per','1')");
}
	
	//echo "INSERT INTO folioacta VALUES ('$folio','$grupo','$mat','$parciale','$docente','$per','1')";
/*
if (!$sicoes->query("        INSERT INTO sicoes.folioacta VALUES ('$folio','$grupo','$mat','$val','$calv','$per','1')")) {
    printf("Errormessage: %s\n", $sicoes->error);
}

echo " VALORES $folio,$grupo,$mat,$parcial,$calv,$per";
*/
?>





<br />
</p>
<table width="200" border="1" align="center">
  <tr>
    <td align="center"><a href="geneact1.php" target="_blank">Generar Acta</a></td>
  </tr>
</table>
<p><a href="certificadoacta.php" target="_blank"></a>  </p>
<p align="center"><font size="+1" color="#CC0000">Importante: Para entregar Acta de calificacion a Control Escolar es importante ir al menu y seleccionar la opcion generar acta.<br /> Da click en</font> <a href="menuprof.php">Menu Profesor</a> </p>
<p>
