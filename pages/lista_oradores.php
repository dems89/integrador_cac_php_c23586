<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include_once '../includes/conexion.php';
if ($_GET) {
    if (isset($_GET['borrar'])) {

        $id_orador = $_GET['borrar'];
        $conexion = new conexion();
        $imagen = $conexion->consultar("SELECT `imagen` FROM `oradores` WHERE `oradores`.`id_orador`=" . $id_orador);
        unlink("../assets/upload/" . $imagen[0]['imagen']);
        $sql = "DELETE FROM `oradores` WHERE `id_orador` =" . $id_orador;
        $conexion->ejecutar($sql);
        header("Location: lista_oradores.php");
    }else if (isset($_GET['modificar'])) {
        $id_orador = $_GET['modificar'];
        header("Location: modificar_orador.php?modificar=" . $id_orador);
    }

    if (isset($_GET['autorizacion'])) {
        $id_orador = $_GET['autorizacion'];
        $conexion = new conexion();
        $sql2 = "SELECT `aprobado` FROM `oradores` WHERE `oradores`.`id_orador` = " . $id_orador;
        $aprobado = $conexion->consultar($sql2);
        if ($aprobado[0]['aprobado'] === 0) {
            $sql = "UPDATE `oradores` SET `aprobado` = 1 WHERE `oradores`.`id_orador` =" . $id_orador;
        } else {
            $sql = "UPDATE `oradores` SET `aprobado` = 0 WHERE `oradores`.`id_orador` =" . $id_orador;
        }
        $conexion->ejecutar($sql);
        header("Location: lista_oradores.php");
    }
}
include_once '../includes/header.php';
$conexion = new Conexion();
$sql = "SELECT * FROM oradores";
$oradores = $conexion->consultar($sql);
include_once '../includes/main_lista_oradores.php';
include_once '../includes/footer.php';
?>

