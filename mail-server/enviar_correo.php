<?php

/* require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php'; */
require __DIR__ . '/phpMailer/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/phpMailer/PHPMailer-master/src/SMTP.php';
require __DIR__ . '/phpMailer/PHPMailer-master/src/Exception.php';


// Usar las clases necesarias
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$asunto = "Prueba de envio de correo";
$cuerpo = "	
		<h1>Prueba de envio de correo</h1>
		<p>Esto es una prueba de envio de correo</p>
		";
// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer(true);
$email = "sharmarandrey@gmail.com";
$nombre = "Andrey Sharmar";

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com"; // Cambia esto según tu proveedor de correo
    $mail->SMTPAuth = true;
    $mail->Username = "sharmarandrey@gmail.com"; // Tu dirección de correo
    $mail->Password = "imfonxxgzhghfros"; // Tu contraseña o clave de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    // Remitente y destinatario
    // Define el mail y nombre del remitente
    $mail->setFrom("sharmarandrey@gmail.com", 'Andrii Sharmar');
    // Define el mail y nombre del destinatario
    $mail->addAddress($email, $nombre);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;

    // Enviar el correo
    $mail->send();
    echo 'El mensaje se envió correctamente.';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
