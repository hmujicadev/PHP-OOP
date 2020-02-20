<?php
    require 'config/config.php';
    $Region = new Region;
    $chequeo = $Region->agregarRegion();
    $clase = 'danger';
    $mensaje = 'No se pudo agregar la región';
    if( $chequeo ){
        $clase = 'success';
        $mensaje = 'Región: '.$Region->getRegNombre().' agregada correctamente ';
        $mensaje .= 'con el id '.$Region->getRegID();
    }
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>tema de la página</h1>

        <div class="alert alert-<?= $clase; ?>">
            <?= $mensaje ?>
        </div>

    </main>
<?php
    include 'templates/footer.php';
?>