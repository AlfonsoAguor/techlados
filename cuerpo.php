<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
</head>
<frameset rows="50%,*" border="0">
    <frame src="informacion.php?id_usuario=<?php echo($id); ?>" scrolling="no" resize="no" name="info">
      <frame src="tienda.php?id_usuario=<?php echo($id); ?>" scrolling="no" resize="no" name="tien">
</frameset>
</html>