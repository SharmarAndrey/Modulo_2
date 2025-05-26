<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contenido Protegido</title>
    <style>
        body {
            font-family: Arial;
            background: #e6f0ff;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .content-box {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        img {
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        button {
            background: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
        <img src="Rock.gif" alt="Rock">
        <form method="post" action="logout.php">
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>
