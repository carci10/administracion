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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SIAD UNI</title>
    <link rel="shortcut icon" href="../imagenes/logoUNI.ico" type="image/x-icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="estudiantes/myjava.js"></script>

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
                    <li class="active">Estudiantes</li>
                </ol>
            </div>
        </div> 
        <!-- /.row -->
        <!-- Content Row -->
<?php //include('otros/menuAdministrador.php') ?>
        <div class="row">
            <!-- Content Column -->
            <div class="col-md-9">
                <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">
            <div class="btn-group pull-right">
            </div>
            <center><h4><b>Administracion de Estudiantes</b></h4></center>
        </div>
        <div class="panel-body">
            <div class="row">
		               <div class="col-md-1"><h4>Buscar:</h4></div>
		               <div class="col-md-5">
		               <input type="text" name="s" id="bs-prod" class="form-control" placeholder="Escribir Matricula a buscar">
		               </div>
		               	<div class="col-md-6">
		                  <button id="nuevo-producto" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> </button>
							<a href="formnvo_ingreso.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Nuevo Ingreso</button> </a>
							<a href="form_egreso.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Egreso </button> </a>
							
		                  <a href="Reporte_PDF_Estudiantes.php"> <button class="btn btn-primary"><i class="fa fa-file-pdf-o"></i>  Exportar Listado a PDF</button> </a>
							
		               </div>
	              <br>
 <br>
    <div class="registros" style="width:100%;" id="agrega-registros"></div>
      <div class="col-md-6" style="text-align: left;">
		    <center>
		        <ul class="pagination" id="pagination"></ul>
		    </center>
      </div>
      <div class="col-md-6">
		   <center>
		   <h4 style="font-weight: bold;"> 
    <?php
include('conexion.php');
    $numeroRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM alumnos"));
    echo "Registros Totales: $numeroRegistros";
        ?>
        </h4>
          </center>
      </div>
   
  
    <!-- MODAL PARA EL REGISTRO-->
    <div class="modal fade" id="registra-datos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background:#337ab7; text-align: center;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color:white;" id="myModalLabel"><b>
              <i class='glyphicon glyphicon-user'></i>&nbsp;&nbsp;Alumnos</b></h4>
            </div>
            <form id="formulario" class="form-group" onsubmit="return agregarRegistro();">
            <div class="modal-body">

            <input type="text" class="form-control" required readonly id="id-registro" name="id-registro" readonly="readonly" style="visibility:hidden; height:5px;"/>

                 <div class="form-group"> <label for="codigo" class="col-md-2 control-label">Proceso:</label>
				<div class="col-md-10"><input type="text" class="form-control" required readonly id="pro" name="pro" hidden="true" /></div>
			   </div> <br>
               <div class="form-group"> <label for="carnet" class="col-md-2 control-label">Matricula:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="matricula" name="matricula" required maxlength="10"></div>
			   </div> <br>
			   <div class="form-group"> <label for="nombre" class="col-md-2 control-label">Nombres:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50"></div>
			   </div><br>
			   <div class="form-group"> <label for="apellido_p" class="col-md-2 control-label">Apellido P:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="apellido_p" name="apellido_p" required maxlength="50"></div>
			   </div><br><br>
				<div class="form-group"> <label for="apellido_m" class="col-md-2 control-label">Apellido M:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="apellido_m" name="apellido_m" required maxlength="50"></div>
			   </div><br><br>
			   
			   <div class="form-group"> <label for="cedula" class="col-md-2 control-label">Cedula:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="cedula" name="cedula" required maxlength="16"></div>
			   </div><br>
			   <div class="form-group"> <label for="correo" class="col-md-2 control-label">Correo:</label>
				<div class="col-md-10"><input type="email" class="form-control" id="correo" name="correo" required maxlength="50"></div>
			   </div><br>
			   <div class="form-group"> <label for="celular" class="col-md-2 control-label">Celular:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="celular" name="celular" required maxlength="8"></div>
			   </div><br>
			   <div class="form-group"> <label for="telefono" class="col-md-2 control-label">Telefono:</label>
				<div class="col-md-10"><input type="text" class="form-control" id="telefono" name="telefono" required maxlength="8"></div>
			   </div><br>
			   <div class="form-group"> <label for="direccion" class="col-md-2 control-label">Direccion:</label>
				<div class="col-md-10">
		       <textarea class="form-control" id="direccion" name="direccion" required="" maxlength="250"></textarea></div>
		       <br><br>
			   </div>
			   <div class="form-group"> <label for="estado" class="col-md-2 control-label">Estado:</label>
				 <div class="col-md-10">
                   <select class="form-control" id="estado" name="estado" required="">
					<option value="1" selected="">Activo</option>
					<option value="0">Inactivo</option>
				  </select>
				 </div>
          <br>
          </div>
          <div class="form-group"> <label for="estado" class="col-md-2 control-label">Grupo:</label>
         <div class="col-md-10">
                   <select class="form-control" id="grupo" name="grupo" required="">
                 <?php 
                      while($fila=mysql_fetch_row($grupo)){
                      echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
                      }
                      ?>
                  </select>
         </div>
			   </div>
                <br><br>
               

                 <div id="mensaje"></div>           
             </div>         
            <div class="modal-footer">
                <input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
          </div>
        </div>
      </div>
            </div>
        </div>
    </div>

            </div>
                    
        </div>
        <!-- Fin del Panel -->
      </div>
    </div>
</div>
</div>
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
