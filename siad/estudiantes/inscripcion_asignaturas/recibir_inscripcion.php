<?php 
session_start();
$codigo = $_SESSION["Codigo"];

include ('../../admin/conexion.php');
$asignatura = $_GET['id'];

$matricula=$_SESSION['matricula'];
$carrera=$_SESSION['carrera'];
$plan=$_SESSION['plan'];
$semestre_anterior=$_SESSION['semestre'];
$especialidad=$_SESSION['especialidad'];

$rsturno=mysqli_query($conexion,"select id_turno from alumnos where matricula='$matricula'");
$row=mysqli_fetch_assoc($rsturno);
$turno=$row['id_turno'];


$rsperiodo=mysqli_query($conexion,"select id_periodo as periodo,descripcion_periodo from periodos where estado_perido=1");
$row=mysqli_fetch_assoc($rsperiodo);
$periodo=$row['periodo'];



if($semestre_anterior==1 and $carrera==8){
	$grupo='8101';
	$rsgrupo=mysqli_query($conexion,"select id_grupo,clave_grupo from grupos where clave_grupo='$grupo'") or die("Problema con el grupo verifica con EL ADMINISTRADOR si ya dio de alta en el grupo en menu Grupos");
    $row=mysqli_fetch_assoc($rsgrupo);
    $id_grupo=$row['id_grupo'];
    

}
if($semestre_anterior==2 and $carrera==8){
 $grupo='8201';
	$rsgrupo=mysqli_query($conexion,"select id_grupo,clave_grupo from grupos where clave_grupo='$grupo'") or die("Problema con el grupo verifica con EL ADMINISTRADOR si ya dio de alta en el grupo en menu Grupos para la reinscripcion");
    $row=mysqli_fetch_assoc($rsgrupo);
    $id_grupo=$row['id_grupo'];

}

if($semestre_anterior==3 and $carrera==8){
 $grupo='8301';
	$rsgrupo=mysqli_query($conexion,"select id_grupo,clave_grupo from grupos where clave_grupo='$grupo'") or die("Problema con el grupo verifica con EL ADMINISTRADOR si ya dio de alta en el grupo en menu Grupos para la reinscripcion");
    $row=mysqli_fetch_assoc($rsgrupo);
    $id_grupo=$row['id_grupo'];

}


if($semestre_anterior==4 and $carrera==8){
 $grupo='8401';
	$rsgrupo=mysqli_query($conexion,"select id_grupo,clave_grupo from grupos where clave_grupo='$grupo'") or die("Problema con el grupo verifica con EL ADMINISTRADOR si ya dio de alta en el grupo en menu Grupos para la reinscripcion");
    $row=mysqli_fetch_assoc($rsgrupo);
    $id_grupo=$row['id_grupo'];

}

//$carrera=$_POST['carrera'];
//$grupo=$_POST['grupo'];
//$asignatura=$_POST['id'];
//$observaciones=$_POST['observaciones'];
//$estudiante=$_POST['estudiante'];
$fecha = date("Y-m-d");

$consulta="select * from inscripciones where matricula='$matricula' and id_materia=$asignatura and id_periodo=$periodo";
  $rsconsulta=mysqli_query($conexion,$consulta);
			$row = mysqli_fetch_assoc($rsconsulta);
            $mat=$row['matricula'];
			$asig=$row['id_materia'];
if($matricula==$mat && $asig==$asignatura){
				           echo '<script> alert("!! Cuidado¡¡ la materia ya la has inscrito una vez.");</script>';
					       echo '<script> window.location="../inscripcion_asignatura.php"; </script>';
}
	else{
		
		$consult="INSERT INTO inscripciones(matricula, id_materia, id_grupo, id_periodo, id_tipoi,fecha_inscripcion,id_semestre,id_carrera) VALUES('$matricula','$asignatura','$id_grupo','$periodo','1','$fecha','$semestre_anterior','$carrera')";
		

$guardar = mysqli_query($conexion,$consult);
					if ($guardar) {
							  echo '<script> alert("Inscripcion Realizada Correctamente.");</script>';
					       echo '<script> window.location="../inscripcion_asignatura.php"; </script>';
					}
					else
					{
							  echo '<script> alert("Error al Inscribir la asignatura. Intente de Nuevo'.$consult.' ");</script>';
					          echo '<script> window.location="../inscripcion_asignatura.php"; </script>';

				     }
 }
?>
