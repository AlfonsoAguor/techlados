<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php include ("../librerias/funciones.php") ?>
    <?php
        include ("../librerias/conexion.php");
        $idP=$_GET["idProducto"];
        $sentencia="select * from productos where idProducto=$idP";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    ?>
    
</head>

<body onLoad="javascript:ocultarProducto();" id="bodyForm">
    <form name='modificar' method='post' action='modificarP4.php?idProductos=<?php echo ($row[0]); ?>' id="formu">
        <table id="tabla">
            <tr>
              <td>Nombre: </td>
              <td><input value="<?php echo($row[1]); ?>" type="text" name="nombreP" size="20" TabIndex="1" onchange="javascript:comprobar_nomP('modificar');"/> <label id="aNomP"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>  
          <tr>
              <td>Informacion: </td>
              <td><input value="<?php echo($row[2]); ?>" type="text" name="info" size="50"></td>
          </tr>
          <tr>
            <td>Tipo: </td>
            <td><select value="<?php echo($row[4]); ?>" name="tipo" onChange="javascript:comprobar_tipo('modificar');">
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
          <td><input value="<?php echo($row[3]); ?>" type="text" name="precio" size="7" onchange="javascript:comprobar_precio('modificar');" onkeypress="javascript:return acceptNumP(event);"/> <label id="aPrecio"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          
          <tr>
            <td>Disponibilidad: </td>
            <td><select value="<?php echo($row[5]); ?>" name="dis" onChange="javascript:comprobar_disponibilidad('modificar');">
                  <option value="--" selected>Seleccione la Disponibilidad
                  <option value="con stock">Con Stock
                  <option value="sin stock">Sin Stock
                </select>
                <label id="aDis"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr> 
            <tr>
              <td>Marca: </td>
              <td><input value="<?php echo($row[7]); ?>" type="text" name="marca" size="5" onChange="javascript:comprobar_marca('modificar');"><label id="aMarca"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td>Cantidad: </td>
              <td><input value="<?php echo($row[6]); ?>" type="text" name="cant" size="5" onChange="javascript:comprobar_cantidad('modificar');" onkeypress="javascript:return acceptNumP(event);"><label id="aCant"> <img src="../img/advertencia.png" height='15' width='15'>oblig</label></td>
          </tr>
          <tr>
              <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviarP('modificar');"></td>
          </tr>
        </table>
    </form>
</body>
</html>