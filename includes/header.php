<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
define('BASE_URL', 'http://localhost/integrador_php_cac/');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Final Integrador PHP | GRUPO 4-Demian Scarafiocca</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon" />
    <link href="<?php echo BASE_URL; ?>css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-gris" data-bs-theme="dark">
            <div class="container-fluid col-xs-12">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img
                        src="<?php echo BASE_URL; ?>assets/img/codoacodo.png" alt="Logo codo a codo" /></a>
                <a href="<?php echo BASE_URL; ?>index.php" class="navbar-brand-text">Conf Bs As</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end ml-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active link-animado sub" aria-current="page"
                                href="<?php echo BASE_URL; ?>index.php#conferencia">La
                                conferencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-animado sub" href="<?php echo BASE_URL; ?>index.php#oradores">Los
                                oradores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-animado sub" href="<?php echo BASE_URL; ?>index.php#lugarFecha">El
                                lugar y la fecha</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-animado sub"
                                href="<?php echo BASE_URL; ?>index.php#formularioOrador">Conviértete en orador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorVerde link-animado sub"
                                href="<?php echo BASE_URL; ?>pages/tickets.php"><b>Comprar tickets</b></a>
                        </li>
                        <li class="nav-item"> <!--Inicio btn login-->
                            <div class="login_container">
                                <?php if (isset($_SESSION['usuario'])) { ?>
                                    <div class="dropdown">
                                        <a class="login_btn nav-link dropdown-toggle bg-white rounded-pill logged text-black link-animado"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <b>
                                                <?php echo "Hola " . ucfirst($_SESSION['usuario']['nombre']) . " !"; ?>
                                            </b>
                                        </a>
                                        <ul class="dropdown-menu text-center">
                                            <li><a class="dropdown-item"
                                                    href="<?php echo BASE_URL; ?>pages/lista_oradores.php">Ver lista
                                                    Oradores</a>
                                            </li>
                                            <?php if ($_SESSION['usuario']['admin'] === 1) { ?>
                                                <li><a class="dropdown-item"
                                                        href="<?php echo BASE_URL; ?>pages/lista_usuarios.php">Ver lista
                                                        Usuarios</a></li>
                                            <?php } ?>
                                            <hr class="bg-light m-0">
                                            <li><a class="dropdown-item"
                                                    href="<?php echo BASE_URL; ?>includes/logout.php">Cerrar Sesion</a></li>
                                        </ul>
                                    </div>
                                <?php } else { ?>
                                    <div>
                                        <a class="login_btn nav-link rounded-pill link-animado text-white" type="button"
                                            data-bs-toggle="modal" data-bs-target="#log-in" aria-expanded="false">
                                            <b>Acceder</b>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                        <!--fin btn login-->
                    </ul>
                </div>
            </div>
        </nav>
        <?php if (empty($_SESSION['usuario'])) {
            include_once 'main_login.php';
        } ?>
    </header>