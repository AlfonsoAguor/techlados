<!DOCTYPE html>
<html id="in">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
            <?php
        if (!isset($_GET["id_usuario"])) {
            $id=0;
        } else {
            $id=$_GET["id_usuario"];
        }
        ?>
</head>
<body id="informacion">
    <h1><a href="menuInformacion.php?id_usuario=<?php echo($id); ?>" target="menu">INFORMACION</a></h1>
</body>
</html>