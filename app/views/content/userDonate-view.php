<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio Peludo - Donaciones</title>
    
</head>
<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h3 class="title is-3-has-text-black">Bienvenido a Refugio Peludo</h3>
                <h2 class="subtitle">Ayúdanos a cuidar a los animales necesitados</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half-has-text-black-bis">
                    <p>Refugio Peludo es un lugar donde cuidamos y protegemos a los animales que han sido abandonados o maltratados. Con tu ayuda, podemos proporcionarles un hogar temporal, comida, y atención médica hasta que encuentren una familia amorosa.</p>
                </div>
                <div class="column is-half">
                    <figure class="image">
                        <img src="<?php echo APP_URL; ?>app/views/img/dog.jpeg" alt="Refugio Peludo">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-3-has-text-black">Galería de Nuestros Amigos Peludos</h3>
            <div id="carousel-demo" class="carousel">
                <div class="item-1"><img src="<?php echo APP_URL; ?>app/views/img/dog1.jpeg" alt=""></div>
                <div class="item-2"><img src="<?php echo APP_URL; ?>app/views/img/dog2.jpeg" alt=""></div>
                <div class="item-3"><img src="<?php echo APP_URL; ?>app/views/img/dog3.jpeg" alt=""></div>
                <div class="item-4"><img src="<?php echo APP_URL; ?>app/views/img/dog4.jpeg" alt=""></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-3-has-text-primary">Haz una Donación</h3>
            <form action="https://www.paypal.com/donate" method="post" target="_blank">
                <div class="field">
                    <label class="label-has-text-black">Cantidad</label>
                    <div class="control">
                        <input class="input" type="number" name="amount" placeholder="Ingrese el monto de la donación">
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary">Donar</button>
                </div>
            </form>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h3 class="title is-3-has-text-primary">Contacto</h3>
            <form>
                <div class="field">
                    <label class="label-has-text-black">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Tu nombre">
                    </div>
                </div>
                <div class="field">
                    <label class="label-has-text-black">Correo Electrónico</label>
                    <div class="control-">
                        <input class="input" type="email" placeholder="Tu correo electrónico">
                    </div>
                </div>
                <div class="field">
                    <label class="label-has-text-black">Mensaje</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Tu mensaje"></textarea>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-primary">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>&copy; 2024 Paraíso Peludo. Todos los derechos reservados.</p>
        </div>
    </footer>
