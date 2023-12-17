<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/conexion.php';
$conexion = new Conexion();
$oradores = $conexion->consultar("SELECT * FROM oradores WHERE aprobado=1 LIMIT 6");
include_once 'includes/main_index.php';
include_once 'includes/footer.php';
?>
