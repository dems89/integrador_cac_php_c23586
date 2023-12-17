<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SESSION['usuario']) {
    $_SESSION['logged_in'] = false;
    session_destroy();
    header("Location: ../index.php");
    exit;
} ?>