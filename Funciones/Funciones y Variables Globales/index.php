<?php

$nombre = "Andrii";
$apellido = "Sharmar";
$edad = 42;
$ciudad = "Barcelona";

function escribe()
{
    global $nombre, $apellido, $edad, $ciudad;
    echo "<h1>Hola $nombre $apellido</h1>";
    echo "<h2>Tu edad: $edad</h2>";
    echo "<h2>Ciudad natal: $ciudad</h2>";
}

escribe();
exit;
