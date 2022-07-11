
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iniciar sesión</title>

</head>
<body>
	
	
<center><img src="images/Logophp.jpg" width="1152" height="164" alt=""/></center>
<fieldset style="background-position: center"> <legend><strong><em>Ingreso</em></strong></legend>
<form id="formmulario" name="formulario" method="post" action="valida.php">
  <table width="200" border="0" align="center">
    <tr>
      <td><em><strong>Usuario:</strong></em></td>
      <td><label>
        <input type="text" name="caja1" id="caja1" onChange="verificaEspacios(this.form)" maxlength="40"/>
      </label></td>
    </tr>
    <tr>
      <td><em><strong>Contrase&ntilde;a: </strong></em></td>
      <td><label>
        <input type="password" name="caja2" id="caja2" onChange="verificaEspacios(this.form)" maxlength="15" />
      </label></td>
    </tr>
  </table>
  <p align="center">
    <label>
    <input type="submit" name="Submit" value="Ingresar" />
    </label>
  </p>
</form>
</fieldset>
<center>
  <p><img src="images/usuariocontra.png" width="517" height="50" alt=""/></p>
  <p>&nbsp;</p>
</center>
	
</body>
</html>
