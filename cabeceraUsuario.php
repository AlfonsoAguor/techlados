<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
            <?php
            $usuario=$_GET["usu"];
            $id=$_GET["id_usuario"];
            ?>
</head>
<body id="cuerpo">
      <table>
		<tr>
			<td rowspan='3' id="logo"><img src='./img/logo.jpg' height='50' width='60' alt='Tech-Lados'/></td>

			<td rowspan='3' id="titulo"><img src='./img/cabecera.png' height='100' width='500' alt='Tech-Lados'/></td>
		</tr>
		<tr>
            <td id="registro">Hola <?php echo $usuario; ?>!!! Bienvenido a Tech-Lados</td>
		</tr>
		<tr>
		    <td class="pedido"><a href="pedidos.php?id_usuario=<?php echo $id; ?>" target="cuerpo">Ver Pedido</a></td>
		</tr>
	  </table>
</body>
</html>