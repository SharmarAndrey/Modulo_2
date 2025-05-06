<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estructuras - ForEach</title>
</head>
<body>
<?php


$nombres = array("Pedro", "Juan", "Paula", "María", "Pablo", "Ana");


foreach ($nombres as $nombre) {

    $nombreMinuscula = strtolower($nombre);


    if ($nombreMinuscula[0] == "p") {
        echo "Hola $nombre, tu nombre empieza con la letra P.<br>";
    }
}
?>
</body>
</html>



