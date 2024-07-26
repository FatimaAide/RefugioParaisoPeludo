<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    use app\controllers\mascotasController;

    $mascotasController = new mascotasController();
    $mascotaDatos= $mascotasController->mascotasDatos();
    
?>

<section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h3 class="title is-3-has-text-black">Bienvenido a Refugio Peludo</h3>
                <h2 class="subtitle">Ayúdanos a cuidar a los animales necesitados</h2>
            </div>
        </div>
</section>
        <div>
            <?php foreach ($mascotaDatos as $imagen): { ?>
            <li> <img width="250px" height="250px" src="<?php echo $imagen['url_imagen']?>"> </li>
            <p><?php echo $imagen['nombre']?></p>
            <?php } endforeach; ?>
        </div>



