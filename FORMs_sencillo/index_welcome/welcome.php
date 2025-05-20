<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Receptor de form</title>
	
	<meta http-equiv="refresh" content="3;url=index.html">
</head>
<body>
	<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["name"]) && isset($_POST["email"])) {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        echo "<h1>Bienvenido $name</h1>";
        echo "<h2>Te contactaremos por tu email: $email</h2>";
        echo "<p>Serás redirigido a la página principal en 3 segundos...</p>";
    } else {
        echo "<h1>Error: Por favor completa todos los campos.</h1>";
        echo "<p>Redirigiendo en 3 segundos...</p>";
    }
	?>
</body>
</html>
