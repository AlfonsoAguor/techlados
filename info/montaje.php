<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
    <meta charset="UTF-8">
</head>
<body class="mon">
   <h1>¿Como montar tu propio teclado?</h1>
   
    <a href="https://www.youtube.com/watch?v=PsFnxyEfZi8&t=1407s&ab_channel=Hardware360%C2%BA"><img src="../img/montar.jpg" alt="Montar Teclado" height="504" width="896"></a>
    <h3>Como montar tu propio Teclado Mecánico por Piezas - Guía / Tutorial</h3><br><br><br>
    <a href="https://www.youtube.com/watch?v=N1dfd9278ok&ab_channel=NateGentile"><img src="../img/montajeNate.jpg" alt="Montar Teclado Nate" height="504" width="896"></a>
    <h3>Montando mi Teclado desde CERO | Teclado mecánico custom</h3><br><br><br>
    <a href="https://www.youtube.com/watch?v=ytPUe3NtS38&t=1341s&ab_channel=NateGentile"><img src="../img/montajeSilencioso.jpg" alt="Montar Teclado Silencioso" height="504" width="896"></a>
    <h3>¡Montando el TECLADO más SILENCIOSO!</h3><br><br><br>
    
    <?php if ($id==0) { ?>
    <a href="../informacion.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } else { ?>
    <a href="../cuerpo.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } ?>
</body>
</html>