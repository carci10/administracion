	<?php
session_start();
include('conexion.php');
error_reporting(0);
if($_SESSION['ingresado'])
	
{
	$correo_usuario=$_SESSION['correo'];
?>  

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Aspirantes</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
   
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start-->
                            <div class="classynav">
                                <ul>
								  <li><a href="logout.php"><big>--&gt;SALIR</big></a></li>
                                    
								<!--
                                  <li><a href="about-us.html">Alumnos</a></li>
                                    <li><a href="course.html">Profesores</a></li>
                                    <li><a href="contact.html">Carreras</a></li>
                                 -->
                                </ul>
                            </div>
 											
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:55 59-88-05-16 "><i class="icon-telephone-2"></i> <span>55 59-88-05-16 </span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2> <?php echo "".$_SESSION['nombre']."";?>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ###############################################333############# --><!-- ##### Blog Area End ##################################################################333333333333# -->
	
	

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
      <div class="bottom-footer-area">
          <div class="container">
                <div class="row"></div>
        </div>
      </div>
</footer>
    
	<!-- ##### Footer Area Start #####################################################3######## -->

	
	
	


<head>
<title>Registro Aspirantes Maestria</title>
</head>


<center>
  <form  name="registro" method="post" action="prereg3.php">
	  <br>
<fieldset style="width:inherit"><legend align="center">-_-_-_-_-_-_-_-_-_-_PRE-REGISTRO DE ASPIRANTES A POSGRADO EN EL TES IXTAPALUCA-_-_-_-_-_-_-_-_-_-_-_-_</legend>
<center>
<table>
<tr><td></td><td><font face="Arial"><strong>Datos Generales</strong></td><td></td><td></td></tr>
<tr>
<td><font face="Arial"><strong>Nombre(s) </strong></td>
<td><input type="text" size ="37" name ="nombres" id="nombres" value="" onKeyUp="this.value=this.value.toUpperCase();" maxlength="30" required/></td>

<td><font face="Arial"><strong>Apellido Paterno </strong></td>
<td><input type="text" size ="37" name ="apePaterno" id="apePaterno" value="" onKeyUp="this.value=this.value.toUpperCase();" maxlength="20" required></td></tr>

<tr><td><font face="Arial"><strong>Apellido Materno </strong></td>
<td><input type="text" size ="37" name ="apeMaterno" id="apeMaterno" value="" onKeyUp="this.value=this.value.toUpperCase();" maxlength="20" required /></td>

<td><font face="Arial"><strong>Télefono Celular</strong></td><td><input type="text" size ="37" name ="telCelular" id="telCelular" onKeyUp="telCelular.value=telCelular.value.toUpperCase();" placeholder="10 digitos" maxlength="10"  pattern="[0-9]{10}" required/></td>
</tr>
<td><font face="Arial"><strong>Teléfono Particular </strong></td>
<td><input type="text" size ="37" name ="telEmergencia" id="telEmergencia" onKeyUp="telEmergencia.value=telEmergencia.value.toUpperCase();" placeholder="10 digitos" maxlength="10"  pattern="[0-9]{10}" required/></td>

<td><font face="Arial"><strong>Correo electrónico </strong></td>
  <td><input type="email" size ="37" name ="correo" id="correo"  value="<?php echo $correo_usuario;?>" required/ disabled></td>
</tr>

<tr><td><font face="Arial"><strong>Fecha de nacimiento </strong></td><td><input type="date" size ="37" name="fechaNacimiento" id="fechaNacimiento" onClick="popUpCalendar(this, fechaNacimiento, 'dd/mm/yyyy');" placeholder="Da clic sobre la caja para ve el calendario" required></td>

<td><font face="Arial"><strong>Curp </strong></td><td><input name ="curp" type="text" required id="curp" placeholder="Ingresa tu CURP" onKeyUp="curp.value=curp.value.toUpperCase();" size ="37" maxlength="18" pattern=".{18,}"  /></td>
</tr>

<tr><td><font face="Arial"><strong>Sexo </strong></td><td><select name="sexo" id="sexo" required>
<option value="0">--SELECCIONE--</option>
<option value="F">FEMENINO</option>
<option value="M">MASCULINO</option>
</select></td>


<td><font face="Arial"><strong>Maestria de Interes</strong></td>
<td><select name="carrera" id="carrera" >
  <?php
  	//include('clases/conexion.php');
	
	$carrera	= 'SELECT * FROM carreras';
	$rscarrera	= mysqli_query($conexion,$carrera);
	if(mysqli_num_rows($rscarrera) != 0){
		while($rowx	= mysqli_fetch_assoc($rscarrera)){
		echo '<option value="'.$rowx['id_carrera'].'">'.$rowx['nombre_carrera'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
 </select></tr></td>
 
 <td><font face="Arial"><strong>Area de Gen. del Conocimiento</strong></td>
<td><select name="especialidad" id="espacialidad" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('clases/conexion.php');
	$especialidad	= 'SELECT * FROM especialidad';
	$rsespecialidad	= mysqli_query($conexion,$especialidad);
	if(mysqli_num_rows($rsespecialidad) != 0){
		while($rowx	= mysqli_fetch_assoc($rsespecialidad)){
		echo '<option value="'.$rowx['id_especialidad'].'">'.$rowx['nombre_especialidad'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
 </select></tr></td>

 
 
<br />
<tr><td></td><td><font face="Arial"><strong>Direccion Aspirante</strong></td><td></td><td></td></tr>

<tr><td><font face="Arial"><strong>Calle </strong></td><td><input type="text" size ="37" name ="calle" id="calle" onKeyUp="calle.value=calle.value.toUpperCase();" placeholder="Ingresa tu calle" maxlength="30" required /></td>

<td><font face="Arial"><strong>Número Exterior </strong></td><td><input type="number" size ="37" name ="numero" id="numero" placeholder="Ejemplo: 605"   pattern="[0-9]" min="0" required/></td></tr>

  <td><font face="Arial"><strong>Colonia </strong></td><td>
  <input type="text" size ="37" name ="colonia" id="colonia" onKeyUp="colonia.value=colonia.value.toUpperCase();" placeholder="Colonia"  maxlength="40" required/></td>



<td><font face="Arial"><strong>Municipio </strong></td>
<td>
<select name="municipio" id="municipio" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('calses/conexion.php');
	$municipio	= 'SELECT * FROM municipio where id_entidad=11 or id_entidad=9';
	$rsmunicipio	= mysqli_query($conexion,$municipio);
	if(mysqli_num_rows($rsmunicipio) != 0){
		while($rowx	= mysqli_fetch_assoc($rsmunicipio)){
		echo '<option value="'.$rowx['id_municipio'].'">'.$rowx['nombre_municipio'].'</option>';
		}
	}else{
		echo '<option value="0">--- NO DISPONIBLE ---</option>';
	}
  ?>
</select>
</td>




<tr>

<td><font face="Arial"><strong>Estado </strong></td>
<td>
<select name="estado" id="estado" >
  <option value="0">--- SELECCIONE ---</option>
  <?php
  	//include('calses/conexion.php');
	$entidad	= 'SELECT * FROM entidad';
	$rsentidad	= mysqli_query($conexion,$entidad);
	if(mysqli_num_rows($rsentidad) != 0){
		while($rowx	= mysqli_fetch_assoc($rsentidad)){
		echo '<option value="'.$rowx['id_entidad'].'">'.$rowx['nombre_entidad'].'</option>';
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
        <option value="UAEMex"> UAEM</option>
        <option value="UMB"> UMB</option>
        <option value="IPN">IPN</option>
        <option value="UAM"> UAM</option>
        <option value="TESI"> TESI</option>
        <option value="TESCHI"> TESCHI</option>
        <option value="TESCHA"> TESCHA</option>
        <option value="TESOEM"> TESOEM</option>
		<option value="TESOEM"> UNADM</option>
        <option value="OTRO_TNM"> OTRO(TNM)</option>
        <option value="UNID"> UNID</option>
        <option value="AZTECA"> AZTECA</option>
        <option value="UPEM"> UPEM</option>
        <option value="UNIVER"> UNIVER</option>
        <option value="UNITEC"> UNITEC</option>
        <option value="UVM"> UVM</option>
        <option value="OTRO_PARTICULAR"> OTRO(PARTICULAR)</option>
        <option value="OTRO">OTRO</option>
    </select></td></tr>
    
    <td><font face="Arial"><strong>Carrera cursada</strong></td>
    <td><input type="text" size ="37" name ="carrera_aspirante" id="carrera_aspirante" onKeyUp="promBachillerato.value=promBachillerato.value.toUpperCase();" maxlength="50" required /></td></tr>
    
    
<br />   
	
<tr><td></td><td><font face="Arial"><strong>Datos Laborales</strong></td><td></td><td></td></tr>

 <tr><td><font face="Arial"><strong>Actualmente trabaja </strong></td><td><select name="trabaja" id="trabaja" required>
<option value=""></option>
<option value="Si">SI</option>
<option value="No">NO</option>
</select></td>

<td><font face="Arial"><strong>Lugar de trabajo</strong></td><td><input type="text" size ="37" name ="trabajo_actual" id="trabajo_actual" onKeyUp="trabajo_actual.value=trabajo_actual.value.toUpperCase();" value="N/A" placeholder="Nombre de la empresa" maxlength="50" required/></td>
</tr>
  <td><font face="Arial"><strong>Puesto Laboral</strong></td>
  <td><input type="text" size ="37" name ="puesto" id="puesto" onKeyUp="puesto.value=puesto.value.toUpperCase();"   value="N/A" placeholder="Nombre del puesto" maxlength="50" required/></td>
</tr>
<tr>
  <td><font face="Arial"></td>
  <td>&nbsp;</td>
  <td><font face="Arial"></td><td>&nbsp;</td>
</tr>

</table>
<input type="submit" value=" R E G I S T R A R ">
</fieldset>
</form>
</center>

<?php
}
else
echo'<center>Algo ha salido mal en la seccion de registro de aspirantes!!  Incia Sesion : <a href="login.html"> AQUI <a>'; 

?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>