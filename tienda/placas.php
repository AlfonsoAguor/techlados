<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
       <link rel="stylesheet" href="../nuevo.css" type="text/css">
        <?php
        include ("../librerias/conexion.php");
        $idUsu=$_GET["id_usuario"];
        if (isset($_GET["idProducto"])) {
            $idPro=$_GET["idProducto"];
            $sentPro="select * from productos where idProducto like '$idPro'";
            $resultPro=mysqli_query($conexion,$sentPro);
            $row=mysqli_fetch_row($resultPro);
            $insertPro="insert into cesta(idUsuario,idProducto,Cantidad,Nombre,Precio) value ('$idUsu','$idPro','1','$row[1]','$row[3]')";
            mysqli_query($conexion,$insertPro);
            
        }
    
        $sentencia="select * from productos where tipo like 'Placa'";
        $result=mysqli_query($conexion,$sentencia);
        ?>
</head>
<body class="bodytienda">
    <img src="../img/Tienda/placa60.jpg" height='200' width='240'>
   <?php $sentNuevo="select * from productos where nombre like 'DZ60 CNC' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="placas.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br> 

    <img src="../img/Tienda/placa80.png" height='120' width='300'>
   <?php $sentNuevo="select * from productos where nombre like 'KBD8X MKII' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="placas.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br> 
   
    <img src="../img/Tienda/placa20.png" height='150' width='150'>
   <?php $sentNuevo="select * from productos where nombre like 'KBDPAD MKII' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="placas.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br> 
   
    <img src="../img/Tienda/placa70.png" height='120' width='300'>
   <?php $sentNuevo="select * from productos where nombre like 'KBD75 REV 2.0 PCB' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="placas.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br>
   
   <a href="../cuerpo.php?id_usuario=<?php echo($idUsu); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
 
</body>
</html>