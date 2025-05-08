<?php
function saludar($nombre, $hora) {
    if ($hora < 12) {
        echo "Buenos días, $nombre";
    } elseif ($hora < 20) {
        echo "Buenas tardes, $nombre";
    } else {
        echo "Buenas noches, $nombre";
    }
}


saludar("Lucía", 9);  
echo "<br>";
saludar("Pedro", 15);  
echo "<br>";
saludar("Ana", 21);    