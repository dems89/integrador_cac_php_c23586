<main>
    <section class="lista_container">
        <h2 data-aos="fade-in" data-aos-once="true" class="enunciado">
            <span class="txtS">LISTA DE</span>USUARIOS
        </h2>
        <div class="container p-2 table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Rol</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    if (!empty($usuarios)) {
                        foreach ($usuarios as $user) { ?>
                            <tr class="">
                                <th scope="row">
                                    <?= $user["id_usuario"]; ?>
                                </th>
                                <td>
                                    <?= ucfirst($user["nombre"]); ?>
                                </td>
                                <td>
                                    <?= $user["clave"]; ?>
                                </td>
                                <td>
                                    <?php if ($user["admin"] === 1) {
                                        echo "Es Admin";
                                    } else {
                                        echo "No es admin";
                                    }
                                    ; ?>
                                </td>
                                <?php if (!empty($_SESSION['usuario']) && ($_SESSION['usuario']['admin'] === 1) && ($user["nombre"] != "admin")) { ?>
                                    <td>
                                        <a name="adminSwitch" id="darAdmin" class="border border-warning rounded p-1 btn-lista"
                                            style="width: 120px !important;margin-bottom:5px;"
                                            href="?adminSwitch=<?= $user['id_usuario']; ?>">Switch Admin</a>
                                    </td>
                                    <td>
                                        <a name="borrar" id="borrar" class="border border-danger rounded p-1 btn-lista"
                                            href="javascript:void(0)"
                                            onclick="deleteCheck(<?= $user['id_usuario']; ?>)">Eliminar</a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </section>
</main>
<script> function deleteCheck(id) {
        if (confirm("¿Estas seguro de eliminar este usuario?")) {
            window.location.href = "?borrar=" + id;
        }
    }
</script>