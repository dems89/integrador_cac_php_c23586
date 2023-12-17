<div class="modal fade" id="log-in" tabindex="-1" aria-labelledby="login" aria-hidden="true">
    <!--Modal Login -->
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="login">Iniciá sesión</h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" id="infoBtn" data-toggle="tooltip"
                    data-html="true" title="User: admin<br>Password: cac" fill="currentColor"
                    class="bi bi-info-circle align-self-center mx-2" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path
                        d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                </svg>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASE_URL; ?>includes/login.php" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="user" id="floatingInput"
                                placeholder="Nombre de usuario" required>
                            <label for="floatingInput">Usuario*</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="pwd" id="floatingPassword"
                                placeholder="Contraseña" required>
                            <label for="floatingPassword">Contraseña*</label>
                        </div>
                    </div>
                    <div class="modal-footer" style="display:grid;">
                        <button type="submit" class="btn btn-success">Acceder</button>
                        <a class="txtlog" href="" data-bs-target="#registrar" data-bs-toggle="modal">Si no estas
                            registrado <span class="txtlogazul">"Click Aqui"</span> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="registrar" aria-hidden="true" aria-labelledby="registrar" tabindex="-1">
    <!--Modal registrar -->
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="register">Registrate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASE_URL; ?>includes/registrar.php" method="post">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="user" id="floatingInput"
                                placeholder="Nombre de usuario" required>
                            <label for="floatingInput">Usuario*</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="pwd" id="floatingPassword"
                                placeholder="Contraseña" required>
                            <label for="floatingPassword">Contraseña*</label>
                        </div>
                    </div>
                    <div class="modal-footer" style="display:grid;">
                        <button type="submit" class="btn btn-warning">Crear cuenta</button>
                        <a class="txtlog" href="" data-bs-target="#log-in" data-bs-toggle="modal">Si ya tenes
                            una
                            cuenta <span class="txtlogazul">"Click Aqui"</span> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>