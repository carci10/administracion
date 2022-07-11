<?php
session_start();
error_reporting(0);
include('conexion.php');
echo "".$_SESSION['nombre']."";
 if (isset($_SESSION['ingresado'])) 
   {
	   
	   // Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
	   
	               include('conexion.php'); 
	   
	   
	
?>

<html xmlns="http://www.w3.org/1999/xhtml"><head><link href="css/main.css" rel="stylesheet" type="text/css">
<script src="js/validacion_campo_vacio.js" type="text/javascript"></script>
<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">
<link href="css/tablas.css" rel="stylesheet" type="text/css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/ValidacionesEspeciales.js" type="text/javascript"></script>

<link href="css/Estilo_Error.css" rel="stylesheet" type="text/css">



<style>
.caja{
	display: inline-block;
	margin: 5px;
	border: 1px solid #dadada;
	background-color: #eaeaea;
	padding: 3px;
	color: #404040;
	width: 250px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>PRE-REGISTRO DE ASPIRANTES</title>

</head>

<body>
<center>

<form  name="registro" method="post" action="prereg3.php">
<fieldset style="border:solid"><legend><em><center>PRE-REGISTRO DE ASPIRANTES TES. IXTAPALUCA</center></em></legend>
<center>
<table>
<tr><td></td><td><font face="Arial"><strong>Datos Generales</strong></td><td></td><td></td></tr>
<tr>
<td><font face="Arial"><strong>Nombre(s) </strong></td>
<td><input type="text" size ="37" name ="nombres" id="nombres" value="" /></td>

<td><font face="Arial"><strong>Apellido Paterno </strong></td>
<td><input type="text" size ="37" name ="apePaterno" id="apePaterno" value=""></td></tr>

<tr><td><font face="Arial"><strong>Apellido Materno </strong></td>
<td><input type="text" size ="37" name ="apeMaterno" id="apeMaterno" value=""  /></td>

<td><font face="Arial"><strong>Télefono Celular</strong></td><td><input type="text" size ="37" name ="telCelular" id="telCelular" onKeyUp="telCelular.value=telCelular.value.toUpperCase();" placeholder="Ejemplo: 5559286514" maxlength="10"  pattern="[0-9]{10}" required/></td>
</tr>
<td><font face="Arial"><strong>Teléfono Particular </strong></td>
<td><input type="text" size ="37" name ="telEmergencia" id="telEmergencia" onKeyUp="telEmergencia.value=telEmergencia.value.toUpperCase();" placeholder="Ejemplo: 59786514 de casa" maxlength="8"  pattern="[0-9]{8}" required/></td>

<td><font face="Arial"><strong>Correo electrónico </strong></td>
  <td><input type="email" size ="37" name ="correo" id="correo"  placeholder="Ingresa tu email" required/></td>
</tr>

<tr><td><font face="Arial"><strong>Fecha de nacimiento </strong></td><td><input type="date" size ="37" name="fechaNacimiento" id="fechaNacimiento" onClick="popUpCalendar(this, fechaNacimiento, 'dd/mm/yyyy');" placeholder="Da clic sobre la caja para ve el calendario" required></td>

<td><font face="Arial"><strong>Curp </strong></td><td><input name ="curp" type="text" required id="curp" placeholder="Ingresa tu CURP" onKeyUp="curp.value=curp.value.toUpperCase();" size ="37" maxlength="18" pattern=".{18,}"  /></td>
</tr>

<tr><td><font face="Arial"><strong>Sexo </strong></td><td><select name="sexo" id="sexo" required>
<option value="0">--SELECCIONE--</option>
<option value="F">Femenino</option>
<option value="M">Masculino</option>
</select></td>


<td><font face="Arial"><strong>Carrera de Interes</strong></td>
<td><select name="carrera" id="carrera" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('clases/conexion.php');
	
	$carrera	= "SELECT * FROM carrera";
	$rscarrera	= mysqli_query($carrera,$conn);
	if(mysql_num_rows($rscarrera) != 0){
		while($rowx	= mysql_fetch_assoc($rscarrera)){
		echo '<option value="'.$rowx['clave_carrera'].'">'.$rowx['nombre_carrera'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
 </select></tr></td>
 
 <td><font face="Arial"><strong>Especialidad</strong></td>
<td><select name="especialidad" id="espacialidad" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('clases/conexion.php');
	$especialidad	= "SELECT * FROM especialidad";
	$rsespecialidad	= mysqli_query($especialidad,$conn);
	if(mysql_num_rows($rsespecialidad) != 0){
		while($rowx	= mysql_fetch_assoc($rsespecialidad)){
		echo '<option value="'.$rowx['id_especialidad'].'">'.$rowx['nombre_especialidad'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
 </select></tr></td>

 
 
<br />
<tr><td></td><td><font face="Arial"><strong>Direccion Aspirante</strong></td><td></td><td></td></tr>

<tr><td><font face="Arial"><strong>Calle </strong></td><td><input type="text" size ="37" name ="calle" id="calle" onKeyUp="calle.value=calle.value.toUpperCase();" placeholder="Ingresa tu calle" required /></td>

<td><font face="Arial"><strong>Número Exterior </strong></td><td><input type="text" size ="37" name ="numero" id="numero" onKeyUp="numero.value=numero.value.toUpperCase();" placeholder="Número exterior" required/></td></tr>

  <td><font face="Arial"><strong>Colonia </strong></td>
<td>
<select name="colonia" id="colonia" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('calses/conexion.php');
	$colonia	= "SELECT * FROM colonia";
	$rscolonia	= mysqli_query($colonia,$conexion);
	if(mysql_num_rows($rscolonia) != 0){
		while($rowx	= mysql_fetch_assoc($rscolonia)){
		echo '<option value="'.$rowx['id_colonia'].'">'.$rowx['nombre_colonia'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
</select>
</td>


	<td><font face="Arial"><strong> Escuela de procedencia</strong></td>
    <td><select name="escProcedencia" id="escProcedencia" required>
       <option value="0">--- SELECCIONE ---</option>
        <option  values="UNAM">UNAM</option>
        <option value="UAEMex"> UAEMex</option>
        <option value="UAEM"> UAEM</option>
        <option value="IPN">IPN</option>
        <option value="UAM"> UAM</option>
        <option value="TESI"> TESI</option>
        <option value="TESCHI"> TESCHI</option>
        <option value="TESCHA"> TESCHA</option>
        <option value="TESOEM"> TESOEM</option>
        <option value="OTRO_TNM"> OTRO(TNM)</option>
        <option value="UNID"> UNID</option>
        <option value="AZTECA"> AZTECA</option>
        <option value="UPEM"> UPEM</option>
        <option value="UNIVER"> UNIVER</option>
        <option value="UNITEC"> UNITEC</option>
        <option value="UVM"> UVM</option>
        <option value="OTRO_PARTICULAR"> OTRO(PARTICULAR)</option>
        <option value="OTRO"> OTRO</option>
    </select></td></tr>
    
    <td><font face="Arial"><strong>Carrera cursada</strong></td>
    <td><input type="text" size ="37" name ="carrera_aspirante" id="carrera_aspirante" onKeyUp="promBachillerato.value=promBachillerato.value.toUpperCase();" required/></td></tr>
    
    
<br />   
	
<tr><td></td><td><font face="Arial"><strong>Datos Laborales</strong></td><td></td><td></td></tr>

 <tr><td><font face="Arial"><strong>Actualmente trabaja </strong></td><td><select name="trabaja" id="trabaja" required>
<option value=""></option>
<option value="Si">SI</option>
<option value="No">NO</option>
</select></td>

<td><font face="Arial"><strong>Lugar de trabajo</strong></td><td><input type="text" size ="37" name ="trabajo_actual" id="trabajo_actual" onKeyUp="madre.value=madre.value.toUpperCase();" placeholder="Nombre de la empresa" required/></td>
</tr>
  <td><font face="Arial"><strong>Puesto Laboral</strong></td>
  <td><input type="text" size ="37" name ="puesto" id="puesto" onKeyUp="padre.value=puesto.value.toUpperCase();" placeholder="Nombre del puesto" required/></td>
</tr>
<tr>
  <td><font face="Arial"></td>
  <td>&nbsp;</td>
  <td><font face="Arial"></td><td>&nbsp;</td>
</tr>

</table>
<input type="submit" value="Registrar">
</font>
</fieldset>
</form>
</center>
<?php  
		}
  else 
  header('location: login.html');
?>



 
 
<script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
	
	</script>



</body>
</html>