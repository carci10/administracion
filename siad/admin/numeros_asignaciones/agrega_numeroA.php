<?php
    //funcion propia Cisneros que devuelve una cadena con la primera letra en mayusculas con sus excepciones
    function mi_cadena($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("de", "y", "e", "las", "en","a","la","I", "II", "III", "IV", "V", "VI"))
    {
        /*
         * Exceptions in lower case are words you don't want converted
         * Exceptions all in upper case are any words you don't want converted to title case
         *   but should be converted to upper case, e.g.:
         *   king henry viii or king henry Viii should be King Henry VIII
         */
        $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
        foreach ($delimiters as $dlnr => $delimiter) {
            $words = explode($delimiter, $string);
            $newwords = array();
            foreach ($words as $wordnr => $word) {
                if (in_array(mb_strtoupper($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtoupper($word, "UTF-8");
                } elseif (in_array(mb_strtolower($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtolower($word, "UTF-8");
                } elseif (!in_array($word, $exceptions)) {
                    // convert to uppercase (non-utf8 only)
                    $word = ucfirst($word);
                }
                array_push($newwords, $word);
            }
            $string = join($delimiter, $newwords);
       }//foreach
       return $string;
    }

?>



<?php
include('../conexion.php');

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];

$evaluacion_o = $_POST['evaluacion'];
$evaluacion =mi_cadena($evaluacion_o);

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO tipos_evaluaciones (descripcion_evaluacion) VALUES('$evaluacion')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE tipos_evaluaciones SET descripcion_evaluacion = '$evaluacion' where id_tipoe = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT id_tipoe as id,descripcion_evaluacion
FROM tipos_evaluaciones  ORDER BY id_tipoe ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	          <tr>
                        <th width="40%">Numero de Asignacion</th>  
                        <th width="40%">Descripcion de Evaluacion</th>        
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                         <td>'.$registro2['id'].'</td>
                          <td>'.$registro2['descripcion_evaluacion'].'</td>
                          <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                         </td>
                </tr>';
  }
	
   echo '</table>';
?>