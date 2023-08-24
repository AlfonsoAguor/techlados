<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php include ("../librerias/funciones.php") ?>
</head>
<body onLoad="javascript:cargarProducto();" id="bodyForm">
    <form name='insertar' method='post' action='insertarP2.php' id="formu">
        <table id="tabla">
          <tr>
              <td>Nombre: </td>
              <td><input type="text" name="nombreP" size="20" TabIndex="1" onchange="javascript:comprobar_nomP('insertar');" onkeypress="javascript:return acceptLetP(event);" /> <label id="aNomP"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>  
          <tr>
              <td>Informacion: </td>
              <td><input type="text" name="info" size="50"></td>
          </tr>
          <tr>
            <td>Tipo: </td>
            <td><select name="tipo" onChange="javascript:comprobar_tipo('insertar');">
                  <option value="--" selected>Seleccione el tipo
                  <option value="Teclado">Teclado
                  <option value="Carcasa">Carcasa
                  <option value="Keycap">Keycaps
                  <option value="Switch">Switch
                  <option value="Placa">Placa
                  <option value="PCB">PCB
                  <option value="Otros">Otros
                </select>
                <label id="aTipo"><img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
            </tr>   
            
            <tr> 
          <td>Precio: </td>
          <td><input type="text" name="precio" size="7" onchange="javascript:comprobar_precio('insertar');" onkeypress="javascript:return acceptNumP(event);"/> <label id="aPrecio"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          
          <tr>
            <td>Disponibilidad: </td>
            <td><select name="dis" onChange="javascript:comprobar_disponibilidad('insertar');">
                  <option value="--" selected>Seleccione la Disponibilidad
                  <option value="con stock">Con Stock
                  <option value="sin stock">Sin Stock
                </select>
                <label id="aDis"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr> 
          <tr>
              <td>Cantidad: </td>
              <td><input type="text" name="cant" size="5" onChange="javascript:comprobar_cantidad('insertar');" onkeypress="javascript:return acceptNumP(event);"><label id="aCant"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td>Marca: </td>
              <td><input type="text" name="marca" size="5" onChange="javascript:comprobar_marca('insertar');"><label id="aMarca"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviarP('insertar');"></td>
          </tr>
        </table>
    </form>
</body>
</html>