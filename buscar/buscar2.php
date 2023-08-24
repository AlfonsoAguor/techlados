<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/conexion.php");
        $nomb=$_POST['nombre'];
        $numDocu=$_POST['docuNumero'];
    
        if (($numDocu=='') && ($nomb=='')) {
            $sentencia="select * from usuarios";
            $sentencia2="select * from usuarios";
        } else {
            if (($numDocu!='') && ($nomb=='')) {
                $sentencia="select * from usuarios where Documento like '%$numDocu%'";
                $sentencia2="select count(Nombre) from usuarios where Documento like '%$numDocu%'";
            } else {
                if (($numDocu=='') && ($nomb!='')) {
                    $sentencia="select * from usuarios where Nombre like '%$nomb%'";
                    $sentencia2="select count(Nombre) from usuarios where Nombre like '%$nomb%'";
                } else {
                    $sentencia="select * from usuarios where Nombre like '%$nomb%' or Documento like '%$numDocu%'";
                    $sentencia2="select count(Nombre) from usuarios where Nombre like '%$nomb%' or Documento like '%$numDocu%'";
                }
            }
        }
    
        $result2=mysqli_query($conexion,$sentencia2);
        $row2=mysqli_fetch_row($result2);
        $result=mysqli_query($conexion,$sentencia);
    ?>
</head>
<body id="bodyForm">
        <table border="1px" id="tabla">
          
          <?php
                if ($row2[0]==0) { 
            ?>

              <h2>No hay datos</h2><br>
              <a href="../cuerpo.php"><img src="../img/casa.png" height='30' width='30'></a>
        
              <?php } else {
                    ?>
                    <tr>
              <td>Nombre: </td>
              <td>Primer apellido: </td>
              <td>Login: </td>
              <td>DNI/NIE: </td>
              <td>Provincia: </td>
              <td>Localidad: </td>
              <td>Direccion: </td>
              <td>Email: </td>
              <td>Telefono: </td>
             
          </tr>  
                   <?php
                    while ($row=mysqli_fetch_row($result)){
                 ?>  
          <tr>
              <td><?php echo($row[1]); ?></td>
              <td><?php echo($row[2]); ?></td>
              <td><?php echo($row[4]); ?></td>
              <td><?php echo($row[8]); ?> </td>
              <td><?php echo($row[9]); ?></td>
              <td><?php echo($row[10]); ?></td>
              <td><?php echo($row[12]); ?></td>
              <td><?php echo($row[16]); ?></td>
              <td><?php echo($row[17]); ?></td>
              
              <td><a href="buscar3.php?id_usuario=<?php echo ($row[0]); ?>"><img src="../img/buscar.png"height='30' width='30' alt='buscarimg'></a></td>
          </tr>
          <?php }
                    }//fin while ?>
        </table>
</body>
</html>