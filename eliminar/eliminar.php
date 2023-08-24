<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php include ("../librerias/pueblos.php") ?>
    <?php include ("../librerias/cp.php") ?>
    <?php include ("../librerias/funciones.php") ?>
    <script type="text/javascript" src="../calendar/general.js"></script>
	<script type="text/JavaScript" src="../calendar/overlib_mini.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar-es.js"></script>
	<script type="text/JavaScript" src="../calendar/calendar-setup.js"></script> 
	<script type="text/javascript" src="../librerias/fechas.js"></script>
    <link rel="stylesheet" href="../calendar/CALENDAR.CSS">
     <?php
     $id=$_GET["id_usuario"];
     ?>
</head>
<body onLoad="javascript:ocultar();" id="bodyForm">
    <form name="eliminar" method='post' action='eliminar2.php?id_usuario=<?php echo($id); ?>' id="formu">
        <table id="tabla">
         <tr>
             <td>Criterios de busqueda</td>
         </tr>
          <tr>
              <td>Nombre: </td>
              <td><input type="text" name="nombre" size="20" TabIndex="1" onChange="javascript:comprobar_nom('eliminar');" onkeypress="javascript:return acceptLet(event);"> <label id="aNom"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>  
          <tr>
              <td><input type="radio" name="docu" value=0 checked>DNI</td>
              <td rowspan="2"><input type="text" size="10" name="docuNumero" onChange="javascript:comp_dni_nie('eliminar');"></td>
          </tr>
          <tr>
              <td><input type="radio" name="docu" value=1>NIE</td>
          </tr>
          <tr>
            <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('eliminar');"></td>
          </tr>
        </table>
    </form>
</body>
</html>