<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editaralumno.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminaralumno.php?Id="+id;
	}else{
	
	}
	
}
</script>
<center> 
  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<center>
<small><font color="red">* !!Cuidadado, presionar el boton "Terminar Seleccion" elimina los folios en la BD y los actualiza con el estatus actual de los aspirantes que se muestran en la ultima columna, primero asegurate que sean los estatus correctos.
</font></small>
</center>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center>
		 LISTA DE ASPIRANTES REGISTRADOS
		</center></strong>
		</td>
		</tr>
                
		</table>
   
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   
	  <th>FOLIO</th>
   <th>NOMBRE</th>
   <th>A.PATERNO</th>
   <th>A. MATERNO</th>
   <th>CELULAR</th>
	  <th>CORREO</th>
	  <th>F. NACIMIENTO</th>
	  <th>CURP</th>
	  <th>CARRERA</th>
	  <th>ESPECIALIDAD</th>
	  <th>ESCUAL DE PROC.</th>
  </tr>
 </thead>
	

 <tbody id="tbody">
	 
	 
 <?php 
 include('conexion.php');
 $contador = 999;
 $sql = "SELECT * FROM aspirante order by id_aspirante";
 $rs  = mysqli_query($conexion,$sql);
 if(mysqli_num_rows($rs) !=0 ){
	while($row=mysqli_fetch_assoc($rs)){
		
		
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
	
		echo '<tr class="'.$class.'">';
		echo '<td>';
	  
		/*echo'<form name="acepta_aspirantes" method="post" action="actualiza_aspirantes.php">';
        echo'<td><select name="acepta_aspirantes" id="acepta_aspirantes" >
        <option value="1">--- ACEPTADO ---</option>
		<option value="0">--- RECHAZADO ---</option>
		
		';*/
		//echo'<input type="submit" name="actualiza_aspirantes" value="Guardar">';
		echo '</td>';
		//echo"<td> <input  size='5' type='int' name='folio' value=\"".$contador."\" readonly > </td> ";
		echo'</form>';
		echo '<td>'.$row['id_aspirante'].'</td>';
		echo '<td>'.$row['nombre'].'</td>';
		echo '<td>'.$row['apellido_p'].'</td>';
		echo '<td>'.$row['apellido_m'].'</td>';
		echo '<td>'.$row['celular'].'</td>';
		echo '<td>'.$row['correo'].'</td>';
		echo '<td>'.$row['fecha_nac'].'</td>';
		echo '<td>'.$row['curp'].'</td>';
		echo '<td>'.$row['carrera'].'</td>';
		echo '<td>'.$row['especialidad'].'</td>';
		echo '<td>'.$row['escuela_proc'].'</td>';
		//echo '<td>'.$row['estatus'].'</td>';
		
		echo '</tr>';
	
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
	<form name=folios method="post" action="actualiza_aspirantes.php">
	 <center><input type="submit" name="actualiza_folios" value="Terminar Seleccion"></center>
	  <br>
	 </form>	 
	 
 </tbody>
</table>
	
