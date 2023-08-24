<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
    <?php
        $nomb=$_POST['nombre'];
        $ape1=$_POST['ap1'];
        $ape2=$_POST['ap2'];
        $log=$_POST['login'];
        $con=$_POST['contra'];
        $prov=$_POST['provincia'];
        $loca=$_POST['Localidad'];
        $cp=$_POST['cp'];
        $dir=$_POST['direccion'];
        $n=$_POST['numeroDireccion'];
        $piso=$_POST['Piso'];
        $docuu=$_POST['docu'];
            if ($docuu==0) {
                $docuT="DNI";
            } else {
                $docuT="NIE";
            }
        $numDocu=$_POST['docuNumero'];
        $tl1=$_POST['nmovil'];
        $tl2=$_POST['nfijo'];
        $email=$_POST['correo'];
        $fec=$_POST['fecha'];
        
        $sentencia="insert into usuarios(Nombre,Apellido1,Apellido2,Login,Contrasena,TipoUsu,TipoDocu,Documento,Provincia,Localidad,CP,Direccion,NumDireccion,Piso,fecha,email,Telefono1,Telefono2) value ('$nomb','$ape1','$ape2','$log','$con','U','$docuT','$numDocu','$prov','$loca','$cp','$dir','$n','$piso','$fec','$email','$tl1','$tl2')";
    ?>
    <?php include ("../librerias/funciones.php") ?>
    
</head>
<body id="bodyForm">
       <form action="insertar3.php" method="post" name="insertar2" id="formu">
       <input type="hidden" name="sent" value="<?php echo($sentencia); ?>" />
        <table id="tabla">
          <tr>
              <td> Nombre: <?php echo($nomb); ?></td>
          </tr>  
          <tr>
              <td>Primer apellido: <?php echo($ape1); ?></td>
              <td>Segundo apellido: <?php echo($ape2); ?></td>
          </tr>
          <tr>
              <td>Login: <?php echo($log); ?></td>
              <td>Contraseña: <?php echo($con); ?></td>
          </tr>
          <tr>
              <td>Provincia: <?php echo($prov); ?></td>
              <td>Localidad: <?php echo($loca); ?></td>
              <td>CP: <?php echo($cp); ?></td>
          </tr> 
          <tr>
              <td>Direccion: <?php echo($dir); ?></td>
              <td>Nº: <?php echo($n); ?></td>
              <td>Piso: <?php echo($piso); ?></td>
          </tr>
          <tr>
              <td><?php echo($docuT); ?>: <?php echo($numDocu); ?></td>
          </tr>
          <tr>
              <td>Telefono 1: <?php echo($tl1); ?></td>
              <td>Telefono 2: <?php echo($tl2); ?></td>
          </tr>
          <tr>
              <td>Email: <?php echo($email); ?></td>
          </tr>
          <tr>
              <td>Fecha Nacimento: <?php echo($fec); ?></td>
          </tr>
        <tr>
            <td><img src="../img/ok2.jpg" alt="ok" height='50' width='50' onclick="javascript:enviar_sentencia('insertar2');"></td>
        </tr>
        </table>
        </form>
</body>
</html>