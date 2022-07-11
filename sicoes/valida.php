<?php
session_start();
$usua=$_REQUEST["caja1"];
$con=$_REQUEST["caja2"];

//CONTROL: CONEXIONES
require('clases/conexion.php');

//ERROR: NO A INGRESADO USUARIO & CONTRASEÑA
if ($con=="" && $usua==""){
  $contra="error";
  $usuario1="error";
  echo"<script language=javascript>alert('Debes ingresar un nombre de usuario y una contraseña')</script>";
  echo"<script language=javascript>self.location.href='index.php'</script>";
 }

//CONSULTA: BASEDEDATOS: sicoes TABLA: usuarios COLUMNAS: Usuario|Contra
$resultado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE NombreUsuario='$usua' AND PassUsuario='$con'");

//RESULTADO: ALMACENA INFORMACION
while ($row = $resultado->fetch_array(MYSQLI_ASSOC) ){ 

  $RecepUsuario = $row['NombreUsuario']; 
  $RecepPassword = $row['PassUsuario'];
/*
function limpiarString($texto)
{
      $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $texto);                
      return $textoLimpio;
}

$UserFil = limpiarString($RecepUsuario);
$PassFil = limpiarString($RecepPassword);

  $usuario = stripslashes($UserFil);
  $contra1 =stripslashes($PassFil);   
	*/
	$usuario = $RecepUsuario;
  $contra1 =$RecepPassword;

  //$usuario = mysql_real_escape_string($filtroUsuario);
  //$contra1 = mysql_real_escape_string($filtroPassword);

  $tipousu=$row['NivelUsuario'];
  }
$resultado->close();

//FLUJO: Validacion de credenciales de acceso
if ($con==$contra1 && $usuario==$usua){ 

  if ($tipousu==3){
    $_SESSION['usuario']=$usuario;

    $resultado2 = mysqli_query($conexion,"SELECT Codigo FROM control_escolar.usuarios WHERE NombreUsuario='$usuario'");
    $matri = $resultado2->fetch_array(MYSQLI_ASSOC);
    $matricula = $matri["Codigo"];
    $_SESSION['matricula']= $matricula;

    $dif=substr($matricula,0,4);  //CUIDADO TEN UN GRAN DETALLE

    $consulta=mysqli_query($conexion,"SELECT nombre_alumno,apellido_p,apellido_m,id_carrera, id_especialidad,semestre_actual FROM control_escolar.alumnos WHERE matricula='$matricula'");
    
    while($arreglo=$consulta->fetch_array(MYSQLI_ASSOC)){
      $dato=$arreglo['nombre_alumno'];
      $dato1=$arreglo['apellido_p'];
      $dato2=$arreglo['apellido_m'];
      $carr=$arreglo['id_carrera'];
	  $especialidad=$arreglo['id_especialidad'];
	  $semestre_actual=$arreglo['semestre_actual'];
      }

    $_SESSION['Nombre']=$dato;
    $_SESSION['ApellidoPaterno']=$dato1;
    $_SESSION['ApellidoMaterno']=$dato2;
    $_SESSION['Carrera']=$carr;
	$_SESSION['especialidad']=$especialidad;
	$_SESSION['semestre']=$semestre_actual;

    header ("Location: menuprinalumno.php");    
    }


  if ($tipousu==1){
    $_SESSION['tipo']=$tipousu;
    $_SESSION['usuario']=$usuario;
    header ("Location: menuescolar.php");
    }

  if ($tipousu==2){
    $_SESSION['tipo']=$tipousu;
    $_SESSION['usuario']=$usuario;
    header ("Location: menuprof.php");
	 
   }

  if ($tipousu==5){
    $_SESSION['tipo']=$tipousu;
    $_SESSION['usuario']=$usuario;
    header ("Location: tiranvoing.php");
   }

  }else{
    echo"<script language=javascript>alert('Error el usuario: $usua o la contraseña: $con son incorrectas')</script>";
    echo"<script language=javascript>alert('Si tu usuario no es correcto y ya lo habias dado de alta, acude a control escolar para registrarte nuevamente')</script>";
	//header ("Location: index.php");
  }
?>

