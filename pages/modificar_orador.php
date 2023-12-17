<?php ob_start();
set_error_handler("var_dump");
include_once '../includes/conexion.php';

if ($_GET) {
    if (!empty($_GET['modificar'])) {
        $id_orador = $_GET['modificar'];
        $_SESSION['id_orador'] = $id_orador;
        $conexion = new conexion();
        $oradores = $conexion->consultar("SELECT * FROM `oradores` where `oradores`.`id_orador`=" . $id_orador);
    }
}

if ($_POST) {
    $conexion = new conexion();
    $id_orador = $_SESSION['id_orador'];


    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['apellido']) && !empty($_POST['tema'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $tema = $_POST['tema'];
        $imagen = $conexion->consultar("SELECT `imagen` FROM  `oradores` where `oradores`.`id_orador`=" . $id_orador);
        $imagen_nombre = $imagen[0]['imagen'];

        if (!empty($_FILES['archivo']['name'])) {
            unlink("../assets/upload/" . $imagen_nombre); //Borra la imagen anterior
            $img_name = $_FILES['archivo']['name'];
            $img_tmp_name = $_FILES['archivo']['tmp_name'];
            $fecha = new DateTime();
            $imagen_nombre = $fecha->getTimestamp() . "_" . $img_name;
            move_uploaded_file($img_tmp_name, "../assets/upload/" . $imagen_nombre);
        }

        $sql = "UPDATE oradores SET nombre = '$nombre' , imagen = '$imagen_nombre', `apellido` = '$apellido' , `tema` = '$tema', `mail` = '$email'    WHERE `oradores`.`id_orador` = '$id_orador';";
        $id_orador = $conexion->ejecutar($sql);
        header("Location: lista_oradores.php");
    }
}
include_once '../includes/header.php';
include_once '../includes/main_modificar_orador.php';
include_once '../includes/footer.php'; ?>