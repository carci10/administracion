<?php 
session_start();
include('clases/conexion.php');
$folio_actual=$_SESSION['folio'];


$consulta="select * from aspirante where id_aspirante=$folio_actual";
$rsconsulta=mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($rsconsulta)){

	$id_aspirante=$row['id_aspirante'];
	$nombre=$row['nombre'];
	$apellido_p=$row['apellido_p'];
	$apellido_m=$row['apellido_m'];
	$celular=$row['celular'];
	$telefono_casa=$row['telefono_casa'];
	$correo=$row['correo'];
	$fecha_nac=$row['fecha_nac'];
	$curp=$row['curp'];
	$sexo=$row['sexo'];
	$carrera=$row['carrera'];
	$especialidad=$row['especialidad'];
	$calle=$row['calle'];
	$numero=$row['numero'];
	$colonia=$row['colonia'];
	$escuela_proc=$row['escuela_proc'];
	//$apellido_p=$row['apellido_p'];
	$carrera_cursada=$row['carrera_cursada'];
	//$estatus=$row['estado'];	
	
}

//-------------------------------------------------------------Consulta Folios
$consulta2="select * from folios where folio_aspirante=$folio_actual";
$rsconsulta2=mysqli_query($conexion,$consulta2);
 while($row=mysqli_fetch_assoc($rsconsulta2)){
	$folio_aspirante=$row['folio_aspirante'];
	$matricula=$row['matricula'];
	 $turno=$row['id_turno'];
	 	 $plan=$row['id_plan'];
	
}



?>
<style>
form#registro {
margin:auto;
background: SteelBlue;
color: white;
font-size: 12px;
padding: 30px;
width: 350px;
border:solid 10px LightSteelBlue;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
}
</style>

<script type="text/javascript" src="js/municipios.js"></script>
<script type="text/javascript" src="js/prototype.js"></script>
<script language='javascript' src="js/popcalendar.js"></script> 
<p align="center">
<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="220">
      <param name="movie" value="flash/encaalumno2.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <img src="images/Logophp.jpg"><br><br>
      <!--<![endif]-->
    

<fieldset style="border-style: solid"> <legend align="left">Menu Alumnos Posgrado</legend>
<form  name="registro" method="post" action="prereg3.php">
<center>
<table>
	
<tr><td><font face="Arial"><strong>Matricula </strong></td><td><input type="text" size ="37" name ="matricula" id="matricula" value="<?php echo $matricula;?>" readonly /></td>	

<tr><td><font face="Arial"><strong>Nombre(s) </strong></td><td><input type="text" size ="37" name ="nombres" id="nombres" value="<?php echo $nombre;?>" /></td>
	
<td><font face="Arial"><strong>Apellido Paterno </strong></td><td><input type="text" size ="37" name ="apePaterno" id="apePaterno" value="<?php echo $apellido_p;?>"></td></tr>


<tr><td><font face="Arial"><strong>Apellido Materno </strong></td><td><input type="text" size ="37" name ="apeMaterno" id="apeMaterno" value="<?php echo $apellido_m;?>"  /></td>
	</td>	
<tr><td><font face="Arial"><strong>Nacionalidad </strong></td><td><input type="text" size ="37" name ="nacionalidad" id="nacionalidad"  required /></td>	

	
<td><font face="Arial"><strong>Estado </strong></td><td>
<select name="estado" id="estado" onChange="municipio();" required>
      <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('clases/conexion.php');
	$estado	= "SELECT * FROM entidad";
	$rsestado	= mysqli_query($conexion,$estado);
	if(mysqli_num_rows($rsestado) != 0){
		while($rowx	= mysqli_fetch_assoc($rsestado)){
		echo '<option value="'.$rowx['id_entidad'].'">'.$rowx['nombre_entidad'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>
	
	
	
<tr><td><font face="Arial"><strong>Municipio o delegación </strong></td>
<td><select name="municipio" id="municipio" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$municipio	= "select * from municipio where id_entidad=11 or id_entidad=9";
	$rsmunicipio	= mysqli_query($conexion,$municipio);
	if(mysqli_num_rows($rsmunicipio) != 0){
		while($rowx	= mysqli_fetch_assoc($rsmunicipio)){
		echo '<option value="'.$rowx['id_municipio'].'">'.$rowx['nombre_municipio'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td>


	<td><font face="Arial"><strong>Colonia</strong></td><td>
<select name="colonia" id="colonia" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('config.php');
	$colonia	= "select * from colonia where id_municipio= 11122 or id_municipio=11039";
	$rscolonia	= mysqli_query($conexion,$colonia);
	if(mysqli_num_rows($rscolonia) != 0){
		while($rowx	= mysqli_fetch_assoc($rscolonia)){
		echo '<option value="'.$rowx['id_colonia'].'">'.$rowx['nombre_colonia'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>

	
<tr><td><font face="Arial"><strong>Calle </strong></td>
<td><input type="text" size ="37" name ="calle" id="calle" onKeyUp="calle.value=calle.value.toUpperCase();" placeholder="Ingresa tu calle" required  value="<?php echo $calle;?>"/></td>

<td><font face="Arial"><strong>Número Exterior </strong></td><td><input type="int" size ="37" name ="numero" id="numero" onKeyUp="numero.value=numero.value.toUpperCase();" placeholder="Número exterior" required  value="<?php echo $numero;?>"  /></td></tr></td

	
><td><font face="Arial"><strong>Número Interior </strong></td><td><input type="text" size ="37" name ="numero_int" id="numero_int" onKeyUp="numero.value=numero.value.toUpperCase();" placeholder="Número exterior" required  value="<?php echo $numero;?>"  /></td></tr>


	<tr><td><font face="Arial"><strong>Télefono Celular</strong></td><td><input type="text" size ="37" name ="telCelular" id="telCelular" onKeyUp="telCelular.value=telCelular.value.toUpperCase();" placeholder="Ejemplo: 5559286514" maxlength="10"  pattern="[0-9]{10}" required value="<?php echo $celular;?>"/></td>


<td><font face="Arial"><strong>Teléfono Casa </strong></td>
<td><input type="text" size ="37" name ="telEmergencia" id="telEmergencia" onKeyUp="telEmergencia.value=telEmergencia.value.toUpperCase();" placeholder="Ejemplo: 59786514 de casa" maxlength="8"  pattern="[0-9]{8}" required  value="<?php echo $telefono_casa;?>"/></td></tr>

	
<tr><td><font face="Arial"><strong>CURP </strong></td><td><input name ="curp" type="text" required id="curp" placeholder="Ingresa tu CURP" onKeyUp="curp.value=curp.value.toUpperCase();" size ="37" maxlength="18" pattern=".{18,}" value="<?php echo $curp;?>" readonly/>

<tr><td><font face="Arial"><strong>SEXO </strong></td><td><input name ="sexo" type="text" required id="sexo" size ="37"  value="<?php echo $sexo;?>"  />
	
<tr><td><font face="Arial"><strong>Fecha de nacimiento </strong></td><td><input type="date" size ="37" name="fechaNacimiento" id="fechaNacimiento" onClick="popUpCalendar(this, fechaNacimiento, 'dd/mm/yyyy');" placeholder="" required value="<?php echo $fecha_nac;?>">

<tr><td><font face="Arial"><strong>Promedio anterior</strong></td><td><input name ="promedio_anterior" type="int" required id="promedio_anterior" placeholder="83" size ="37"/>

<tr><td><font face="Arial"><strong>Carrera </strong></td><td><input type="number" size ="37" name="carrera" id="carrera" onClick="popUpCalendar(this, fechaNacimiento, 'dd/mm/yyyy');" placeholder="" required value="<?php echo $carrera;?>" readonly>
	
	
</td><td><font face="Arial"><strong>Fecha de ingreso</strong></td><td><input type="date" size ="37" name ="fechaIngreso" id="fechaIngreso" onKeyUp="fechaIngreso.value=fechaIngreso.value.toUpperCase();" required /></td></tr>


<td><font face="Arial"><strong>Periodo Inicial</strong></td><td>
<select name="periodo" id="periodo"  required>
  <?php
  	//include('config.php');
	$periodo	= "SELECT * FROM periodos";
	$rsperiodo	= mysqli_query($conexion,$periodo);
	if(mysqli_num_rows($rsperiodo) != 0){
		while($rowx	= mysqli_fetch_assoc($rsperiodo)){
		echo '<option value="'.$rowx['id_periodo'].'">'.$rowx['descripcion_periodo'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>

<tr><td><font face="Arial"><strong>Turno </strong></td><td><input type="text" size="37" readonly name="turno" id="turno" required  value="<?php echo $turno;?>"></td>
	
<td><font face="Arial"><strong>Plan de Estudios</strong></td><td><input type="text" size ="37" name ="plan" id="plan" onKeyUp="" placeholder="" readonly value="<?php echo $plan;?>"/></td></tr>

	
<td><font face="Arial"><strong>Area de Generacion del Con.</strong></td><td>
<select name="especialidad" id="especialidad" >
 
  <?php
  	//include('config.php');
	$especialidades	= "SELECT * FROM especialidad where id_carrera=$carrera and id_plan=$plan";
	$rsespecialidades= mysqli_query($conexion,$especialidades);
	if(mysqli_num_rows($rsperiodo) != 0){
		while($rowx	= mysqli_fetch_assoc($rsespecialidades)){
		echo '<option value="'.$rowx['id_especialidad'].'">'.$rowx['nombre_especialidad'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select></td></tr>
	
		
<tr><td><font face="Arial"><strong>Correo electrónico </strong></td>
  <td><input type="email" size ="37" name ="correo" id="correo"   value="<?php echo $correo;?>" required readonly/></td>	


<tr>
  <td><font face="Arial"></td>
  <td>&nbsp;</td>
  <td><font face="Arial"></td><td>&nbsp;</td>
</tr>

</table>
<input type="submit" value="Registrar">
</form>
  </fieldset>
<center>
