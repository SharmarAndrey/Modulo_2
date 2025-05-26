<?php
session_start();

// Si ya está logueado, redirige a contenido.php
if (isset($_SESSION['email'])) {
    header("Location: contenido.php");
    exit();
}

$error = '';

// Verificación de login (email y contraseña)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_correcto = 'mail@mail.com';
    $password_correcto = '1234';

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === $email_correcto && $password === $password_correcto) {
        $_SESSION['email'] = $email;
        header("Location: contenido.php");
        exit();
    } else {
        $error = 'Email o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: #f0f2f5;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
            text-align: center;
        }
        input {
            margin: 10px 0;
            padding: 8px;
            width: 90%;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Iniciar Sesión</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post">
            <input type="email" name="email" placeholder="Correo electrónico" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
