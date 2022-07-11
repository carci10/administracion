<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Obtener Folio</title>
</head>
<?php
$folio=$_SESSION['folio'];
?>
<body>
<?php
include('clases/conexion.php');
$consult=$sicoes->query("select * from sicoes.nvo_ingreso where FOLIO=$folio");
while ($row = $consult->fetch_array(MYSQLI_ASSOC)) //SE ACCESA AL DATO POR MEDIO DE LA REFERENCIA DE LA COLUMNA
       {
$matri=$row['matricula'];	
$turno=$row['turno'];
$plan=$row['plan_estudios'];
$año_inicio=$row['año_inicio'];
}

?>
</body>
</html>