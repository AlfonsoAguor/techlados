<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/conexion.php");
        $tp=$_POST['tipo'];
        $mar=$_POST['marca'];
    
        if (($tp=='') && ($mar=='')) {
            $sentencia="select * from productos";
            $sentencia2="select * from productos";
        } else {
            if (($tp!='') && ($mar=='')) {
                $sentencia="select * from productos where tipo like '%$tp%'";
                $sentencia2="select count(nombre) from productos where tipo like '%$tp%'";
            } else {
                if (($tp=='') && ($mar!='')) {
                    $sentencia="select * from productos where marca like '%$mar%'";
                    $sentencia2="select count(nombre) from productos where marca like '%$mar%'";
                } else {
                    $sentencia="select * from productos where tipo like '%$tp%' or marca like '%$marca%'";
                    $sentencia2="select count(nombre) from productos where tipo like '%$tp%' or marca like '%$mar%'";
                }
            }
        }
    
        $result2=mysqli_query($conexion,$sentencia2);
        $row2=mysqli_fetch_row($result2);
        $result=mysqli_query($conexion,$sentencia);
    ?>
</head>
<body id="bodyForm">
        <table border="1px" id="tabla">
          
          <?php
                if ($row2[0]==0) { 
            ?>

              <h2>No hay datos</h2><br>
              <a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a>
                     
              <?php } else {
                    ?>
                    <tr>
              <td>Nombre: </td>
              <td>Precio: </td>
              <td>Tipo: </td>
              <td>Disponibilidad: </td>
              <td>Marca: </td>
              <td>Cantidad: </td>
          </tr>  
                   <?php
                    while ($row=mysqli_fetch_row($result)){
                 ?>  
          <tr>
              <td><?php echo($row[1]); ?></td>
              <td><?php echo($row[3]); ?></td>
              <td><?php echo($row[4]); ?></td>
              <td><?php echo($row[5]); ?> </td>
              <td><?php echo($row[6]); ?></td>
              <td><?php echo($row[7]); ?></td>
              
              <td><a href="eliminarP3.php?idProducto=<?php echo ($row[0]); ?>"><img src="../img/eliminar.png"height='30' width='30' alt='eliminarimg'></a></td>
          </tr>
          <?php }
                    }//fin while ?>
        </table>
</body>
</html>