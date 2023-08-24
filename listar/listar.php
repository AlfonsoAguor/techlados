<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/funciones.php");
        include ("../librerias/conexion.php");
        $usumax=5;
        //$primera=0;
        if ((!isset($_GET["id_Adelante"]))&&(!isset($_GET["id_Atras"])) ){
            $sentencia="select * from usuarios";
            //$primera=1;
        } else {
            if (!isset($_GET["id_Adelante"])){ 
                $id=$_GET["id_Atras"];
                $contUsu=$_GET["minUsu"];
                $sentencia="select * from usuarios where id_Usuario<'$id'";
            } else {
                $contUsu=$_GET["masUsu"];
                $id=$_GET["id_Adelante"];
                $sentencia="select * from usuarios where id_Usuario>'$id'";
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
              <td>Primer apellido: </td>
              <td>Segundo apellido: </td>
              <td>Login: </td>
              <td>Contraseña: </td>
              <td>Provincia: </td>
              <td>Localidad: </td>
              <td>CP: </td>
              <td>Direccion: </td>
              <td>Nº: </td>
              <td>Piso: </td>
              <td>DNI/NIE: </td>
              <td>Telefono 1: </td>
              <td>Telefono 2: </td>
              <td>Email: </td>
              <td>Fecha Nacimento: </td>
          </tr>  
          <?php
                $cont=1;
            
                $result=mysqli_query($conexion,$sentencia);
                while ($row=mysqli_fetch_row($result)) {
                    if ($cont<=$usumax) { 
                        if ((!isset($_GET["id_Adelante"]))&&(!isset($_GET["id_Atras"])) ){
                            $contUsu=1;
                        } else {
                            if (!isset($_GET["id_Adelante"])){ 
                                $contUsu--;
                            } else {
                                $contUsu++;
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
              <td><?php echo($row[9]); ?></td>
              <td><?php echo($row[10]); ?></td>
              <td><?php echo($row[11]); ?></td>
              <td><?php echo($row[12]); ?></td>
              <td><?php echo($row[13]); ?></td>
              <td><?php echo($row[14]); ?></td>
              <td><?php echo($row[8]); ?></td>
              <td><?php echo($row[17]); ?></td>
              <td><?php echo($row[18]); ?></td>
              <td><?php echo($row[16]); ?></td>
              <td><?php echo($row[15]); ?></td>
          </tr>
          <?php  
                 $id_adelante=$row[0];      
                    }
                } 
            ?>
        </table>

        <?php if ($id_atras>=6) {  ?>
        <a href="listar.php?id_Atras=<?php echo($id_atras);?>&minUsu=<?php echo($contUsu);?>" target="_self"><img src="../img/izquierda.png" height='30' width='30' alt='modificarimg'></a>
        <?php } ?>
        <?php 
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
        if ($contUsu<mysqli_fetch_row($result)) {  ?>
        <a href="listar.php?id_Adelante=<?php echo($id_adelante);?>&masUsu=<?php echo($contUsu);?>" target="_self"><img src="../img/derecha.png" height='30' width='30' alt='modificarimg'></a>
        <?php } ?>
    </form>
</body>
</html>