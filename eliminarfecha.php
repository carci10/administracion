<?php
	include('conexion.php');
	$id = $_GET['Id'];
	 /*ELIMINAMOS LOS CURSOS QUE TIENE ASIGNADO EL ALUMNO*/
        $sql1 = "delete from fecha_cita where id_fecha=".$id;
//echo'$sql1 = "delete from fecha_cita where id_fecha=".$id;';
         mysqli_query($conexion,$sql1);
         
	//$sql = "DELETE FROM curso WHERE idcurso=".$id;
      //  mysql_query($sql,$conexion);
	header('Location:consulta_fecha.php');

 ?>