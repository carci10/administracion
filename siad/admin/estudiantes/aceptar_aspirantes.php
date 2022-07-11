<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 1) {
            $user = $_SESSION['NombreUsuario'];
              $codigo = $_SESSION["Codigo"];

              $consulta1=mysqli_query($conexion,"select Foto from usuarios where Codigo = $codigo");                  
                while($filas=mysqli_fetch_array($consulta1)){
                         $foto=$filas['Foto'];                           
                 }
        ?>
        <?php 
          $consulta="select IdGrupo, NumeroGrupo from grupos";
          $grupo=mysqli_query($conexion,$consulta);
        ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acepta Aspirantes</title>
</head>

<body>
<?php
    include('../includes/footer.php');
 ?>
</body>
</html>
<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../login.php"; </script>';
}
?>
