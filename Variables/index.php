<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables</title>
</head>
<body>
<?php

	$nombre = "Andrii";
	$apellido = "Sharmar";
	$edad = 42;
$ciudad_natal = "Jarkov (Ucrania) ";


	echo "Mi nombre es $nombre $apellido y tengo $edad años. Naci en $ciudad_natal"; 
?>	
<br>
Mi nombre es <?php echo $nombre ?> <?php echo $apellido ?> y tengo <?php echo $edad ?> años. Naci en <?php echo $ciudad_natal ?>

</body>
</html>