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
    
        $sentencia="select * from productos where tipo like 'Teclado'";
        $result=mysqli_query($conexion,$sentencia);
        ?>
</head>
<body class="bodytienda">  
   
    <img src="../img/Tienda/Razer_BlackWidow.jpg" height='100' width='250'>
   <?php $sentNuevo="select * from productos where nombre like ' Razer BlackWidow' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="teclados.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br>  
   
   <img src="../img/Tienda/Corsair_K63.jpg" height='100' width='250'>
      <?php $sentNuevo="select * from productos where nombre like 'Corsair K63' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="teclados.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br>  
   
    <img src="../img/Tienda/Motospeed_K24.jpg" height='170' width='130'>
         <?php $sentNuevo="select * from productos where nombre like 'Motospeed K24' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p>
   <a href="teclados.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br> 
   
    <img src="../img/Tienda/Newskill_Suiko.jpg" height='100' width='250'>
         <?php $sentNuevo="select * from productos where nombre like 'Newskill Suiko ' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?> 
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> € €</p>
   <a href="teclados.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br><br><br> 
   
   <img src="../img/Tienda/Mars Gaming_MKR.jpg" height='100' width='250'>
         <?php $sentNuevo="select * from productos where nombre like 'Mars Gaming MKR' ";
         $result=mysqli_query($conexion,$sentNuevo);
        $row=mysqli_fetch_row($result);
    ?>
    <p class="titPro"><?php echo($row[1]); ?></p>
    <p class="infoPro"><?php echo($row[2]); ?>, <b>Stock: <?php echo($row[7]); ?></b></p>
   <p class="precioPro"><?php echo($row[3]); ?> €</p> 
   <a href="teclados.php?id_usuario=<?php echo($idUsu); ?>&idProducto=<?php echo($row[0]); ?>"><p>Añadir</p></a><br><br>
   
   <a href="../cuerpo.php?id_usuario=<?php echo($idUsu); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
   
</body>
</html>