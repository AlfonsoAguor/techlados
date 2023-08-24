<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilo.css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
</head>
<body class="partes">
    <h1>Información sobre las distintas partes de los teclados</h1>
    <h2>PCB</h2>
    <p>Es una pieza fundamental se trata de un circuito impreso en una placa que cumple la función de determinar la distribución del teclado y ciertas funciones Existen dos formatos de teclado principales: con teclado numérico y sin teclado numérico.  Podemos encontrar una variedad de PCBs enorme, con 60 teclas o hasta 104.</p><br><br>
    
    <h2>Placa</h2>
    <p>Aunque no es obligatoria, para nosotros es fundamental porque proporciona estabilidad, durabilidad y robustez. Principalmente, encontramos 3 materiales: aluminio, acero y plástico.</p><br><br>
    
    <h2>Carcasa</h2>
    <p>Como hemos dicho, debe ser compatible con el PCB. Por este motivo, veréis que se venden muchas con la PCB incluida, así nos quitamos las penas y vamos sobre seguro.</p><br><br>
    
    <h2>Teclas/Keycaps</h2>
    <p>Son las piezas que van sobre los switch y que nos permite escribir, generalmente son de plastico, aunque puedes encontrarlas de distintos materiales y formas distintas</p><br><br>
    
    
    <h2>Estabilizadores</h2>
    <p>Son las pestañas que veréis a los costados de cada switch, los cuales deben ser instalados con cuidado. Existen dos tipos de estabilizadores:</p>
    <p>Costar: Funcionan con un estabilizador en forma de barra encima de la placa: Suenan un poco más, su instalación es más sencilla, no funcionan con todas las teclas.
    </p>
    <p>Cherry: Funcionan con un estabilizador debajo de la placa, su instalación es más compleja si tenemos placa, suenan menos.
</p><br><br><br>

    <?php if ($id==0) { ?>
    <a href="../informacion.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } else { ?>
    <a href="../cuerpo.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } ?>
</body>
</html>