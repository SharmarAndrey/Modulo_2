<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Area Triangulo</title>
</head>
<body>
<?php

$cateto1 = 10;
$cateto2 = 15;


$area = ($cateto1 * $cateto2) / 2;


$hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));


echo "Cateto 1: $cateto1<br>";
echo "Cateto 2: $cateto2<br>";
echo "Área del triángulo: $area<br>";
echo "Hipotenusa: $hipotenusa<br>";
?>

</body>
</html>