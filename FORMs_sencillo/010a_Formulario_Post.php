<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario POST</title>
</head>
<body>
	<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $nombre = $_POST["nombre"] ?? "";
    $edad =$_POST["edad"] ?? "";
    $email =$_POST["email"] ?? "";
    $curso =$_POST["curso"] ?? "";
    $genero =$_POST["genero"] ?? "";

    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: $nombre<br>";
    echo "Edad: $edad<br>";
    echo "Email: $email<br>";
    echo "Curso: $curso<br>";
    echo "Género: $genero<br>";
    echo "<hr>";
}
	?>

	<h2>Formulario de inscripción</h2>
<form method="POST" action="">
    Nombre: <input type="text" name="nombre" required><br><br>
    Edad: <input type="number" name="edad" required><br><br>
    Email: <input type="email" name="email" required><br><br>

    Curso:
    <select name="curso" required>
        <option value="">-- Selecciona un curso --</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Python">Python</option>
    </select><br><br>

    Género:<br>
    <input type="radio" name="genero" value="Masculino" required> Masculino<br>
    <input type="radio" name="genero" value="Femenino" required> Femenino<br>
    <input type="radio" name="genero" value="Otro" required> Otro<br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>