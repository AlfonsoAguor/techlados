<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <?php include ("./librerias/funciones.php") ?>
</head>
<body id="cuerpo" onLoad="javascript:ocultarCabecera();">
      <table>
      <form action="index.php" method='post' name="usuForm" target="_top">
		<tr>
			<td rowspan='3' id="logo"><img src='./img/logo.jpg' height='50' width='60' alt='Tech-Lados'/></td>

			<td rowspan='3' id="titulo"><img src='./img/cabecera.png' height='100' width='500' alt='Tech-Lados'/></td>
			<td id="registro">Usuario:</td>
			<td><input type='text' size='15' name='usuario'/><label id="aUsu"> <img src="./img/advertencia.png" height='15' width='15'></label></td>
			
		</tr>
		<tr>
			<td id="registro">Contraseña:</td>
			<td><input type='password' size='15' name='pass'/><label id="aContra"> <img src="./img/advertencia.png" height='15' width='15'></label></td>
		</tr>
		<tr>
			<td id="registro">¿Olvidaste la contraseña?</td>
			<td><img src='./img/ok2.jpg' height='30' width='30' alt='ok' onclick="javascript:enviar_usu('usuForm');"/></td>
		</tr>
		</form>
	  </table>
</body>
</html>