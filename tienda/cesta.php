<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../nuevo.css" type="text/css">
    <?php 
    include ("../librerias/conexion.php");
    include ("../librerias/funciones.php");
    $idUsu=$_GET["id_usuario"];
    $sentencia="select * from cesta where idUsuario like '$idUsu'";
    $sentencia2="select count(*) from cesta where idUsuario like '$idUsu'";
    $result=mysqli_query($conexion,$sentencia);
    $result2=mysqli_query($conexion,$sentencia2);
    $row2=mysqli_fetch_row($result2);
    ?>
</head>
<body class="bodycesta">
   <form name='cestaform' method='post' action='cesta2.php'>
    <table>
       <?php if ($row2[0]==0) { ?>
           <h2>No hay productos en la cesta</h2>
           <a href="../cuerpo.php?id_usuario=<?php echo $idUsu; ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
       <?php } else { ?>
        <tr>
            <td class="tacesta">Nombre</td>
            <td class="tacesta">Precio</td>
            <td class="tacesta">Cantidad</td>
        </tr>
        <?php
        $total=0;
        $cont=0;
        while ($row=mysqli_fetch_row($result)){
            $multi=$row[5]*$row[3];
            $total=$total+$multi;
        ?>
        <tr>
            <td><input type="text" name="nomCesta" size="15" value="<?php echo($row[4]);?>" readonly></td>
            <td><input type="text" name="precioCesta" size="5" value="<?php echo($row[5]);?>" readonly></td>
            <td><input type="text" name="cantcesta" size="5" value="<?php echo($row[3]);?>" onChange="javascript:modificar_cantidad('<?php echo($row[2]);?>','cestaform','<?php echo($cont);?>');"></td>
        </tr>
        <?php 
            $cont++;
            } 
        ?>
        <tr><td><p> </p></td></tr>
        <tr>
            <input type="hidden" name="contador" value="<?php echo $cont; ?>">
            <input type="hidden" name="id_usuario" value="<?php echo $idUsu; ?>">
            <input type="hidden" name="modcant">
            <input type="hidden" name="prodId">
            <input type="hidden" name="nuevaCant">
            <td class="tocesta">Total: </td>
            <td><input type="text" name="totalCesta" size="5" value="<?php echo $total;?>" readonly></td>
        </tr>
        <tr><td><p> </p></td></tr>
        <tr>
            <td><a onclick="javascript:enviar_sentencia('cestaform');">Modificar Producto</a></td>
            <td><a href="./pedido.php?id_usuario=<?php echo $idUsu; ?>&preTotal=<?php echo $total;?>" target="cuerpo">Tramitar Pedido</a></td>
        </tr>
        <?php } ?>
    </table>
    </form>
</body>
</html>