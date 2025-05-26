<?php
session_start();

if (isset($_SESSION['verificado']) && $_SESSION['verificado'] === true) {
    header("Location: contenido.php");
    exit();
}

$error = '';

if (!isset($_SESSION['num1']) || !isset($_SESSION['num2'])) {
    $_SESSION['num1'] = rand(1, 10);
    $_SESSION['num2'] = rand(1, 10);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta_usuario = isset($_POST['respuesta']) ? (int) $_POST['respuesta'] : 0;
    $respuesta_correcta = $_SESSION['num1'] + $_SESSION['num2'];

    if ($respuesta_usuario === $respuesta_correcta) {
        $_SESSION['verificado'] = true;
        unset($_SESSION['num1'], $_SESSION['num2']);
        header("Location: contenido.php");
        exit();
    } else {
        $error = "Respuesta incorrecta. Inténtalo de nuevo.";
        $_SESSION['num1'] = rand(1, 10);
        $_SESSION['num2'] = rand(1, 10);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login con verificación</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f0f2f5;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="number"] {
            padding: 10px;
            margin: 15px 0;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Verificación de acceso</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <label>¿Cuánto es <?php echo $_SESSION['num1']; ?> + <?php echo $_SESSION['num2']; ?>?</label><br>
            <input type="number" name="respuesta" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
