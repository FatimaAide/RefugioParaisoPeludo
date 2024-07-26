<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";

    use app\controllers\misionController;

    $misionController = new misionController();
    $mision= $misionController->misionDatos();
    
?>

    <div>
    <?php foreach ($mision as $datos): { ?>
           
            <p><?php echo $datos['mision']?></p>
            <?php } endforeach; ?>
    </div>