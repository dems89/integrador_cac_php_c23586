<main>
    <?php if (!empty($_SESSION['mensaje'])) { ?>
        <div class="row">
            <?php if (!empty($_SESSION['error']) && $_SESSION['error'] === "1") { ?>
                <div class="alert alert-success alert-dismissible fade show popup col-xs-2 col-md-3 text-center" role="alert">
                <?php }
            if (!empty($_SESSION['mensaje']) && $_SESSION['error'] === "0") { ?>
                    <div class="alert alert-danger alert-dismissible fade show popup col-xs-2 col-md-3 text-center"
                        role="alert">
                    <?php } ?>
                    <strong>
                        <?php echo $_SESSION['mensaje'];
                        $_SESSION['mensaje'] = ''; ?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php } ?>
        <!--Tabla oradores autorizados-->
        <section class="lista_container">
            <h2 data-aos="fade-in" data-aos-once="true" class="enunciado">
                <span class="txtS">LISTA DE</span>ORADORES
            </h2>
            <!--Buscador-->
            <div class="container table-responsive">
                <table class="table table-hover" id="table1" >
                    <div class="row justify-content-end" >
                    <div class="mb-1 col-md-4 d-flex" > 
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search align-items-center m-2" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <input class="rounded border border-black form-control m-1" type="text" id="searchInput" placeholder="Buscar...">        
                    </div>
                    </div>
                    <!--Fin Buscador-->
                    <thead class="table-dark">
                        <tr>
                        <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['admin']===1) {?> 
                            <th scope="col">#id</th> <?php }?>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Tema</th>
                            <?php if (isset($_SESSION['usuario']) && ($_SESSION['usuario']['admin'] === 1)) { ?>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        if (isset($oradores)) {
                            foreach ($oradores as $orador) {
                                if ($orador['aprobado'] === 1) { ?>
                                    <tr>
                                        <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['admin']===1) {?> 
                                        <th scope="row">
                                            <?= $orador["id_orador"]; ?>
                                        </th> <?php }?>
                                        <td>
                                            <img class="img-fluid img-thumbnail" style="object-fit:cover;" width="150" height="150"
                                                src="<?= BASE_URL; ?>assets/upload/<?= $orador['imagen']; ?>"
                                                alt="<?= $orador['nombre']; ?>">
                                        </td>
                                        <td class="search">
                                            <?= $orador["nombre"]; ?>
                                        </td>
                                        <td class="search">
                                            <?= $orador["apellido"]; ?>
                                        </td>
                                        <td>
                                            <?= $orador["mail"]; ?>
                                        </td>
                                        <td class="search">
                                            <?= $orador["tema"]; ?>
                                        </td>
                                        
                                        <?php if ($orador['id_orador']!= "2"){
                                        if (!empty($_SESSION['usuario']) && ($_SESSION['usuario']['admin'] === 1)) { ?>
                                            <td>
                                                <a name="autorizacion" id="desautorizar"
                                                    class="border border-secondary rounded p-1 btn-lista" style="width:120px !important"
                                                    href="?autorizacion=<?= $orador['id_orador']; ?>">Desautorizar</a>
                                            </td>                                            
                                            <td>
                                                <a name="modificar" id="modificar" class="border border-success rounded p-1 btn-lista"
                                                    href="modificar_orador.php?modificar=<?= $orador['id_orador']; ?>">Editar</a>
                                            </td>
                                            <td>
                                                <a name="borrar" id="borrar" class="border border-danger rounded p-1 btn-lista"
                                                    href="javascript:void(0)"
                                                    onclick="deleteCheck(<?= $orador['id_orador']; ?>)">Eliminar</a>
                                            </td> 
                                        <?php }} ?>
                                    </tr>
                                <?php } ?>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </section>
        <!--Tabla oradores sin autorización-->
        <?php if (!empty($_SESSION['usuario']) && ($_SESSION['usuario']['admin'] === 1)) { ?>
            <section class="lista_container mt-0">
                <h2 data-aos="fade-in" data-aos-once="true" class="enunciado">
                    <span class="txtS">ORADORES PENDIENTES DE</span>APROBACIÓN
                </h2>
                <div class="container table-responsive">
                    <table class="table table-hover" id="table2">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Tema</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            if (!empty($oradores)) {
                                foreach ($oradores as $orador) {
                                    if ($orador['aprobado'] === 0) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $orador["id_orador"]; ?>
                                            </th>
                                            <td>
                                                <img class="img-fluid img-thumbnail" style="object-fit:cover;" width="150" height="150"
                                                    src="<?= BASE_URL; ?>assets/upload/<?= $orador['imagen']; ?>"
                                                    alt="<?= $orador['nombre']; ?>">
                                            </td>
                                            <td class="search" >
                                                <?= $orador["nombre"]; ?>
                                            </td>
                                            <td class="search" >
                                                <?= $orador["apellido"]; ?>
                                            </td>
                                            <td>
                                                <?= $orador["mail"]; ?>
                                            </td>
                                            <td class="search">
                                                <?= $orador["tema"]; ?>
                                            </td>
                                            <?php if ($orador['id_orador']!= "2"){?>
                                            <td>
                                                <a name="autorizacion" id="autorizar"
                                                    class="border border-primary rounded p-1 btn-lista" style="width:120px !important"
                                                    href="?autorizacion=<?= $orador['id_orador']; ?>">Autorizar</a>
                                            </td>                                           
                                            <td>
                                                <a name="modificar" id="modificar" class="border border-success rounded p-1 btn-lista"
                                                    href="modificar_orador.php?modificar=<?= $orador['id_orador']; ?>">Editar</a>
                                            </td>
                                            <td>
                                                <a name="borrar" id="borrar" class="border border-danger rounded p-1 btn-lista"
                                                    href="javascript:void(0)"
                                                    onclick="deleteCheck(<?= $orador['id_orador']; ?>)">Eliminar</a>
                                            </td>                                            
                                        <?php }} ?>
                                    </tr>
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        <?php } ?>
</main>
<script> function deleteCheck(id) {
        if (confirm("¿Estas seguro de eliminar este orador?")) {
            window.location.href = "?borrar=" + id;
        }
    }
</script>
<script src="<?php echo BASE_URL; ?>js/buscador.js"></script>
