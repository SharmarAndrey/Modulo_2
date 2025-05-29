<?php
require_once 'clase_Persona.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $persona = new Persona(
        $_POST['nombre'],
        $_POST['email'],
        $_POST['empleo'],
        $_POST['titulacion'],
        $_POST['comentario']
    );
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarjeta de Persona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <img src="avatar.png" alt="Avatar del usuario" class="avatar">
        <h2><?php echo htmlspecialchars($persona->getNombre()); ?></h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($persona->getEmail()); ?></p>
        <p><strong>Empleo:</strong> <?php echo htmlspecialchars($persona->getEmpleo()); ?></p>
        <p><strong>Titulación:</strong> <?php echo htmlspecialchars($persona->getTitulacion()); ?></p>
        <p><em>"<?php echo htmlspecialchars($persona->getComentario()); ?>"</em></p>
    </div>
</body>
</html>
