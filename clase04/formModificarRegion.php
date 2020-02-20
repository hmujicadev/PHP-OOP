<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $objRegion = new Region;
    $region = $objRegion->verRegionPorID();
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Modificación de una región</h1>

        <div class="alert bg-light py-4 text-dark">
            <form action="modificarRegion.php" method="post">
                Región:
                <br>
                <input type="text" name="regNombre" value="<?= $region['regNombre'] ?>" class="form-control">
                <input type="hidden" name="regID" value="<?= $region['regID'] ?>">
                <br>
                <button class="btn btn-dark">Modificar</button>
                <a href="adminRegiones.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>


    </main>
<?php
    include 'templates/footer.php';
?>