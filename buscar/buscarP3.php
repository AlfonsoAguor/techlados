<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/conexion.php");
        $id_p=$_GET["idProducto"];
        $sentencia="select * from productos where idProducto=$id_p";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    ?>
</head>
<body id="bodyForm">
    <form name="buscar" method='post' id="formu">
        <table id="tabla">
          <tr>
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
          <tr>
              <td><a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a></td>
          </tr>
        </table>
    </form>
</body>
</html>