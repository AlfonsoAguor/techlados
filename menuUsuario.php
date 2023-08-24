<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css" type="text/css">
        <?php
        $id=$_GET["id_usuario"];
    ?>
</head>
<body id="menuFor">
     <table>
         <tr>
             <td><a id="menuFor" href="./insertar/insertar.php" target="cuerpo">Insertar</a></td>
			 <td><a id="menuFor" href="./modificar/modificar.php" target="cuerpo">Modificar</a></td>
			 <td><a id="menuFor"href="./eliminar/eliminar.php?id_usuario=<?php echo($id); ?>" target="cuerpo">Eliminar</a></td>
			 <td><a id="menuFor" href="./buscar/buscar.php" target="cuerpo">Buscar</a></td>
			 <td><a id="menuFor" href="./listar/listar.php" target="cuerpo">Listar</a></td>
			 <td><a id="menuFor" href="./restaurar/restaurar.php" target="cuerpo">Restaurar</a></td>
         </tr>
     </table>
</body>
</html>