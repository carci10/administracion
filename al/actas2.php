<center>
<img src="images/altan.jpg" width="755" height="75" />
<?php
session_start();
//CONTROL: CONEXIONES
require('clases/conexion.php');
include('clases/leerparcial.php');

$valor=$_REQUEST["materia"];//Recibe la cadena de valores del grupo y materia del formulario
printf("Asignacion Docente # $valor<br>");
//$grupo= substr($valor,0,4);//Obtiene el grupo de la cadena enviada en el formulario
//$materia=substr($valor,4,4);//Obtiene la materia de la cadena enviada por el formulario
//$periodo=substr($valor,8,1);//Obtiene la base de datos en la cual debe buscar 1 bdescolar 2 bdnvoescolar`

$rs_datos=mysqli_query($conexion,"select * from imparte where id_imparte=$valor");
$row=mysqli_fetch_assoc($rs_datos);
$grupo=$row['id_grupo'];
$materia=$row['id_materia'];
$periodo=$row['id_periodo'];

//echo "grupo: $grupo materia: $materia periodo: $periodo";
//session_register("bd");
//$_SESSION['bd']=$bd;

//$consmatricula="select Matricula,ApellidoP,ApellidoM,Nombres  from Alumnos  where Matricula in (select Matricula from Calif where Grupo='$grupo' and MATERIA='$materia' and Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres"; //Seleccióna la matricula de la tabla calif
/*
if($bd==1){
  $matricula=$sicoes2->query("SELECT Matricula,ApellidoP,APELLIDOM,Nombres FROM sicoes2.Alumnos WHERE Matricula in (SELECT Matricula FROM sicoes2.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres");
}
if($bd==2){
  $matricula=$sicoesnvo->query("SELECT Matricula,ApellidoP,APELLIDOM,Nombres FROM sicoesnvo.Alumnos WHERE Matricula in (SELECT Matricula FROM sicoesnvo.Calif WHERE Grupo='$grupo' AND MATERIA='$materia' AND Periodo='$periodo') ORDER BY ApellidoP,ApellidoM,Nombres");
}*/

$matricula=mysqli_query($conexion,"select alumnos.matricula, alumnos.apellido_p, alumnos.apellido_m,alumnos.nombre_alumno, inscripciones.id_tipoi from inscripciones
inner join alumnos on inscripciones.matricula=alumnos.matricula
where inscripciones.id_grupo='$grupo' and inscripciones.id_materia='$materia' and inscripciones.id_periodo='$periodo'");

$consulta_parcial=mysqli_query($conexion,"select * from tipos_evaluaciones where id_tipoe=$parciale");
$rs=mysqli_fetch_assoc($consulta_parcial);
$par=$rs['descripcion_evaluacion'];
echo "<form method=post action=actas3.php>";
//YA NO ESTO por que el parcial lo detrmino con la consulta anterior 
//if($_SESSION['parci']=="Parcial1"){
//  $par="Primer Parcial";
//}
//if($_SESSION['parci']=="Parcial2"){
 // $par="Segundo Parcial";
//}
//if($_SESSION['parci']=="Parcial3"){
 // $par="Tercer Parcial";
//}

echo "<table><tr><td>Parcial a capturar:".$par."</td></tr></table>";


 $resasig=mysqli_query($conexion,"SELECT nombre_materia,clave_materia FROM materias WHERE id_materia= '$materia'");
$resasig2=mysqli_query($conexion,"SELECT clave_grupo FROM grupos WHERE id_grupo= '$grupo'");
//$resasig3=mysqli_query($conexion,"SELECT clave_grupo FROM grupos WHERE id_grupo= '$grupo'");


$arreasig=$resasig->fetch_array(MYSQLI_ASSOC);
$arreasig2=$resasig2->fetch_array(MYSQLI_ASSOC);
echo "<table><tr><td>Asignatura:</td><td>".$arreasig['nombre_materia']."</td>        <td> Clave:</td><td>".$arreasig['clave_materia']."</td></tr><tr></tr></table>Grupo:".$arreasig2['clave_grupo'];
echo "<table border=0><tr bgcolor=green><td><font color='white'>
  <div align=center>No.</td><td><font color='white'>
  <div align=center>MATRICULA</td><td><font color='white'>
  <div align=center>APELLIDOP</td><td><font color='white'>
  <div align=center>APELLIDOM</td><td><font color='white'>
  <div align=center>NOMBRES</td><td><font color='white'>
  <div align=center>CALIFICACION</td></tr></font>";
$a=1;


while ($arrematri=$matricula->fetch_array(MYSQLI_ASSOC)){//converision de los datos obtenidos en la consulta.
  echo "<TR><TD>".$a."</TD>";
  echo "<TD>".$arrematri['matricula']."</TD>";
  echo "<TD>".$arrematri['apellido_p']."</TD>";
  echo "<TD>".$arrematri['apellido_m']."</TD>";
  echo "<TD>".$arrematri['nombre_alumno']."</td>";
  echo "<td><div align=center><select name=$a>
  <option value=NP>NP</option>
  <option value=NA>NA</option>
  <option value=70>70</option>
  <option value=71>71</option>
  <option value=72>72</option>
  <option value=73>73</option>
  <option value=74>74</option>
  <option value=75>75</option>
  <option value=76>76</option>
  <option value=77>77</option>
  <option value=78>78</option>
  <option value=79>79</option>
  <option value=80>80</option>
  <option value=81>81</option>
  <option value=82>82</option>
  <option value=83>83</option>
  <option value=84>84</option>
  <option value=85>85</option>
  <option value=86>86</option>
  <option value=87>87</option>
  <option value=88>88</option>
  <option value=89>89</option>
  <option value=90>90</option>
  <option value=91>91</option>
  <option value=92>92</option>
  <option value=93>93</option>
  <option value=94>94</option>
  <option value=95>95</option>
  <option value=96>96</option>
  <option value=97>97</option>
  <option value=98>98</option>
  <option value=99>99</option>
  <option value=100>100</option>
  </select>
  </td></tr>";
  //session_register("ma".$a);
  $_SESSION["ma".$a]=$arrematri['matricula'];
  $a=$a+1;
$_SESSION['id_tipoi']=$arrematri['id_tipoi'];	
}

//session_register('numcal');
$_SESSION['numcal']=$a;
//session_register("materia");
$_SESSION['materia']=$arreasig['nombre_materia'];
//session_register("clavemat");
$_SESSION['clavemat']=$materia;
//session_register("grup");
$_SESSION['grup']=$grupo;
echo "</table><br>";
echo "<input type=submit value=Siguiente>";

//$consmateria="select Carrera from Materias where MATERIA='$materia';";//selecciona el nombre de la materia del profesor 

$resmateria=mysqli_query($conexion,"SELECT id_carrera FROM materias WHERE id_materia = '$materia'");


//$resmateria=$sicoesnvo->query("SELECT Carrera FROM sicoesnvo.Materias WHERE MATERIA = '$materia'");

$arrenommat=$resmateria->fetch_array(MYSQLI_ASSOC);//Convierte la consulta anterior de la materia
$carrera=$arrenommat['id_carrera'];
//session_register('carr');
$_SESSION['carr']=$carrera;

?>









<br />
</p>
