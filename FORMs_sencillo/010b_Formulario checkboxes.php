<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Checkboxes</title>
</head>
<body>
	
<h1>Formulario Checkboxes</h1>
<form action="" method="POST">

	<input type="checkbox" name="intereses" value="musica">Opcion 1
	<input type="checkbox" name="intereses" value="danza">Opcion 2
	<input type="checkbox" name="intereses" value="deporte">Opcion 3
	<input type="submit" value="Enviar">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	if (isset($_POST["intereses"])) {
		echo "<li>&interes</li>";
		foreach ($_POST["intereses"] as $interes) {
			echo "<p>$interes</p>";
		}
	}}
	?>
</body>
</html>