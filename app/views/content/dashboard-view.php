<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio Peludo</title>
    <link rel="stylesheet" href="path/to/bulma.css">
    <script src="path/to/bulma-carousel.min.js"></script>
</head>
<body>
        <div class="container">
           
            <div id="carousel-demo" class="carousel">
                <div class="item-1">
                    <img src="<?php echo APP_URL; ?>app/views/img/grupo.jpeg" alt="Grupo de animales">
                </div>
                <div class="item-2">
                    <img src="<?php echo APP_URL; ?>app/views/img/donar.jpeg" alt="Donar">
                </div>
                <div class="item-3">
                    <img src="<?php echo APP_URL; ?>app/views/img/imgdog.jpeg" alt="Perro">
                </div>
                <div class="item-4">
                    <img src="<?php echo APP_URL; ?>app/views/img/cutedog.jpeg" alt="Perro lindo">
                </div>
            </div>
         
            <script>
                bulmaCarousel.attach('#carousel-demo', {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 3000 
                });
            </script>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-3-has-text-primary">Bienvenidos a Refugio Peludo</h2>
            <p class="has-text-black">Nuestra misión es rescatar, cuidar y encontrar hogares amorosos para animales necesitados. Nos dedicamos a brindarles una segunda oportunidad y una vida digna.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2-has-text-danger">Nuestros Servicios</h2>
            <div class="columns">
                <div class="column">
                    <h3 class="subtitle">Adopciones</h3>
                    <p class="has-text-black">Ayudamos a encontrar el hogar perfecto para cada uno de nuestros animales rescatados.</p>
                </div>
                <div class="column">
                    <h3 class="subtitle">Esterilizaciones</h3>
                    <p class="has-text-black">Ofrecemos servicios de esterilización a bajo costo para prevenir la sobrepoblación.</p>
                </div>
                <div class="column">
                    <h3 class="subtitle">Cuidados Médicos</h3>
                    <p class="has-text-black">Proporcionamos atención médica necesaria a los animales rescatados.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2-has-text-danger">Voluntariado</h2>
            <p class="has-text-black">Únete a nuestro equipo de voluntarios y ayuda a mejorar la vida de los animales rescatados. Contáctanos para más información.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-2-has-text-danger">Historias de Éxito</h2>
            <div class="columns">
                <div class="column">
                    <p class="has-text-black">"Adoptar a Luna ha sido una de las mejores decisiones de mi vida. Gracias al refugio por su apoyo y dedicación." - María</p>
                </div>
                <div class="column">
                    <p class="has-text-black">"El equipo del refugio nos ayudó a encontrar a nuestro nuevo mejor amigo. ¡Gracias por todo!" - Carlos</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="title is-2-has-text-black">Contáctanos</h2>
            <form action="submit_form.php" method="post">
                <div class="field">
                    <label class="label is-2-has-text-black">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" name="name" placeholder="Tu nombre">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-2-has-text-black">Correo Electrónico</label>
                    <div class="control">
                        <input class="input" type="email" name="email" placeholder="Tu correo electrónico">
                    </div>
                </div>
                <div class="field">
                    <label class="label is-2-has-text-black">Mensaje</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Tu mensaje"></textarea>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Sección de Donaciones -->
    <section class="section">
        <div class="container">
            <h2 class="title is-2-has-text-black">Haz una Donación</h2>
            <p class="has-text-black">Tu apoyo es fundamental para continuar nuestra labor. Puedes hacer una donación a través de los siguientes métodos:</p>
            <ul>
                <li>Transferencia bancaria</li>
                <li>PayPal</li>
                <li>Tarjeta de crédito</li>
            </ul>
        </div>
    </section>

   

    <footer class="footer">
        <div class="content has-text-centered">
            <p>&copy; 2024 Paraíso Peludo. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
