<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
$estudiantes = array(
    array(
        "nombre" => "Juan",
        "edad" => 20,
        "notas" => array(9, 8, 6)
    ),
    array(
        "nombre" => "María",
        "edad" => 22,
        "notas" => array(7, 9, 6)
    ),
    array(
        "nombre" => "Carlos",
        "edad" => 21,
        "notas" => array(8, 9, 7)
    ),
    array(
        "nombre" => "Laura",
        "edad" => 23,
        "notas" => array(6, 8, 9)
    )
);


echo "<h2>Edad de María</h2>";
echo "Edad de María: " . $estudiantes[1]["edad"] . "<br>";


echo "<h2>Segunda nota de Carlos</h2>";
echo "La segunda nota de Carlos es: " . $estudiantes[2]["notas"][1] . "<br>";


echo "<h2>Nombres de todos los estudiantes</h2>";
foreach ($estudiantes as $estudiante) {
    echo $estudiante["nombre"] . "<br>";
}


// 4. La media de notas de Laura
echo "<h2>Media de notas de Laura</h2>";
$notas_Laura = $estudiantes[3]["notas"];
$media_Laura = round(array_sum($notas_Laura) / count($notas_Laura), 2);
echo "La media de Laura es: " . $media_Laura . "<br>";

?>


</body>
</html>