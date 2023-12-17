<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once '../includes/conexion.php';
$conexion = new Conexion();
$sql = 'SELECT * FROM usuarios';
$usuarios = $conexion->consultar($sql);

if (isset($_GET['borrar'])) {
    $id_usuario = $_GET['borrar'];
    $sql = "DELETE FROM usuarios WHERE id_usuario =" . $id_usuario;
    $conexion->ejecutar($sql);
    header("Location: lista_usuarios.php");
}
if (isset($_GET['adminSwitch'])) {
    $id_usuario = $_GET['adminSwitch'];
    $sql2 = "SELECT `admin` FROM `usuarios` WHERE `usuarios`.`id_usuario` = " . $id_usuario;
    $admin_status = $conexion->consultar($sql2);
    if ($admin_status[0]['admin'] === 0) {
        $sql = "UPDATE `usuarios` SET `admin` = 1 WHERE `usuarios`.`id_usuario` =" . $id_usuario;
    } else {
        $sql = "UPDATE `usuarios` SET `admin` = 0 WHERE `usuarios`.`id_usuario` =" . $id_usuario;
    }
    $conexion->ejecutar($sql);
    header("Location: lista_usuarios.php");
}
?>
<?php if (isset($_SESSION['usuario']['admin']) && ($_SESSION['usuario']['admin'] === 1)) {
    include_once '../includes/header.php';
    include_once '../includes/main_lista_usuarios.php';
    include_once '../includes/footer.php';
} else
    {echo "No tiene permisos para ver esta pagina";} ?>