<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
        <?php
        include ("../librerias/conexion.php");
        $id_p=$_GET["idProducto"];
        $sentencia_eliminar="delete from productos where idProducto=$id_p";
        $sentencia="select * from productos where idProducto=$id_p";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    $contenido=$row[1]."/".$row[2]."/".$row[3]."/".$row[4]."/".$row[5]."/".$row[6]."/".$row[7];
    $sentencia_insertar="insert into papelera(tabla,contenido) values('productos','$contenido')";
    ?>
    <?php include ("../librerias/funciones.php") ?>
</head>
<body id="bodyForm">
    <table id="tabla">
          <tr>
              <td> Nombre: <?php echo($row[1]); ?></td>
          </tr>  
          <tr>
              <td>Informacion: <?php echo($row[2]); ?></td>
          </tr>
          <tr>
              <td>Tipo: <?php echo($row[3]); ?></td>
          </tr>
          <tr>
              <td>Precio: <?php echo($row[4]); ?></td>
          </tr> 
          <tr>
              <td>Disponibilidad: <?php echo($row[5]); ?></td>
          </tr>
        <tr>
              <td>Marca: <?php echo($row[6]); ?></td>
          </tr>
          <tr>
              <td>Cantidad: <?php echo($row[7]); ?></td>
          </tr>
          <form action="eliminarP4.php" method="post" name="eliminar">
        <tr>
           <td>¿quieres eliminar?</td>
           <td><input type="hidden" name="sen_ins" value="<?php echo($sentencia_insertar); ?>">
               <input type="hidden" name="sen_eli" value="<?php echo($sentencia_eliminar); ?>"></td>
            <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('eliminar');"></td>
            <td><a href="../cuerpo.php"><img src="../img/cancelar.png" height='50' width='50'></a></td>
        </tr>
            </form>
        </table>
</body>
</html>