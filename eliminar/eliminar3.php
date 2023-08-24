<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
        <?php
        include ("../librerias/conexion.php");
        $id_u=$_GET["id_usuario"];
        $id=$_GET["eliminado"];
        $sentencia_eliminar="delete from usuarios where id_usuario=$id_u";
        $sentencia="select * from usuarios where id_Usuario=$id_u";
        $result=mysqli_query($conexion,$sentencia);
        $row=mysqli_fetch_row($result);
    $contenido=$row[1]."/".$row[2]."/".$row[3]."/".$row[4]."/".$row[5]."/".$row[6]."/".$row[7]."/".$row[8]."/".$row[9]."/".$row[10]."/".$row[11]."/".$row[12]."/".$row[13]."/".$row[14]."/".$row[15]."/".$row[16]."/".$row[17]."/".$row[18];
    $sentencia_insertar="insert into papelera(tabla,contenido,id_Usuario) values('usuarios','$contenido','$id')";
    ?>
    <?php include ("../librerias/funciones.php") ?>
</head>
<body id="bodyForm">
    <table id="tabla">
          <tr>
              <td> Nombre: <?php echo($row[1]); ?></td>
          </tr>  
          <tr>
              <td>Primer apellido: <?php echo($row[2]); ?></td>
              <td>Segundo apellido: <?php echo($row[3]); ?></td>
          </tr>
          <tr>
              <td>Login: <?php echo($row[4]); ?></td>
              <td>Contraseña: ****** </td>
          </tr>
          <tr>
              <td>Provincia: <?php echo($row[9]); ?></td>
              <td>Localidad: <?php echo($row[10]); ?></td>
              <td>CP: <?php echo($row[11]); ?></td>
          </tr> 
          <tr>
              <td>Direccion: <?php echo($row[12]); ?></td>
              <td>Nº: <?php echo($row[13]); ?></td>
              <td>Piso: <?php echo($row[14]); ?></td>
          </tr>
          <tr>
              <td><?php echo($row[7]); ?>: <?php echo($row[8]); ?></td>
          </tr>
          <tr>
              <td>Telefono 1: <?php echo($row[17]); ?></td>
              <td>Telefono 2: <?php echo($row[18]); ?></td>
          </tr>
          <tr>
              <td>Email: <?php echo($row[16]); ?></td>
          </tr>
          <tr>
              <td>Fecha Nacimento: <?php echo($row[15]); ?></td>
          </tr>
          <form action="eliminar4.php" method="post" name="eliminar">
        <tr>
           <td>¿quieres eliminar?</td>
           <td><input type="hidden" name="sen_ins" value="<?php echo($sentencia_insertar); ?>">
               <input type="hidden" name="sen_eli" value="<?php echo($sentencia_eliminar); ?>"></td>
            <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('eliminar');"></td>
            <td><a href="../cuerpo.php"><img src="../img/cancelar.png" height='50' width='50'></a></td>
        </tr>
        </form>
        </table>
</body>
</html>