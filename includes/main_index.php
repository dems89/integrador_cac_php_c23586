<main>
  <?php if (!empty($_SESSION['mensaje'])) { ?>
    <div class="row">
      <?php if (!empty($_SESSION['mensaje']) && $_SESSION['error'] === "1") { ?>
        <div class="alert alert-success alert-dismissible fade show popup col-xs-2 col-md-3 text-center" role="alert">
        <?php }
      if (!empty($_SESSION['mensaje']) && $_SESSION['error'] === "0") { ?>
          <div class="alert alert-danger alert-dismissible fade show popup col-xs-2 col-md-3 text-center" role="alert">
          <?php } ?>
          <strong>
            <?php echo $_SESSION['mensaje'];
            $_SESSION['mensaje'] = ''; ?>
          </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    <?php } ?>
    <!--Información útil de la conferencia-->
    <section id="conferencia">
      <div class="container h-100">
        <div class="row justify-content-end align-items-center h-100">
          <div data-aos="slide-right" data-aos-once="true" class="portada__info text-end col-lg-6 col-md-8">
            <h1>Conf Bs As</h1>
            <p>
              Bs As llega por primera vez a Argentina. Un evento para
              compartir con nuestra comunidad el conocimiento y experiencia de
              los expertos que están creando el futuro de Internet. Ven a
              conocer a miembros del evento, a otros estudiantes de Codo a
              Codo y los oradores de primer nivel que tenemos para ti. Te
              esperamos!
            </p>
            <div class="portada__info__btn">
              <a class="bordeLink boton-animado" href="#formularioOrador">Quiero ser orador</a>
              <a class="backVerde boton-animado" href="pages/tickets.php">Comprar tickets</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Contenedor Oradores-->
    <section class="container mb-4" id="oradores">
      <h2 data-aos="slide-right" data-aos-once="»true»" class="enunciado">
        <span class="txtS">CONOCE A LOS</span>ORADORES
      </h2>

      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-11">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3">
            <?php
            foreach ($oradores as $orador) {
              ?>
              <div data-aos="flip-right" data-aos-once="»true»" data-aos-duration="600" class="col">
                <div class="card h-100 shadow bg-body rounded" style="padding: 0">
                  <img class="img-fluid card-img-top" style="object-fit:cover; width:100%; height:100%;"
                    src="<?php echo BASE_URL; ?>assets/upload/<?php echo $orador['imagen']; ?>"
                    alt="<?php echo $orador['nombre']; ?>">
                  <div class="card-body">
                    <h5 class="card-title fs-2">
                      <?php echo $orador['nombre']; ?>
                      <?php echo $orador['apellido']; ?>
                    </h5>
                    <p class="card-text">
                      <?php echo $orador['mail']; ?>
                    </p>
                    <p class="card-text">
                      <?php echo $orador['tema']; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <form class="d-flex justify-content-center my-4" action="pages/lista_oradores.php" method="post">
        <button data-aos="slide-down" data-aos-once="true" type="submit" class="btn btn-success boton-animado">Lista
          completa de Oradores</button>
      </form>
    </section>
    <!--Sección lugar y fecha-->
    <section id="lugarFecha" class="container-fluid p-0">
      <div class="row lugar__container">
        <img data-aos="slide-right" data-aos-once="true" src="assets/img/honolulu.png"
          class="lugar__img col-md-6" alt="Honolulu fotografia" />
        <div data-aos="fade-in" data-aos-once="true" class="lugar__info col-md-6 py-3">
          <h2>Bs As - Octubre</h2>
          <p>
            ¡Bienvenido a Honolulu, la joya costera de Buenos Aires,
            Argentina! Este paradísiaco rincón bañado por el sol se convierte
            en el escenario perfecto para nuestra emocionante Convención de
            Oradores.
            <br /><br />
            ¿Te gustaría unirte a la lista de oradores? Completa nuestro
            formulario "Conviértete en Orador" y comparte tu pasión y
            conocimiento con una audiencia ávida de aprender. <br /><br />
            ¡Juntos, hagamos que la Convención de Oradores en Honolulu sea un
            éxito!
          </p>
          <a href="<?php echo BASE_URL; ?>" class="boton-animado">Conocé más</a>
        </div>
      </div>
    </section>
    <!--Formulario-->
    <section id="formularioOrador" class="container col-md-6">
      <h2 data-aos="slide-right" data-aos-once="true" class="enunciado">
        <span class="txtS">CONVIÉRTETE EN UN</span>ORADOR
      </h2>
      <div data-aos="slide-up" data-aos-once="true" class="m-2">
        <p class="text-center">
          Anótate como orador para dar una
          <span class="txtPunteado">charla ignite</span>. Cuéntanos de qué
          quieres hablar!
        </p>
        <form action="includes/agregar_orador.php" method="post" enctype="multipart/form-data">
          <div class="d-flex justify-content-center column-gap-1">
            <div class="form-floating col">
              <input class="form-control" type="text" name="nombre" id="name" placeholder="Nombre" required />
              <label for="name">Nombre</label>
            </div>
            <div class="form-floating col">
              <input class="form-control" type="text" name="apellido" id="lastName" placeholder="Apellido" required />
              <label for="lastName">Apellido</label>
            </div>
          </div>
          <div class="form-floating my-1">
            <input class="form-control" type="email" name="email" id="email" placeholder="E-Mail" required />
            <label for="mail">E-mail</label>
          </div>
          <input type="file" class="form-control my-1" id="imagen" name="archivo" accept="image/*"
            placeholder="Foto del orador" required>
          <textarea class="form-control my-1" name="tema" id="tema" rows="8" placeholder="Sobre qué quieres hablar?"
            required></textarea>
          <p class="txtIzq">Recuerda incluir un titulo para tu charla.</p>
          <button class="btnVerde col" type="submit">Enviar</button>
        </form>
      </div>
      <div>
      </div>
    </section>
    <!--Aside Publicidad y datos adicionales-->
    <aside class="publicidad__container">
      <h2 data-aos="slide-right" data-aos-once="true" class="enunciado">
        <span class="txtS">CONOCÉ LA CIUDAD DE </span>BUENOS AIRES
      </h2>
      <iframe data-aos="slide-up" data-aos-once="»true»" class="publicidad__video"
        src="https://www.youtube.com/embed/oTDXnAXw66Y?si=JYHLwWgkE563Es8r" title="YouTube video player" width="50%"
        height="60%" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
      <iframe data-aos="slide-up" data-aos-once="»true»" class="publicidad__mapa"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70129.51637422311!2d-58.46763809982465!3d-34.61399905993844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3b4ef90cbd%3A0xa0b3812e88e88e87!2sBuenos%20Aires%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1695878474874!5m2!1ses-419!2sar"
        width="100%" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </aside>
</main>