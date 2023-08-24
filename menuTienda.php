<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">

    <?php
        $id=$_GET["id_usuario"];
    ?>
</head>
<body id="menuTI">
     <table>
         <tr>
             <td><a id="menuTA" href="./tienda/teclados.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Teclados</a></td>
			 <td><a id="menuTA" href="./tienda/switch.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Switch</a></td>
			 <td><a id="menuTA" href="./tienda/placas.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Placas</a></td>
			 <td><a id="menuTA" href="./tienda/pcb.php?id_usuario=<?php echo($id); ?>" target="cuerpo">PCB</a></td>
			 <td><a id="menuTA" href="./tienda/keycaps.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Keycaps</a></td>
			 <td><a id="menuTA" href="./tienda/carcasa.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Carcasa</a></td>
            <td><a id="menuTA" href="./tienda/otros.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Otros</a></td>
            <td><a id="menuTA" href="./tienda/cesta.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Cesta</a></td>
         </tr>
     </table>
</body>
</html>