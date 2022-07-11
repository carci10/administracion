<?php 
//echo 'Cisneros';
?>
<
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="logo.png" type="image/png"/>
   <style>
      #grupo p{
		background-color: #444;
		-webkit-border-radius:10px;
		line-heigth:20px;
		border: solid 1px #999;
		padding: 11px 9px 12px;
		font-size: 17px;
		margin-left: 500px;
		margin-right:500px;
		         		}
		#grupo p a{
		text-decoration: none;
		color:white;
		display:block;
		-webkit-tap-highligth-color: rgba(0,0,0,0.5);
		font: bold 17pt Helvetica;
		}
		
		
		
		
		</style>
<script type="text/javascript" src="modal/lib/prototype.js"></script>
<script type="text/javascript" src="modal/lib/scriptaculous.js?¬
    load=builder,effects"></script>
<script type="text/javascript" src="modal/modalbox.js"></script>
<link rel="stylesheet" href="modal/modalbox.css" type="text/css" media="screen" /> 
<title>Sistema de Control Escolar TESI</title>
<script type="text/javascript">
function mostrarVentana()
{
    var ventana = document.getElementById('miVentana'); // Accedemos al contenedor
    ventana.style.marginTop = "100px"; 
    ventana.style.marginLeft = ((document.body.clientWidth-650) / 2) +  "px"; 
    ventana.style.display = 'block'; 
}

function ocultarVentana()
{
    var ventana = document.getElementById('miVentana'); // Accedemos al contenedor
    ventana.style.display = 'none'; 
}
</script>

</head>
<body bgcolor="white" onload="mostrarVentana()">

<center>
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>

<p align="center">&nbsp;</p>
<p align="center"><a href="login.php" title="Iniciar sesión" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;"><img src="images/LOGIN.jpg" width="300" height="200" alt=""/></a></p>
<table>
<div id="grupo">
 <center><p><a href="formfolio.html" title="Iniciar sesión" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;">NUEVO INGRESO</a></p>
 
 </center>
</div>


<center>
  
    <p>
      <!--<p><a href="video.html" target="_blank">VIDEO DE AYUDA A NUEVO REGISTRO</a>-->
  <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/80MgfIwXUV4" frameborder="0" allowfullscreen></iframe>
  </div>
    <a href="video.html"><label>
  <label></label></label></a><label><br />
      <span style="font-weight: 300"><strong>VIDEO DE AYUDA A NUEVO INGRESO</strong></span></label>
    </p>
</center>
<p>&nbsp; </p>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</center>

<p align="right" >Cisneros**</p>

</body>
</html>



