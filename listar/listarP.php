<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/funciones.php");
        include ("../librerias/conexion.php");
        $Promax=5;
        //$primera=0;
        if ((!isset($_GET["id_Adelante"]))&&(!isset($_GET["id_Atras"])) ){
            $sentencia="select * from productos";
            //$primera=1;
        } else {
            if (!isset($_GET["id_Adelante"])){ 
                $id=$_GET["id_Atras"];
                $contPro=$_GET["minPro"];
                $sentencia="select * from productos where idProducto<'$id'";
            } else {
                $contPro=$_GET["masPro"];
                $id=$_GET["id_Adelante"];
                $sentencia="select * from productos where idProducto>'$id'";
            }
           
         }
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);

        $id_atras=$row[0];
    ?>
</head>
<body id="bodyForm">
    <form name="listar" method='post' >
        <table border="0px">
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
                $cont=1;
            
                $result=mysqli_query($conexion,$sentencia);
                while ($row=mysqli_fetch_row($result)) {
                    if ($cont<=$Promax) { 
                        if ((!isset($_GET["id_Adelante"]))&&(!isset($_GET["id_Atras"])) ){
                            $contPro=1;
                        } else {
                            if (!isset($_GET["id_Adelante"])){ 
                                $contPro--;
                            } else {
                                $contPro++;
                            }

                         }
                        $cont++;
                                         
             ?>
          <tr>
              <td><?php echo($row[1]); ?></td>
              <td><?php echo($row[2]); ?></td>
              <td><?php echo($row[3]); ?></td>
              <td><?php echo($row[4]); ?></td>
              <td><?php echo($row[5]); ?></td>
              <td><?php echo($row[6]); ?></td>
              <td><?php echo($row[7]); ?></td>
          </tr>
          <?php  
                 $id_adelante=$row[0];      
                    }
                } 
            ?>
        </table>

        <?php if ($id_atras>=6) {  ?>
        <a href="listarP.php?id_Atras=<?php echo($id_atras);?>&minPro=<?php echo($contPro);?>" target="_self"><img src="../img/izquierda.png" height='30' width='30' alt='modificarimg'></a>
        <?php } ?>
        <?php 
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
        if ($contPro<mysqli_fetch_row($result)) {  ?>
        <a href="listarP.php?id_Adelante=<?php echo($id_adelante);?>&masPro=<?php echo($contPro);?>" target="_self"><img src="../img/derecha.png" height='30' width='30' alt='modificarimg'></a>
        <?php } ?>
    </form>
</body>
</html>