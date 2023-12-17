<main class="tickets">
    <section class="container container__tickets">
        <div data-aos="slide-right" data-aos-once="»true»" data-aos-duration="1000" class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card border-primary">
                    <h4>Estudiante</h4>
                    <p>Tienen un descuento</p>
                    <p class="fw-bolder">80%</p>
                    <p class="fw-light text-secondary">*presentar documentación</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div data-aos="slide-right" data-aos-once="»true»" data-aos-duration="1000" class="card border-info">
                    <h4>Trainee</h4>
                    <p>Tienen un descuento</p>
                    <p class="fw-bolder">50%</p>
                    <p class="fw-light text-secondary">*presentar documentación</p>
                </div>
            </div>
            <div data-aos="slide-right" data-aos-once="»true»" data-aos-duration="1200"
                class="col-12 col-md-4 col-lg-3">
                <div class="card border-warning">
                    <h4>Junior</h4>
                    <p>Tienen un descuento</p>
                    <p class="fw-bolder">15%</p>
                    <p class="fw-light text-secondary">*presentar documentación</p>
                </div>
            </div>
        </div>
    </section>
    <h2 data-aos="slide-right" data-aos-once="true" class="enunciado">
        <span class="txtS">VENTA</span>VALOR DE TICKET $200
    </h2>
    <div class="container container__formulario">
        <form data-aos="slide-up" data-aos-once="»true»" id="formulario" class="">
            <div class="row">
                <div class="col">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Nombre"
                        aria-label="Nombre" pattern="^[a-zA-Z][a-zA-Z\s]*$" required />
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
                <div class="col">
                    <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Apellido"
                        aria-label="Apellido" pattern="^[a-zA-Z][a-zA-Z\s]*$" required />
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
            </div>
            <div class="col my-3">
                <input type="email" class="form-control" id="mail" placeholder="Correo" required />
                <div class="invalid-feedback">Ingrese un correo valido</div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" min="1" required />
                    <div class="invalid-feedback">Ingrese una cantidad</div>
                </div>
                <div class="col">
                    <label for="category" class="form-label">Categoria</label>
                    <select id="categoria" class="form-select" aria-label="Categoria" required>
                        <label for="inputcategory" class="form-label">Categoria</label>
                        <option value="0">Sin categoria</option>
                        <option value="1">Estudiante</option>
                        <option value="2">Trainee</option>
                        <option value="3">Junior</option>
                    </select>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
            </div>
            <div class="col">
                <p id="total" class="text-primary bg-secundary my-4">
                    Total a pagar : <span class="fw-bolder" id="total-pagar"></span>
                </p>
                <div class="row botones">
                    <div class="col">
                        <button type="reset" class="btnVerde" value="borrar" id="borrar">
                            Borrar
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btnVerde" value="resumen" id="calcular">
                            Resumen
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>