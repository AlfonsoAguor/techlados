<!DOCTYPE html>
<html>
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
<body id="menu">
     <table>
         <tr>
             <td><a id="menu" href="./menuUsuario.php?id_usuario=<?php echo($id); ?>" target="menu">Menu Usuario</a></td>
			 <td><a id="menu" href="./menuProducto.php" target="menu">Menu Producto</a></td>
         </tr>
     </table>
</body>
</html>