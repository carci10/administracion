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
 <center><strong>MENU PARA INGRESAR LA BASE DE ALUMNOS DE NUEVO INGRESO</strong></center> 
</p>

<form name="nuevo_ingreso" method="post" action="guarda_nvo_ingreso.php">
 <table border=1 width="34%" bordercolor=#669900>
    
    
    <tr>
    <td width="56%" style="width: 30%" scope="row"><p><strong> FOLIO: </strong></p></td>
    <td width="44%"> <input type="int" name="folio" id="folio" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
    
    <tr>
    <td scope="row" style="width: 30%"><p><strong> NOMBRE: </strong></p></td>
    <td> <input type="text" name="nombre" id="nombre" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
    
    
    <tr>
    <td scope="row" style="width: 30%"><p><strong> APELLIDO PATERNO: </strong></p></td>
    <td> <input type="text" name="apellido_p" id="apellido_p" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>

    <tr>
    <td scope="row" style="width: 30%"><p><strong> APELLIDO MATERNO: </strong></p></td>
    <td> <input type="text" name="apellido_m" id="apellido_m" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
     
    
    <tr>
    <td><font face="Arial"><strong>Turno</strong></td><td>
<select name="turno" id="turno" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$turno	= "SELECT * FROM turnos";
	$rsturno	= mysqli_query($conexion,$turno);
	if(mysqli_num_rows($rsturno) != 0){
		while($rowx	= mysqli_fetch_assoc($rsturno)){
		echo '<option value="'.$rowx['id_turno'].'">'.$rowx['nombre_turno'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>

    </tr>
    
    
     <tr>
    <td><font face="Arial"><strong>Carrera</strong></td><td>
<select name="carrera" id="carrera" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$carrera	= "SELECT * FROM carreras";
	$rscarrera	= mysqli_query($conexion,$carrera);
	if(mysqli_num_rows($rscarrera) != 0){
		while($rowx	= mysqli_fetch_assoc($rscarrera)){
		echo '<option value="'.$rowx['id_carrera'].'">'.$rowx['nombre_carrera'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>
</tr>
    
    
     <tr>
    <td><font face="Arial"><strong>Plan de Estudios</strong></td><td>
<select name="plan" id="plan" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$plan	= "SELECT * FROM planes";
	$rsplan	= mysqli_query($conexion,$plan);
	if(mysqli_num_rows($rsplan) != 0){
		while($rowx	= mysqli_fetch_assoc($rsplan)){
		echo '<option value="'.$rowx['id_plan'].'">'.$rowx['descripcion_plan'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td>

    </tr>
    
    <tr>
    
		<td><font face="Arial"><strong>Año de Inicio</strong></td><td>
<select name="anual" id="anual" >
  <option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
  </select></td></tr>

		
	 </td>
    </tr>
    
  
    <td scope="row" style="width:60%">
    <input type="submit" name="gen_matricula" value="GUARDAR">
 	</td> 
    <td scope="row" style="width:60%">&nbsp;</td></tr> 

</table>

</form>

	<center><strong><a href="admin.php">Regresar</a></strong></center>
<?php 

} else{
		echo'No tienes el Nivel para esta seccion';
	
}
?>

</body>