<?php

session_start();
if ($_SESSION["NivelUsuario"] == 1){
include('conexion.php');
?>
<center>
  <img src="../../imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<center>
<p>
 <center>
 <strong>MENU PARA REGISTRAR  ALUMNOS EGRESADOS</strong>
 </center> 
</p>

<form name="egreso" method="post" action="">
 <table border=1 width="34%" bordercolor=#669900>
    
    
    <tr>
    <td width="56%" style="width: 30%" scope="row"><p><strong> MATRICULA: </strong></p></td>
    <td width="44%"> <input type="text" name="matricula" id="matricula" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required"  onKeyUp="this.value=this.value.toUpperCase();" maxlength="10" ></td> </tr>
    
   
  </select></td></tr>

    </tr>
    
    
     <tr>
    <td><font face="Arial"><strong>Situacion</strong></td><td>
<select name="situacion" id="situacion" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$situacion	= "SELECT * FROM situacion_alumno where id_situacion=3";
	$rssituacion	= mysqli_query($conexion,$situacion);
	if(mysqli_num_rows($rssituacion) != 0){
		while($rowx	= mysqli_fetch_assoc($rssituacion)){
		echo '<option value="'.$rowx['id_situacion'].'">'.$rowx['descripcion_situacion'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>
</tr>
    
    
   
    
    <tr>
    
		<td><font face="Arial"><strong>Año de egreso</strong></td><td>
		<input type=date name="fecha_egreso">
</td></tr>

		
	 </td>
    </tr>
    
  
    <td scope="row" style="width:60%">
   <center><input type="submit" name="cambia_estado" value="REGISTRAR EGRESO"></center> 
 	</td> 

	<td scope="row" style="width:60%">
   <center><input type="submit" name="consulta_estado" value="CONSULTAR"></center> 
 	</td> 

	
  

</table>

</form>
	


	<?php
	
	//---------------------------------------------------------GUARDAR ESTATUS DE EGRESADO
	if(isset($_POST['cambia_estado'])){
		
		$matricula=$_POST['matricula'];
		$situacion=$_POST['situacion'];
		$egreso=$_POST['fecha_egreso'];
		//echo"$egreso";
		$consulta_estado="select matricula,nombre_alumno, apellido_m, apellido_p,descripcion_situacion, fecha_egreso from alumnos
inner join situacion_alumno on situacion_alumno.id_situacion=alumnos.id_situacion where matricula='$matricula'";
		$rsconsulta=mysqli_query($conexion,$consulta_estado);
		$rs=mysqli_fetch_assoc($rsconsulta);
		
			if($rs){
				
				$actualiza="update alumnos set id_situacion=$situacion, fecha_egreso='$egreso' where matricula='$matricula'";
				$resultado=mysqli_query($conexion,$actualiza);
				if($resultado){
				
					echo'<script> alert("El Alumno  se ha Actualizado Correctamente "); </script>';
					
				}
				
				} else 
						echo'<script> alert("NO-ENCONTRADO: Verifica la Matricula Ingresada"); </script>';
		
		
		}

	//--------------------------------------------------------------------CONSULTA ESTAUS DE ALUMNOS
	
	
	if(isset($_POST['consulta_estado'])){
		
		$matricula=$_POST['matricula'];
		//$situacion=$_POST['situacion'];
		//$egreso=$_POST['anual_egreso'];
		
		$consulta_estado="select matricula,nombre_alumno, apellido_m, apellido_p,descripcion_situacion, fecha_egreso from alumnos
inner join situacion_alumno on situacion_alumno.id_situacion=alumnos.id_situacion where matricula='$matricula'";
		$rsconsulta=mysqli_query($conexion,$consulta_estado);
		$rs=mysqli_fetch_assoc($rsconsulta);
		$nom=$rs['nombre_alumno'];
		$apmat=$rs['apellido_m'];
		$appat=$rs['apellido_p'];
		$sit=$rs['descripcion_situacion'];
		
			if($rs){
					echo'<script> alert("El Alumno  '.$nom." ".$appat." ".$apmat.'  Tiene el ESTATUS de: '.$sit.'"); </script>';
				
				}
				
				 else {
						echo'<script> alert("NO-ENCONTRADO: Verifica la Matricula Ingresada"); </script>';
						}
		}


	?>






<?php 

} else{
		echo'No tienes el Nivel para esta seccion';
	
}
 echo'<center><strong><a href="admin.php">Regresar</a></strong></center>';
?>

</body>