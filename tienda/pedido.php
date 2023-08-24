<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="../nuevo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/conexion.php");
        include ("../librerias/funciones.php");
        $idUsu=$_GET["id_usuario"];
        $total=$_GET["preTotal"];
        $sentencia="select * from cesta where idUsuario like '$idUsu'";
        $result=mysqli_query($conexion,$sentencia);
        
        $contenido="";
        while ($row=mysqli_fetch_row($result)){
            $contenido="$contenido$row[4]/$row[3]/$row[5]/";
            $seleCant="select cantidad from productos where idProducto like '$row[2]'";
            $resultCant=mysqli_query($conexion,$seleCant);
            $row2=mysqli_fetch_row($resultCant);
            $resta=$row2[0]-$row[3];
            $sentActu="update productos set cantidad = '$resta' where idProducto like '$row[2]'";
            mysqli_query($conexion,$sentActu);
        }
        
        $sentIns="insert into pedidos(idUsuario,Contenido,Total) value ('$idUsu','$contenido','$total')";
        mysqli_query($conexion,$sentIns);
        $sentElim="delete from cesta where idUsuario like '$idUsu'";
        mysqli_query($conexion,$sentElim);
    ?>
</head>
<body class="bodycesta">
        <table>
        <h2>Pedido hecho correctamente</h2>
        <tr>
            <td>Volver a la cesta</td>
             <td><a href="./cesta.php?id_usuario=<?php echo $idUsu; ?>" target="cuerpo"><img src="../img/restaurar.png" height='30' width='30'></a></td>
        </tr>
        <tr>
             <td>Volver a la tienda</td>
             <td><a href="./teclados.php?id_usuario=<?php echo $idUsu; ?>" target="cuerpo"><img src="../img/restaurar.png" height='30' width='30'></a></td>
        </tr>
        <tr>
             <td>Volver a la pagina principal</td>
             <td><a href="../cuerpo.php?id_usuario=<?php echo $idUsu; ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a></td>
        </tr>
    </table>
</body>
</html>