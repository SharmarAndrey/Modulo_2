<?php

function saludar($nombre, $hora)
{
    if ($hora < 12) {
        echo "Buenos días, $nombre! Ahora son $hora horas.";
    } elseif ($hora < 20) {
        echo "Buenas tardes, $nombre! Ahora son $hora horas.";
    } else {
        echo "Buenas noches, $nombre! Ahora son $hora horas.";
    }
}


saludar("Lucía", 9);
echo "<br>";
saludar("Pedro", 15);
echo "<br>";
saludar("Ana", 21);
