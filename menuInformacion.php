<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
</head>
<body id="menuia">
     <table>
         <tr>
             <td><a id="menuia" href="info/infoGeneral.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Informacion General</a></td>
			 <td><a id="menuia" href="info/partes.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Partes</a></td>
			 <td><a id="menuia" href="info/switch.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Switches</a></td>
			 <td><a id="menuia" href="info/montaje.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Montaje</a></td>
         </tr>
     </table>
</body>
</html>