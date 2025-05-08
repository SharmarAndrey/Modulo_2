<?php
$agenda = array(
    "contacto1" => array(
        "nombre" => "Ana Pérez",
        "telefono" => "123456789",
        "email" => "ana@example.com"
    ),
    "contacto2" => array(
        "nombre" => "Luis Gómez",
        "telefono" => "987654321",
        "email" => "luis@example.com"
    ),
    "contacto3" => array(
        "nombre" => "María López",
        "telefono" => "456789123",
        "email" => "maria@example.com"
    )
);

echo "<h2>Agenda original: </h2><br>";
echo "<pre>";
print_r($agenda);
echo "</pre>";


$agenda["contacto4"] = array(
    "nombre" => "Carlos Ruiz",
    "telefono" => "321654987",
    "email" => "carlos@example.com"
);


$agenda["contacto1"]["telefono"] = "111222333";


echo  "<br> <h2> Agenda actualizada:</h2><br>";


echo "<pre>";
print_r($agenda);
echo "</pre>";
