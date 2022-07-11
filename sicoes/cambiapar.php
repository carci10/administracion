<?php
$valor=$_POST["val"];
$valor2=$_REQUEST["val2"];

require('clases/conexion.php');

//$sicoes->query("SET SQL_SAFE_UPDATES = 0");
$sicoes->query("UPDATE sicoes.parcial SET Nom_Parcial='$valor',Periodo='$valor2'");
//$sicoes->query("SET SQL_SAFE_UPDATES = 1");

$consulta=$sicoes->query("SELECT * FROM sicoes.parcial");

while($arreglo=$consulta->fetch_array(MYSQLI_ASSOC)){
	$dato=$arreglo['Nom_Parcial'];	
	$periodo=$arreglo['Periodo'];
}

echo "Parcial actual:".$dato."<br>Periodo actual:".$periodo;

?>