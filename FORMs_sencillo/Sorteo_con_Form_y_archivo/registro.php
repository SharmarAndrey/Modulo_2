<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Concursantes</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #ecf0f3;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 14px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #219150;
        }

        .message {
            margin-top: 15px;
            color: #1e8449;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #2980b9;
            text-decoration: none;
            font-size: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
// Archivo para guardar los concursantes
$archivo = __DIR__ . "/concursantes.txt";
$mensaje = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nombre"])) {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    file_put_contents($archivo, $nombre . PHP_EOL, FILE_APPEND);

    $mensaje = "✔️ Concursante '$nombre' registrado correctamente.";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["noeliminar"])) {

    //  unlink($archivo);
    file_put_contents($archivo, "");
}


?>

<div class="card">
    <h2>Registro de Concursantes</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
        <input type="submit" value="Registrar">
    </form>

    <?php if ($mensaje): ?>
        <div class="message"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <a href="sorteo.php">Ir al sorteo</a>
</div>

</body>
</html>
