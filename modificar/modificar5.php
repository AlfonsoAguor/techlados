 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="../estilo.css" type="text/css">
     <meta charset="UTF-8">
     <?php include ("../librerias/conexion.php");
        $sent=$_POST["sent"];
        mysqli_query($conexion,$sent);
     ?>
 </head>
 <body id="bodyForm">
     <h1>Se han modificado los datos correctamente</h1><br>
     <a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a>
 </body>
 </html>