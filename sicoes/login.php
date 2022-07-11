<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iniciar sesión</title>

</head>
<body>

<form id="formmulario" name="formulario" method="post" action="valida.php">
  <table width="200" border="0" align="center">
    <tr>
      <td><strong>Usuario</strong></td>
      <td><label>
        <input type="text" name="caja1" id="caja1" onChange="verificaEspacios(this.form)" maxlength="30"/>
      </label></td>
    </tr>
    <tr>
      <td><strong>Contrase&ntilde;a</strong></td>
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

</body>
</html>
