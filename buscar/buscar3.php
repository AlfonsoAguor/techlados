<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        include ("../librerias/conexion.php");
        $id_u=$_GET["id_usuario"];
        $sentencia="select * from usuarios where id_Usuario=$id_u";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    ?>
</head>
<body id="bodyForm">
    <form name="buscar" method='post' id="formu">
        <table id="tabla">
          <tr>
              <td>Nombre: </td>
              <td><?php echo($row[1]); ?></td>
          </tr>  
          <tr>
              <td>Primer apellido: </td>
              <td><?php echo($row[2]); ?></td>
              <td>Segundo apellido: </td>
              <td><?php echo($row[3]); ?></td>
          </tr>
          <tr>
              <td>Login: </td>
              <td><?php echo($row[4]); ?></td>
              <td>Contraseña: </td>
              <td><?php echo($row[5]); ?></td>
          </tr>
          <tr>
              <td>Provincia: </td>
              <td><?php echo($row[9]); ?></td>
              <td>Localidad: </td>
              <td><?php echo($row[10]); ?></td>
              <td>CP: </td>
              <td><?php echo($row[11]); ?></td>
          </tr> 
          <tr>
              <td>Direccion: </td>
              <td><?php echo($row[12]); ?></td>
              <td>Nº: </td>
              <td><?php echo($row[13]); ?></td>
              <td>Piso: </td>
              <td><?php echo($row[14]); ?></td>
          </tr>
          <tr>
              <td>DNI/NIE</td>
              <td><?php echo($row[8]); ?></td>
          </tr>
          <tr>
              <td>Telefono 1: </td>
              <td><?php echo($row[17]); ?></td>
              <td>Telefono 2: </td>
              <td><?php echo($row[18]); ?></td>
          </tr>
          <tr>
              <td>Email: </td>
              <td><?php echo($row[16]); ?></td>
          </tr>
          <tr>
              <td>Fecha Nacimento: </td>
              <td><?php echo($row[15]); ?></td>
          </tr>
          <tr>
              <td><a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a></td>
          </tr>
        </table>
    </form>
</body>
</html>