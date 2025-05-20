<?php

$laberinto = array(
    array("#", "#", "#", "#", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", ".", "#", ".", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", "#", "#", "#", "#")
);

$contador = 0;

foreach ($laberinto as $fila) {
    foreach ($fila as $celda) {
        if ($celda === ".") {
            $contador++;
        }
    }
}

echo " <h1 style = 'text-align: center;'> Numero de puntos en el laberinto: $contador</h1>";
