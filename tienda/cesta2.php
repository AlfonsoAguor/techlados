<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../nuevo.css" type="text/css">
    <?php
        include ("../librerias/conexion.php");
        include ("../librerias/funciones.php");
    ?>
</head>
<body class="bodycesta">
   
    <?php
            $idUsu=$_POST["id_usuario"];
            if ($_POST['modcant']!="") {
                $sentModCant=$_POST["modcant"];
                $proId=$_POST["prodId"];
                $newCant=$_POST["nuevaCant"];
                $seleCant="select cantidad from productos where idProducto like '$proId'";
                $resultado=mysqli_query($conexion,$seleCant);
                $row=mysqli_fetch_row($resultado);
                if ($row[0]<$newCant) { ?>
    <table>
       <h2>No hay stock suficiente, max <?php echo($row[0]); ?></h2>
        <tr>
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
               
        <?php } else {
                    mysqli_query($conexion,$sentModCant); 
        ?>
    <h1>Producto modificado</h1> 
    <table>
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
         <?php    
               } 
            } else { ?>
    <h2>No has introducido ninguna cantidad</h2> 
    <table>
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
        <?php
            }   
        
        ?>
</body>
</html>