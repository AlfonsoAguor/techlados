<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../estilo.css" type="text/css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
    <meta charset="UTF-8">
</head>
<body class="info">
    <h1>Informacion General</h1>
    <p>Los teclados pueden ser muy versatiles, según nuestras necesidades. Y han ido evolucionando en cuanto tamaño y cantidad de teclas que requerimos. <br>
    Te voy a presentar algunos de los teclados que nos podemos encontrar:</p>
    
    <h2>Teclado Numerico</h2>
    <p>Es el teclado con las dimensiones mas reducidas, ya que unicamente contiene los numeros y algunas funciones mas.</p>
    <img src="../img/numerico.png" height='170' width='130' id="imgnumerico" alt="Numerico"> <br><br><br><br>
    
    <h2>Teclado 60%</h2>
    <p>Es un teclado pequeño, compacto y facil de transportar. Se le llama asi porque es el 60% del tamaño de un teclado normal conteniendo la parte mas importate del teclado.</p>
    <img src="../img/60.png" height='100' width='250' id="imgnumerico" alt="Numerico"><br><br><br><br>
    
    <h2>Teclado 80%</h2>
    <p>Al igual que el anterior a este se le llama asi porque contiene un 80% del tamaño de un teclado, contiene las mismas teclas que el anterior pero se le añade las teclas de dirección y algunas mas funcionalidades</p>
    <img src="../img/80.png" height='100' width='250' id="imgnumerico" alt="Numerico"><br><br><br><br>
    
    <h2>Teclado 104</h2>
    <p>Por ultimo el teclado mas común, que se le añade el teclado numerico.</p>
    <img src="../img/104.png" height='100' width='250' id="imgnumerico" alt="Numerico"><br><br><br>
    
    <?php if ($id==0) { ?>
    <a href="../informacion.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } else { ?>
    <a href="../cuerpo.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } ?>
</body>
</html>