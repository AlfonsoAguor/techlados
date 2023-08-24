<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="../estilo.css" type="text/css">
    <meta charset="UTF-8">
     <?php include ("../librerias/conexion.php");
        $res=$_POST["rest"];
        $res2=$_POST["rest2"];
        mysqli_query($conexion,$res);
        mysqli_query($conexion,$res2);
     ?>
</head>
<body id="bodyForm">
<h1>Se ha restaurado correctamente</h1>
<a href="../menu.php" target="menu"><img src="../img/casa.png" height='30' width='30'></a>
</body>
</html>