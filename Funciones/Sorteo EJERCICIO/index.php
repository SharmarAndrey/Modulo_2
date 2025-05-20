<?php

$participantes = ["Ana", "Luis", "Pedro", "María", "Jorge", "Lucía", "Sofía", "Carlos"];


$cantidad_premios = 3;

function obtenerGanadores($cantidad_premios, $participantes)
{
    $ganadores = [];

    while (count($ganadores) < $cantidad_premios) {
        $indice = rand(0, count($participantes) - 1);
        if (!in_array($indice, $ganadores)) {
            $ganadores[] = $indice;
        }
    }

    sort($ganadores);
    return $ganadores;
}


$indices_ganadores = obtenerGanadores($cantidad_premios, $participantes);


echo "<h2>Ganadores del sorteo:</h2><ol>";
foreach ($indices_ganadores as $indice) {
    echo "<li>" . $participantes[$indice] . "</li>";
}
echo "</ol>";
