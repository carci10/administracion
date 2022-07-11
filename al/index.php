<?php 
//echo 'Cisneros';
?>
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
<!--<div id="miVentana" style="position: fixed; width: 650px; height: 490px; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: normal; border: #333333 3px solid; background-color: #FAFAFA; color: #000000; display:none;">
 <div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#006394">Bienvenidos</div>
 <p style="padding: 5px; text-align: justify; line-height:normal"><table><tr><td><img src="images/ALERTA-AMARILLA.jpg" height="150" width="150" /></td><td>Hola antes de realizar tu pago de reinscripción, verifica en control escolar y caja el nuevo procedimiento de pago. <h2>Porque no hay devolución de dinero</h2><br /><br> Nota:Las cuotas estan sujetas a cambios sin previo aviso.</td></tr>  </table> </p>
  <div style="padding: 10px; background-color: #FFFFFF; text-align: center; margin-top: 44px;"><input id="btnAceptar" onclick="ocultarVentana();" name="btnAceptar" size="20" type="button" value="Aceptar" />
 </div>-->
</div> 


<center>
  <img src="images/Logophp.jpg" width="1152" height="164" alt=""/>
</center>

<fieldset title="Menu para alumnos de nuevo ingreso" style="border: solid">	
	<legend align="left"><n><i><big> Area para alumnos de nuevo ingreso a los Posgrados del TES. Ixtapaluca </big> </i> </n></legend>
<p align="center"><a href="#" title="Iniciar sesión" onClick="Modalbox.show(this.href, {title: this.title, width: 600}); return false;"><img src="images/LOGIN.jpg" width="300" height="200" alt=""/></a></p>
<table>
<div id="grupo">
 <center><p><a href="formfolio.html" title="Iniciar sesión" onClick="Modalbox.show(this.href, {title: this.title, width: 500}); return false;">NUEVO INGRESO</a></p>
</center>
	
	<center><p><a href="../index.html" title="Iniciar sesión" onClick="Modalbox.show(this.href, {title: this.title, width: 500}); return false;"> SALIR </a></p> </center>
	
</div>


<center>
  
    <p>
      <!--<p><a href="video.html" target="_blank">VIDEO DE AYUDA A NUEVO REGISTRO</a>-->
  <div>
   <iframe width="560" height="315" src="https://www.youtube.com/embed/hJmRbo-HnDI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	  
  </div>
	<br>
    <a href="video.html"><label>
  <label></label></label></a><label><br />
      <span style="font-weight: 300"><strong>VIDEO DE AYUDA PARA ALUMNOS DE NUEVO INGRESO</strong></span></label>
    </p>
</center>
<div id='resultado'></div>
<p>&nbsp; </p>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
</center>

</fieldset>	
	
<p align="right" >Cisneros**</p>

</body>
</html>



