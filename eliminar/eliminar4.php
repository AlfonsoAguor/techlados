 <!DOCTYPE html>
 <html>
 <head>
       <link rel="stylesheet" href="../estilo.css" type="text/css">
     <meta charset="UTF-8">
     <?php include ("../librerias/conexion.php");
        $senti=$_POST["sen_ins"];
        $sente=$_POST["sen_eli"];
        mysqli_query($conexion,$senti);
        mysqli_query($conexion,$sente);
     ?>
 </head>
 <body id="bodyForm">
     <h1>Se han eliminado los datos correctamente</h1>
     <a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a>
 </body>
 </html>