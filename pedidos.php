<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="nuevo.css">
    <?php
        include ("./librerias/conexion.php");
        $id=$_GET["id_usuario"];
        $selec="select * from pedidos where idUsuario like '$id'";
        $selecCount="select count(*) from pedidos where idUsuario like '$id'";
        $resultcount=mysqli_query($conexion,$selecCount);
        $row=mysqli_fetch_row($resultcount);
    ?>
</head>
<body class='bodypedi'>
   <?php if ($row[0]==0) { ?>
    <table>
       <h2>No has realizado ningun pedido</h2>
        <tr>
        <tr>
             <td>Volver a la pagina principal</td>
             <td><a href="../cuerpo.php?id_usuario=<?php echo $id; ?>" target="cuerpo"><img src="./img/casa.png" height='30' width='30'></a></td>
        </tr>
         </table> 
               
        <?php } else {
                   $result=mysqli_query($conexion,$selec); 
        ?>
    <table>
        <tr>
            <td>Contenido</td>
            <td>Total</td>
            <td>Fecha Pedido</td>
        </tr>
        <?php
            while ($row=mysqli_fetch_row($result)){
        ?>
        <tr>
            <td><input type="text" name="nomCesta" size="50" value="<?php echo($row[2]);?>" readonly></td>
            <td><input type="text" name="precioCesta" size="5" value="<?php echo($row[3]);?>" readonly></td>
            <td><input type="text" name="precioCesta" size="15" value="<?php echo($row[4]);?>" readonly></td>
        </tr>
        <?php } } ?>
    </table>
</body>
</html>