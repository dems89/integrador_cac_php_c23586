<main class="overflow-hidden">
    <?php
    foreach ($oradores as $orador) { ?>
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="mt-5 col-sm-12 col-md-7">
                <div class="card bg-light shadow">
                    <div class="card-header text-center shadow fs-4 rounded-pill">
                        Datos del orador
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row gx-2">
                                <div class="col-md mb-3">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre"
                                        aria-label="Nombre" required value="<?php echo $orador['nombre']; ?>">
                                </div>
                                <div class="col-md mb-3">
                                    <input type="text" name="apellido" id="apellido" class="form-control"
                                        placeholder="Apellido" aria-label="Apellido" required
                                        value="<?php echo $orador['apellido']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                        aria-label="Email" required value="<?php echo $orador['mail']; ?>">
                                </div>
                            </div>
                            <div>
                                <label for="archivo">Imagen actual del Orador</label>
                            </div>
                            <div class="d-flex justify-content-center align-item-center">
                                <img class="img-fluid img-thumbnail" width="200"
                                    src="../assets/upload/<?php echo $orador['imagen']; ?>">
                            </div>
                            <div class="mb-3 justify-content-left">
                                <label for="archivo">Imagen Nueva del Orador</label>
                                <input class="form-control" type="file" name="archivo" id="archivo">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <textarea class="form-control" name="tema" id="tema" rows="4"
                                        placeholder="Sobre qué quieres hablar?"
                                        required><?php echo $orador['tema']; ?></textarea>
                                    <div class="d-grid mt-5 fs-5">
                                        <input value="Modificar" type="submit" class="btnVerde link-animado">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>