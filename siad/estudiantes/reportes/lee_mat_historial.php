<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lee Matricula</title>
</head>
<body>
	
	
	<fieldset style="border: double" >
		<legend> Ingresa Matricula para imprimir Historial Academico</legend>
	<center><img src="../imagenes/baner0.png" width="1000" height="250" alt=""/></center>
	<form name=lee_mat method="post" action="reporte_Historial.php">
		
		<center>
			
			<b>Ingresa la matricula del alumno para generar su Historial academico</b>
			<br><br>
			
		<div>
			
			
		<laber>Ingresar Matricula:  </laber>
			
			
			<input type="text" name="matricula" required onKeyUp="this.value=this.value.toUpperCase();"  >
			
			<input type="submit" name="ver" value="Generar">
		</div>	</center>	
	
	</form>
		
		</fieldset>
</body>
</html>