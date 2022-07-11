<?php
session_start();
include 'conexion.php';
//include 'leerparcial.php';

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["NivelUsuario"] == 1 and $_SESSION['NombreUsuario']=='carci10@hotmail.com') {
            $user = $_SESSION['NombreUsuario'];
              $codigo = $_SESSION["Codigo"];

              $consulta=mysqli_query($conexion,"select Foto from usuarios where Codigo = $codigo");                  
                while($filas=mysqli_fetch_array($consulta)){
                         $foto=$filas['Foto'];                           
                 }
		 
		 $per=mysqli_query($conexion,"select id_periodo from periodos where estado_perido=1");
		 $obtiene_per=mysqli_fetch_assoc($per);
		 $periodo=$obtiene_per['id_periodo'];
		 
		  $consulta1="select * from  calificaciones_gral";
         
		 $existe=mysqli_query($conexion,$consulta1);
		
		 if($existe)
		 $elimina_vista=mysqli_query($conexion,"drop view calificaciones_gral");
		 
		
		 $crea_nueva_vista=mysqli_query($conexion,"create view calificaciones_gral as select *from calificaciones  where id_periodo=$periodo order by matricula,id_materia");
		 
	
		 
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIAD PERIODOS</title>
    <link rel="shortcut icon" href="../imagenes/logoUNI.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="horarios/myjava.js"></script>

    <link href="css/sweetalert.css" rel="stylesheet">
    <script src="js/functions.js"></script>
    <script src="js/sweetalert.min.js"></script>
</head>
<body>
           <?php
        include ('menuAdmin.php');
            ?>
       <br>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <div class="col-md-3"><img src="../imagenes/logoSIAD.png" width="80" height="80" class="img-responsive"></div>
             <div class="col-md-6">         
               
                <img src="../imagenes/baner.png" class="img-responsive">
                     
             </div>
               <div class="col-md-3">
              <img class="img-responsive img-circle" src="<?php echo $foto ?>" width="50px" height="50px">
              <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b> <?php echo $user ?></h5>
               </div> 

            </div>
            <div class="col-lg-12">
                    <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="admin.php">Administrador</a></li>
                    <li class="active">Periodos</li>
                </ol>
            </div>
        </div> 
        
			<center><big><b> ¿Realmente quieres copaiar las calificaciones a kardex?</b></big> </center><br>
			<center><big><b> ¡ La copia se hace al terminar el semestre para que aparezca en boleta, si por alguna razon haces este tramite antes se copian las calificacion incompletas y ya no se pueden eliminar!</b></big> </center><br>
			<?php 
			$consulta_max_id=mysqli_query($conexion,"select max(id_kardex) as id_kardex from kardex");
		 	$obtiene_max=mysqli_fetch_assoc($consulta_max_id);
		 	$max=$obtiene_max['id_kardex'];
		 
		 
		 	$consulta_periodo_capturado2=mysqli_query($conexion,"select periodo_def from kardex where $max=id_kardex");
		 	$obtiene_periodo=mysqli_fetch_assoc($consulta_periodo_capturado2);
		 	$periodo_capturado=$obtiene_periodo['periodo_def'];
		 
		 	echo"<center> <big><n><i> Atencion el semestre $periodo_capturado ya fue capturado max id: $max  Si es el semestre actual no apretar SI ya que se duplica la informacion</i></n></big> </center>";
				
			?>
				
			
			<form name="incremente" method="post" action="">
				<center>
			<input type=submit name="si" value="SI ">
				
			</center>
			</form>
			
			
			<?php
			if(isset($_POST['si'])){
				$obtiene_promedios=mysqli_query($conexion,"select matricula,id_materia as asignatura, round(avg(calificacion),1)as ordinario, descripcion_periodo as periodo_ord from calificaciones_gral
inner join periodos on periodos.id_periodo=calificaciones_gral.id_periodo
where id_materia=id_materia and matricula=matricula and id_tipoi=1 group by matricula,id_materia");
		       
				
				
				 while($resulta=mysqli_fetch_assoc($obtiene_promedios)){
					$matricula=$resulta['matricula'];
					 $asignatura=$resulta['asignatura'];
					 $ordinario=$resulta['ordinario'];
					 $periodo=$resulta['periodo_ord'];	 
					 $inserta="insert into kardex(matricula,asignatura,ordinario,periodo_ord, periodo_def,definitiva) 
					VALUES('$matricula','$asignatura','$ordinario','$periodo','$periodo',$ordinario)";
						 mysqli_query($conexion,$inserta);
					printf("$matricula, $asignatura,$ordinario,$periodo Se almaceno Ordinario Correctamente <br>");	 
						 
					 }
					
					
					 
				 }
				
				/*
				$resultado=mysqli_query($conexion,$incrementa);
				if($resultado)
					echo"<center>Semestre actualizado </center>";
					headers('location_admin.php');  */
			
		 		
		 			?>
			
			
        <hr>
    </div>
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
