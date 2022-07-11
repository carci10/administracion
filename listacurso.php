<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editarcurso.php?Id="+id;
}
function eliminar(id){
         var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminarcurso.php?Id="+id;
	}else{
	
	}
	
}
</script>
<center> 
  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<small><font color="red">* Al eliminar una asignatura, primero debe eliminar sus registros de alumnos-materias inscritas.</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> ASIGNATURAS REGISTRADAS </center></strong>
		</td>
		</tr>
		</table>
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
  <th></th>
   <th>CLAVE MATERIA</th>
   <th>PLAN ESTUDIOS</th>
   <th>CLAVE MAT. RET</th>
   <th>NOMBRE MAT.</th>
   <th>CARRERA MAT.</th>
	  <th>SEMESTRE.</th>
	  <th>CREDITOS T.</th>
	  <th>CREDITOS P.</th>
	  <th>TOTAL CRED.</th>
	  <th>TIPO MAT.</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('conexion.php');
 $contador = 0;
 $sql = "SELECT * from materia";
 $rs  = mysql_query($sql,$conexion);
 if(mysql_num_rows($rs) !=0 ){
	while($row=mysql_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['id_venta'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['id_venta'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['clave_materia'].'</td>';
		echo '<td>'.$row['pertenece_plan_estudios'].'</td>';
		echo '<td>'.$row['clave_materia_reticula'].'</td>';
		echo '<td>'.$row['nombre_materia'].'</td>';
		echo '<td>'.$row['carrera_m'].'</td>';
		echo '<td>'.$row['semestre_m'].'</td>';
		echo '<td>'.$row['creditos_teoricos'].'</td>';
		echo '<td>'.$row['creditos_practicos'].'</td>';
		echo '<td>'.$row['tipo_m'].'</td>';
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>