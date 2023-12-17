<?php ob_start();
set_error_handler("var_dump");
include_once 'conexion.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $username = $_POST['user'];
        $password = $_POST['pwd'];

        // Obtener los usuarios de la base de datos
        $conexion = new Conexion();
        $sql = "SELECT * FROM usuarios";
        $resultado = $conexion->consultar($sql);

        // Buscar el usuario por nombre de usuario
        $usuarioEncontrado = null;
        foreach ($resultado as $user) {
            if ($user['nombre'] === strtolower($username) && $user['clave'] === $password) {
                $usuarioEncontrado = $user;
                $_SESSION['mensaje'] = "Inicio de sesion correcto";
                $_SESSION['error'] = "1";
                break;
            }
        }
        if ($usuarioEncontrado) {
            $_SESSION['usuario'] = $usuarioEncontrado; // Guarda información del usuario en la sesión
            $_SESSION['logged_in'] = true;
            // Redirige a la página de inicio después del inicio de sesión exitoso
            if ($_SESSION['usuario']['admin'] === 1) {
                header("Location: ../pages/lista_oradores.php");
            } else {
                header("Location: ../index.php#formularioOrador");
            }
            exit;
        } else {
            $_SESSION['mensaje'] = "Nombre de usuario o contraseña incorrecta";
            $_SESSION['error'] = "0";
            header("Location: ../index.php");
            exit;
        }
    } catch (Exception $e) {
        // Manejar cualquier excepción que pueda ocurrir durante el proceso
        die("Error: " . $e->getMessage());
    }
} ?>