<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
if (session_status() == PHP_SESSION_NONE) {
    session_start();}
include_once 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $username = strtolower($_POST['user']); // Nombre de usuario
        $password = $_POST['pwd']; // Contraseña

        $conexion = new Conexion();
        $sql = "SELECT * FROM usuarios";
        $resultado = $conexion->consultar($sql);
        $usuarioexiste = false;

        foreach ($resultado as $user) {
            if ($user['nombre'] === $username) { //strtolower() convierte string a minuscula
                $usuarioexiste = true;
                break;
            }
        }

        if ($usuarioexiste) {
            $_SESSION['mensaje']="El usuario ya existe";
            $_SESSION['error']= "0";
            header("Location: ../index.php");
        } else {
            $sql = "INSERT INTO usuarios (nombre, clave) VALUES ('$username', '$password')";
            $conexion->ejecutar($sql);
            $_SESSION['mensaje']="Usuario Creado";
            $_SESSION['error']= "1";
            header("Location: ../index.php");
            exit;
        }
    } catch (Exception $e) {
        // Manejar cualquier excepción que pueda ocurrir durante el proceso
        die("Error: " . $e->getMessage());
    }
} ?>