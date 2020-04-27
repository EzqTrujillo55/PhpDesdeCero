<?php
    echo '<h4>Estructuras repetitivas</h4>';
    echo '<h6>do while</h6>';
    $valor = 0; 
    do{
        echo $valor . '</br>'; 
    }while($valor==1); 
    echo 'Fin del do while </br>';

    echo '<h4>For</h4>';
    for($i=0; $i<=5; $i++){
        echo $i . '</br>';
    }

    //TIPOS DE DATO
    $boletos = 4; 
    $anuncio = "Bienvenidos";
    $semaforo = true;
    $precio = 2.5;
    $instrumentos = ["guitarra", "bateria", "bajo", "teclado"];
              //         0          1         2        3
    echo $instrumentos[0] . '</br>';
    echo $instrumentos[2] . '</br>';

    echo '<h4>For</h4>';
    $dimension = 4;
    for($i=0; $i<$dimension; $i++){
        echo $instrumentos[$i] . '</br>'; 
    }

    echo '<h4>Foreach</h4>';
    foreach($instrumentos as $valor){
        echo 'Instrumento: ' . $valor . '</br>'; 
    }

    echo '<h6>FIN DEL PHP</h6>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezclando PHP con HTML B)</title>
</head>
<body>
    <h1> <?php echo $anuncio;?></h1>
    <?php 
        foreach($instrumentos as $valor): ?>
        <p>
            <?php echo $valor ?>
        </p>
    <?php endforeach ?>

</body>
</html>