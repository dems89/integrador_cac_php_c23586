<?php ob_start();
set_error_handler("var_dump");
include_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errores = [];

    if (empty($_POST['nombre'])) {
        $errores['nombre'] = 'El campo nombre es obligatorio.';
    }
    if (empty($_POST['apellido'])) {
        $errores['apellido'] = 'El campo apellido es obligatorio.';
    }
    if (empty($_POST['email'])) {
        $errores['email'] = 'El campo email es obligatorio.';
    }
    if (empty($_POST['tema'])) {
        $errores['tema'] = 'El campo tema es obligatorio.';
    }
    if (empty($_FILES['archivo']['name'])) {
        $errores['archivo'] = 'Debe subir una imagen.';
    }
    if (count($errores) == 0) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['email'];
        $tema = $_POST['tema'];

        # Manejo de la imagen
        $imagen = $_FILES['archivo']['name'];
        $imagen_temporal = $_FILES['archivo']['tmp_name'];
        $fecha = new DateTime();
        #hago que la imagen sea uno e irrepetible
        $imagen = $fecha->getTimestamp() . "_" . $imagen;
        move_uploaded_file($imagen_temporal, "../assets/upload/" . $imagen);

        $conexion = new Conexion();
        $sql = "INSERT INTO oradores (nombre, apellido, mail, tema, imagen) VALUES ('$nombre', '$apellido', '$mail', '$tema', '$imagen')";
        $resultado = $conexion->ejecutar($sql);
        header("Location: ../pages/lista_oradores.php");
        exit();
    } else {
        # Manejar los errores, por ejemplo, mostrarlos en el formulario
        foreach ($errores as $campo => $mensaje) {
            echo "Error en $campo: $mensaje<br>";
        }
    }
}
?>