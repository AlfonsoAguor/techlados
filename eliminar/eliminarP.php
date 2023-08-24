<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
       <link rel="stylesheet" href="../estilo.css" type="text/css">
    <?php include ("../librerias/funciones.php") ?>
</head>
<body onLoad="javascript:ocultarProducto();" id="bodyForm">
    <form name='eliminar' method='post' action='eliminarP2.php' id="formu">
        <table id="tabla">
         <tr>
             <td>Criterios de busqueda</td>
         </tr>
            <tr>
              <td>Tipo : </td>
              <td><input type="text" name="tipo" size="20" TabIndex="1" onChange="javascript:comprobar_tipo('eliminar');" onkeypress="javascript:return acceptLetP(event);"><label id="aTipo"><img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td>Marca : </td>
              <td><input type="text" name="marca" size="20" TabIndex="1" onChange="javascript:comprobar_marca('eliminar');"><label id="aMarca"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>  
          <tr>
              <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('eliminar');"></td>
          </tr>
        </table>
    </form>
</body>
</html>