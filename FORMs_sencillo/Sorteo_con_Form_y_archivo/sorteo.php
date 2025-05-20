<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sorteo</title>
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
            margin-bottom: 10px;
            color: #2c3e50;
        }

        p {
            margin-bottom: 20px;
            font-weight: bold;
            color: #444;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px 14px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1c6ca4;
        }

        .resultado {
            margin-top: 20px;
            text-align: left;
            font-size: 15px;
            background-color: #e9f7ef;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #b7e1cd;
            color: #2e7d32;
        }

        .error {
            margin-top: 20px;
            color: #c0392b;
            font-weight: bold;
        }

        ul {
            padding-left: 20px;
            margin-top: 10px;
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
$archivo = __DIR__ . "/concursantes.txt";
$resultado = "";
$concursantes = file_exists($archivo) ? file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["premios"])) {
    $cantidadPremios = (int) $_POST["premios"];

    if (count($concursantes) < $cantidadPremios) {
        $resultado = "<div class='error'>❌ No hay suficientes concursantes para el sorteo.</div>";
    } else {
        shuffle($concursantes);
        $ganadores = array_slice($concursantes, 0, $cantidadPremios);
        $resultado = "<div class='resultado'><strong>🎉 Ganadores:</strong><ul>";
        foreach ($ganadores as $ganador) {
            $resultado .= "<li>$ganador</li>";
        }
        $resultado .= "</ul></div>";
    }
}
?>

<div class="card">
    <h2>Sorteo</h2>
    <p>Concursantes registrados: <?php echo count($concursantes); ?></p>

    <form method="post">
        <input type="number" name="premios" min="1" placeholder="Cantidad de premios" required>
        <input type="submit" value="Realizar sorteo">
    </form>

    <?php echo $resultado; ?>

    <a href="registro.php">Volver al registro</a>
</div>

</body>
</html>
