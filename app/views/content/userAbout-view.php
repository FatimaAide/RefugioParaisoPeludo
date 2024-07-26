<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    use app\controllers\misionController;

    $misionController = new misionController();
    $mision= $misionController->misionDatos();
    
?>

<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-3 has-text-black">Bienvenido a Refugio Peludo</h1>
                <h2 class="subtitle">Ayúdanos a cuidar a los animales necesitados</h2>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <div class="content">
                <h2 class="title has-text-primary">Nuestra Historia</h2>
                <div class="columns">
                    <div class="column is-one-third">
                        <figure class="image">
                            <img src="<?php echo APP_URL; ?>app/views/img/foto5.webp" alt="Nuestra Historia">
                        </figure>
                        <div>
                        <?php foreach ($mision as $datos): { ?>
                                <h1 class="title has-text-primary">Mision</h1>
                                <p><?php echo $datos['mision']?></p>
                                <h1 class="title has-text-primary">Visión</h1>
                                <p><?php echo $datos['vision']?></p>
                                <?php } endforeach; ?>
                        </div>
                    </div>
                    <div class="column">
                        <p class="has-text-black-bis">En Paraíso Peludo, nuestra misión es proporcionar un refugio seguro y amoroso para animales abandonados y maltratados, ofreciéndoles una segunda oportunidad para encontrar un hogar permanente y amoroso. Fundado en 2010, nuestro refugio ha crecido hasta convertirse en un referente en el cuidado y rehabilitación de animales en nuestra comunidad.</p>
                    </div>
                </div>

                <h2 class="title has-text-primary">Nuestros Servicios</h2>
                <div class="columns">
                    <div class="column is-one-third">
                        <figure class="image">
                            <img src="<?php echo APP_URL; ?>app/views/img/foto7.jpeg" alt="Nuestros Servicios">
                        </figure>
                    </div>
                    <div class="column">
                        <ul>
                            <li class="has-text-black-bis"><strong class="has-text-success">Rescate y Rehabilitación:</strong> Rescatamos animales en situaciones de peligro o abandono y les proporcionamos el cuidado médico necesario.</li>
                            <li class="has-text-black-bis"><strong class="has-text-success">Adopciones:</strong> Facilitamos el proceso de adopción para encontrar hogares amorosos y permanentes para nuestros animales.</li>
                            <li class="has-text-black-bis"><strong class="has-text-success">Campañas de Esterilización:</strong> Organizamos campañas de esterilización para controlar la población de animales callejeros y mejorar su calidad de vida.</li>
                            <li class="has-text-black-bis"><strong class="has-text-success">Programas Educativos:</strong> Realizamos talleres y charlas para concienciar a la comunidad sobre la importancia del bienestar animal y la adopción responsable.</li>
                        </ul>
                    </div>
                </div>

                <h2 class="title has-text-primary">Únete a Nosotros</h2>
                <div class="columns">
                    <div class="column">
                        <p class="has-text-black-bis">Paraíso Peludo depende del apoyo de personas como tú. Hay muchas maneras de involucrarse:</p>
                        <ul>
                            <li class="has-text-black-bis"><strong class="has-text-success">Voluntariado:</strong> Únete a nuestro equipo de voluntarios y ayuda en el cuidado diario de los animales.</li>
                            <li class="has-text-black-bis"><strong class="has-text-success">Donaciones:</strong> Contribuye con donaciones monetarias o en especie para apoyar nuestras operaciones.</li>
                            <li class="has-text-black-bis"><strong class="has-text-success">Adopción:</strong> Considera adoptar uno de nuestros maravillosos animales y brindarle un hogar lleno de amor.</li>
                        </ul>
                    </div>
                    <div class="column is-one-third">
                        <figure class="image">
                            <img src="<?php echo APP_URL; ?>app/views/img/foto8.webp" alt="Únete a Nosotros">
                        </figure>
                    </div>
                </div>

                <h2 class="title has-text-primary">Contacto</h2>
                <div class="columns">
                    <div class="column is-one-third">
                        <figure class="image">
                            <img src="<?php echo APP_URL; ?>app/views/img/foto9.jpeg" alt="Contacto">
                        </figure>
                    </div>
                    <div class="column">
                        <p class="has-text-black-bis">Si deseas saber más sobre nuestro refugio, adoptar un animal, o cómo puedes ayudar, no dudes en contactarnos:</p>
                        <ul>
                            <li class="has-text-black-bis"><strong class="has-text-black-bis">Dirección:</strong> Calle Amor y Esperanza, 123, Ciudad Refugio</li>
                            <li class="has-text-black-bis"><strong class="has-text-black-bis">Teléfono:</strong> (555) 123-4567</li>
                            <li class="has-text-black-bis"><strong class="has-text-black-bis">Correo Electrónico:</strong> info@paraisopeludo.org</li>
                            <li class="has-text-black-bis"><strong class="has-text-black-bis">Redes Sociales:</strong> <a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>&copy; 2024 Paraíso Peludo. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>