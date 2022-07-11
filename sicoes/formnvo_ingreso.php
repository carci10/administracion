<?php
/*
session_start();
if ($_SESSION['usuario'] == "" || empty($_SESSION['usuario']) ){
  echo"<script language=javascript>alert('Error de sesion')</script>";
  echo"<script language=javascript>self.location.href='destroy.php'</script>";
}*/
?>
<center>
  <img src="../imagenes/Logophp.jpg" width="1152" height="164" alt=""/>
</center>
<center>
<p>
 <center><strong>MENU PARA INGRESAR LA BASE DE ALUMNOS DE NUEVO INGRESO</strong></center> 
</p>

<form name="nuevo_ingreso" method="post" action="guarda_nvo_ingreso.php">
 <table border=1 width="34%" bordercolor=#669900>
    
    
    <tr>
    <td width="56%" style="width: 30%" scope="row"><p><strong> FOLIO: </strong></p></td>
    <td width="44%"> <input type="int" name="folio" id="folio" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
    
    <tr>
    <td scope="row" style="width: 30%"><p><strong> NOMBRE: </strong></p></td>
    <td> <input type="text" name="nombre" id="nombre" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
    
    
    <tr>
    <td scope="row" style="width: 30%"><p><strong> APELLIDO PATERNO: </strong></p></td>
    <td> <input type="text" name="apellido_p" id="apellido_p" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>

    <tr>
    <td scope="row" style="width: 30%"><p><strong> APELLIDO MATERNO: </strong></p></td>
    <td> <input type="text" name="apellido_m" id="apellido_m" style="FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Arial" required="required" ></td> </tr>
     
    
    <tr>
    <td scope="row" style="width: 30%"><strong> TURNO: </strong></td>
      <td>
      <select name="turno" id="turno">}
          <option value=0>--SELECCIONE-- </option>
          <option value="M">MATUTINO</option>
          <option value="V">VESPERTINO</option
        ></select> 
    </td>
    </tr>
    
    
     <tr>
    <td scope="row" style="width: 30%"><strong> CARRERA: </strong></td>
      <td>
      <select name="carrera" id="carrera">
          <option value=0>--SELECCIONE-- </option>
          <option value="1">SISTEMAS</option>
          <option value="2">INFORMATICA</option
        ></select> 
    </td>
    </tr>
    
    
     <tr>
    <td scope="row" style="width: 30%"><strong> PLAN DE EST: </strong></td>
      <td>
      <select name="turno" id="turno">
          <option value=0>--SELECCIONE-- </option>
          <option value=1>2010</option>
          <option value=2>2016</option
        ></select> 
    </td>
    </tr>
    
    <tr>
    <td scope="row" style="width: 30%"><strong>PERIODO INICIO: </strong></td>
      <td>
      <select name="año" id="año">
          <option value=0>--SELECCIONE-- </option>
          <option value=2020>2020-1</option>
          <option value=2021>2021-1</option>
          <option value=2022>2022-1</option>
          <option value=2023>2023-1</option>
          <option value=2024>2024-1</option>
        </select> 
    </td>
    </tr>
    
  
    <td scope="row" style="width:60%">
    <input type="submit" name="gen_matricula" value="GUARDAR">
 	</td> 
    <td scope="row" style="width:60%">&nbsp;</td></tr> 

</table>

</form>  
