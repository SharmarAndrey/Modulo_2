<?php
session_start();

if (!isset($_SESSION['verificado']) || $_SESSION['verificado'] !== true) {
    header("Location: inicio.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contenido protegido</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #e6f0ff;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .content-container {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
        button {
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="content-container">
        <h1>¡Bienvenido!</h1>
        <p>Has pasado la verificación.</p>
        <img src="Beavis.gif" alt="Beavis y Butt-Head" width="300">
        <form method="post" action="logout.php">
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>
