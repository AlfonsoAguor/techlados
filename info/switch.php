<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilo.css">
        <?php
            $id=$_GET["id_usuario"];
        ?>
</head>
<body class="sw">
    <h1>Switches</h1>
    <p>los teclados mecánicos hacen uso de mecanismos individuales soldados a una placa electrónica, actuando exactamente como un interruptor: al presionar la tecla, hay contacto entre las placas metálicas del interruptor, permitiendo el paso de la corriente e “informando” de que se ha presionado la tecla.</p>
    <p>Algunas marcas de switches son: kailh switches, ttc switch, gateron switches.</p>
    <p>Pero los mas comunes son los Cherry MX, que son fabricados por una compañía alemana.</p>
    <p><b>Switches RED: </b>es completamente lineal, con una fuerza de actuación media. Su pulsación es bastante ligera y, de los 4 grandes, es el que más se siente como una “pluma”.</p>
    <img src="../img/Red.gif" alt="red"><br><br>
    <p><b>Switches BLUE: </b>se trata del que, para la mayoría de personas, caracteriza a los teclados mecánicos, ya que es clicky, es decir, tiene ese ruido de click que todos asocian a un teclado mecánico (y que en realidad solo es de este tipo de switches). Y sí, es bastante ruidoso. “Clicky” también implica que es táctil, y su fuerza de actuación es media o media-alta.</p>
    <img src="../img/Blue.gif" alt="blue"><br><br>
    <p><b>Switches BROWN: </b>son táctiles, bastante equilibrados en cuanto a fuerza de actuación y recorrido, y se podrían situar entre los Red y los Blue.</p>
    <img src="../img/Brown.gif" alt="brown"><br><br>
    <p><b>Switches BLACK: </b>fueron el primero switch de Cherry, conocidos por ser bastante duros. Son lineales.</p>
    <img src="../img/Black.gif" alt="black"><br><br><br>
    
    <?php if ($id==0) { ?>
    <a href="../informacion.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } else { ?>
    <a href="../cuerpo.php?id_usuario=<?php echo($id); ?>" target="cuerpo"><img src="../img/casa.png" height='30' width='30'></a>
    <?php } ?>
</body>
</html>