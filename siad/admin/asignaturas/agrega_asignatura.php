<?php
    //funcion propia Cisneros que devuelve una cadena con la primera letra en mayusculas con sus excepciones
    function mi_cadena($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("del","de", "y", "e", "las", "en","a","la","I", "II", "III", "IV", "V", "VI"))
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
$clave = $_POST['clave_materia'];
$plan = $_POST['plan'];
$clave_reticula = $_POST['clave_reticula'];
$nombre_o = $_POST['nombre'];
$nombre =mi_cadena($nombre_o);
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$ct = $_POST['ct'];
$cp = $_POST['cp'];
$tipo = $_POST['tipo_materia'];
$especialidad = $_POST['especialidad'];
//Algortimo que determina el numero o clave de la asignatura
if($especialidad==0)
$prueba_clave=$carrera.$semestre.'0'.$clave ;
if($especialidad!=0)
$prueba_clave=$carrera.$semestre.'0'.$clave.'-'.$especialidad;	

echo $prueba_clave;

switch($proceso){
	case 'Registro': mysqli_query($conexion,"INSERT INTO materias (clave_materia, id_plan, clave_materia_reticula, nombre_materia,id_carrera,semestre,creditos_teoricos,creditos_practicos,id_tipom,id_espacialidad) VALUES('$prueba_clave','$plan','$clave_reticula','$nombre','$carrera','$semestre','$ct','$cp','$tipo','$especialidad')");
	break;
	case 'Edicion': mysqli_query($conexion,"UPDATE materias SET clave_materia='$prueba_clave', id_plan='$plan', clave_materia_reticula='$clave_reticula', nombre_materia = '$nombre', id_carrera = '$carrera', semestre='$semestre',creditos_teoricos='$ct', creditos_practicos='$cp',id_tipom = '$tipo', id_espacialidad='$especialidad' where id_materia = '$id'");
	break;
   }
    $registro = mysqli_query($conexion,"SELECT materias.id_materia as id, materias.nombre_materia as Asignatura, carreras.nombre_carrera as Carrera, planes.descripcion_plan as Plan_Est, 
materias.semestre as Cuatrimestre FROM materias 
                                 INNER JOIN carreras ON  materias.id_carrera =  carreras.id_carrera 

                                 INNER JOIN planes ON  materias.id_plan =  planes.id_plan
  ORDER BY materias.id_materia ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                         <th width="20%">Asignatura</th>  
                        <th width="20%">Carrera</th> 
                        <th width="20%">Plan Estudios.</th>
                        <th width="20%">Semestre</th>       
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                          <td>'.$registro2['Asignatura'].'</td>
                          <td>'.$registro2['Carrera'].'</td>
                          <td>'.$registro2['Plan_Est'].'</td>
                          <td>'.$registro2['Cuatrimestre'].'</td>
                           <td> <a href="javascript:editarRegistro('.$registro2['id'].');">
                              <img src="images/lapiz.png" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['id'].');">
                             <img src="images/borrar.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                             </td>
                </tr>';
  }
	
   echo '</table>';
?>