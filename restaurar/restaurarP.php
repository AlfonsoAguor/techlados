<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php 
    include ("../librerias/funciones.php");
    include ("../librerias/conexion.php");
    $sentencia="select * from papelera";
    $result=mysqli_query($conexion,$sentencia);
   $row=mysqli_fetch_row($result);
?>
</head>
<body id="bodyForm">
<table border="0px" id="tabla">
         <?php
            $selecProducto="select * from papelera where tabla like 'productos'";  
            $resultado=mysqli_query($conexion,$selecProducto);
    ?>
          <tr>
              <td>Nombre: </td>
              <td>Informacion: </td>
              <td>Precio: </td>
              <td>Tipo: </td>
              <td>Disponibilidad: </td>
              <td>Marca: </td>
              <td>Cantidad: </td>
          </tr>  
          
                   <?php
                    while ($row=mysqli_fetch_row($resultado)){
                           $parte=explode("/",$row[2]);
                        
                 ?>
          <tr>
              <td><?php echo($parte[0]); ?></td>
              <td><?php echo($parte[1]); ?></td>
              <td><?php echo($parte[2]); ?></td>
              <td><?php echo($parte[3]); ?></td>
              <td><?php echo($parte[4]); ?></td>
              <td><?php echo($parte[5]); ?></td>
              <td><?php echo($parte[6]); ?></td>
              <td><img src="../img/restaurar.png" height='30' width='30' alt='restaurarimg' onclick="javascript:recuperar('<?php echo($row[1]);?>','<?php echo($row[2]);?>','<?php echo($row[0]);?>','restaurar1');"></td> 
          </tr>
          <?php } 
        
    ?>
        </table>
    <form name="restaurar1" method="post" action="restaurar2.php">
         <input type="hidden" name="rest">
         <input type="hidden" name="rest2">
    </form>

</body>
</html>