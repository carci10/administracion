<?php 
session_start();
//$codigo = $_SESSION["Codigo"];

include ('conexion.php');

$grupo=$_POST['grupo'];
$asignaturas=$_POST['asignaturas'];
//$observaciones=$_POST['observaciones'];
$matricula=$_POST['estudiante'];
$periodo=$_POST['periodo'];
$tipo=$_POST['tipoi'];
$fecha = date("Y-m-d");
$semestre=$_POST['semestre'];
$carrera=$_POST['carrera'];

$consulta="select * from inscripciones where matricula='$matricula' and id_materia=$asignaturas and id_tipoi=$tipo and id_periodo=$periodo";
  $rsconsulta=mysqli_query($conexion,$consulta);
			$row = mysqli_fetch_assoc($rsconsulta);
            $mat=$row['matricula'];
			$asig=$row['id_materia'];
if($matricula==$mat && $asig==$asignaturas)
				echo" <br><center>La materia $asignaturas, ya fue inscrita anteriormente al alumno $matricula en el periodo: $periodo de la carrera: $carrera </center> <br><center> <a href='inscripcion_Asignaturas.php'> Aceptar </a> </center>";
 else{
$guardar = mysqli_query($conexion,"INSERT INTO inscripciones(matricula,id_materia, id_grupo, id_periodo,id_tipoi, fecha_inscripcion,id_semestre,id_carrera) VALUES('$matricula', '$asignaturas','$grupo','$periodo','$tipo','$fecha','$semestre','$carrera')");
					if ($guardar) {
							  echo '<script> alert("Inscripcion Realizada Correctamente.");</script>';
					       echo '<script> window.location="inscripcion_Asignaturas.php"; </script>';
					}
					else
					{
							  echo '<script> alert("Error al Inscribir la asignatura. Intente de Nuevo.");</script>';
					          echo '<script> window.location="inscripcion_Asignaturas.php"; </script>';
					}
     }
?>