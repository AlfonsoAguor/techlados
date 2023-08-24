<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        $nomb=$_POST['nombreP'];
        $infor=$_POST['info'];
        $tp=$_POST['tipo'];
        $pre=$_POST['precio'];
        $disp=$_POST['dis'];
        $canti=$_POST['cant'];
        $marc=$_POST['marca'];
        
       $sentencia="insert into productos(nombre,informacion,precio,tipo,disponibilidad,marca,cantidad) value ('$nomb','$infor','$pre','$tp','$disp','$marc','$canti')"; 
    ?>
    <?php include ("../librerias/funciones.php") ?>
    
</head>
<body id="bodyForm">
       <form action="insertarP3.php" method="post" name="insertar2" id="formu">
       <input type="hidden" name="sent" value="<?php echo($sentencia); ?>" />
        <table id="tabla">
          <tr>
              <td> Nombre: <?php echo($nomb); ?></td>
          </tr>  
          <tr>
              <td>Informacion: <?php echo($infor); ?></td>
          </tr>
          <tr>
              <td>Tipo: <?php echo($tp); ?></td>
          </tr>
          <tr>
              <td>Precio: <?php echo($pre); ?></td>
          </tr> 
          <tr>
              <td>Disponibilidad: <?php echo($disp); ?></td>
          </tr>
          <tr>
              <td>Cantidad: <?php echo($canti); ?></td>
          </tr>
          <tr>
              <td>Marca: <?php echo($marc); ?></td>
          </tr>
        <tr>
            <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('insertar2');"></td>
        </tr>
        </table>
        </form>
</body>
</html>