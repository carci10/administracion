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
<title>Asignaturas</title>

</head>

<body>
	<center> 
	  <img src="imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
	</center>
   <center>
  <form id="form1" name="form1" method="post" action="guardarcurso.php">  
  <strong>
  <h3>REGISTRAR ASIGNATURAS</h3></strong>
  <table width="68%" border="0" align="center" class="down1">
  
  <tbody>
  
  
  <tr>
  <td align="right">Clave Asignatura:</td>
  <td><span id="sprytextfield2">
  <input name="clave_a" class="caja" type="float" id="clave_a" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
	  
	<tr>
  <td align="right">Plan de Estudio:</td>
  <td>
  <select name="plan" id="plan" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	include('conexion.php');
	$plan	= "SELECT * FROM plan_estudio";
	$rsplan	= mysql_query($plan,$conexion);
	if(mysql_num_rows($rsplan) != 0){
		while($rowx	= mysql_fetch_assoc($rsplan)){
		echo '<option value="'.$rowx['clave_plan'].'">'.$rowx['descripcion_plan'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
    
	
	  
  
  <tr>
  <td align="right">Clave Materia en Reticula:</td>
  <td><span id="sprytextfield2">
  <input name="clave_mat_ret" class="caja" type="float" id="clave_mat_ret" size="28" autocomplete="off">
  </td>
  </tr>
  
  <tr>
  <td align="right">Nombre:</td>
  <td><span id="sprytextfield2">
  <input name="nombre" class="caja" type="text" id="nombre" size="28" autocomplete="off">
  <span class="textfieldRequiredMsg"><img src="imagenes/error.gif" title="CAMPO VACIO"></span></span></td>
  </tr>
  
	  
	<tr>
  <td align="right">Carrera:</td>
  <td>
  <select name="carrera" id="carrera" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('conexion.php');
	$carrera	= "SELECT * FROM carrera";
	$rscarrera	= mysql_query($carrera,$conexion);
	if(mysql_num_rows($rscarrera) != 0){
		while($rowx	= mysql_fetch_assoc($rscarrera)){
		echo '<option value="'.$rowx['clave_carrera'].'">'.$rowx['nombre_carrera'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
      
	  
	  
  <tr>
  <td align="right">Semestre:</td>
  <td><span id="sprytextfield2">
  <input name="semestre" class="caja" onKeyPress="return soloLetras(event)" type="int" id="semestre" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>

<tr>
  <td align="right">Creditos Teorico:</td>
  <td><span id="sprytextfield2">
  <input name="ct" class="caja" onKeyPress="return soloLetras(event)" type="int" id="ct" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>
  
	  <tr>
  <td align="right">Creditos Practicos:</td>
  <td><span id="sprytextfield2">
  <input name="cp" class="caja" onKeyPress="return soloLetras(event)" type="int" id="cp" size="28" autocomplete="off" onKeyUp="this.value=this.value.toUpperCase()";>
 </td>
  </tr>

	  
	  <tr>
  <td align="right">Tipo:</td>
  <td>
  <select name="tipo" id="tipo" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('conexion.php');
	$tipo	= "SELECT * FROM tipo_materia";
	$rstipo	= mysql_query($tipo,$conexion);
	if(mysql_num_rows($rstipo) != 0){
		while($rowx	= mysql_fetch_assoc($rstipo)){
		echo '<option value="'.$rowx['clave_tipo_materia'].'">'.$rowx['nombre_tipo_materia'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
  </select>
  </td>
  </tr>
    
  
  
  <tr><td colspan="2">
  <input type="submit" class="boot" name="guarda" value="GUARDAR">
  <input type="reset" class="boot" name="guarda" value="NUEVO"></td></tr>
  </tbody></table>
  
 
  </form></center>
  
  <script type="text/javascript">
	
	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	
	</script>


</body></html>