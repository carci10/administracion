<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lee Matricula</title>
</head>
<body>
	
<fieldset style="border: double" >
  <legend> Ingresa Matricula para imprimir Certificado Total </legend>
	<center><img src="../imagenes/baner0.png" width="1000" height="250" alt=""/></center>
	<center><p>Atencion para generar el CERTIFICADO TOTAL del alumno requieres:<li>Matricula del alumno</li><li><b>Datos de registro en control escolar</b> </li><li>Que ya se haya dado el estatus de egresado por el administrador</li> </p>
	<p>Despues de gerar su certificado esos datos por seguridad no pueden ser modificados si no los conoces o no esta seguro, No generes su certificado</p>
	</center>
	
	<form name=lee_mat method="post" action="Certificado_Total.php">
		
		<center>
		<div>
		<laber>Ingresa Matricula:  </laber>
			<input type="text" name="matricula" onKeyUp="this.value=this.value.toUpperCase()"; required >
			
		<laber>Numero de Registro:  </laber>
			<input type="int" name="registro" required >	
			

		<laber>En el libro:  </laber>
			<input type="int" name="libro" required >
			
		<laber>A fojas:  </laber>
			<input type="int" name="fojas" required >
		</div>	
			<br>
			<input type="submit" name="ver" value="GENERAR CERTIFICADO TOTAL">
			</center>	
	
	</form>
		
		</fieldset>
</body>
</html>