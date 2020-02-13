<?php
    require 'clases/conexion.php';
    require 'clases/Region.php';

    $objRegion = new Region;

    $region = $objRegion->listarRegionPorId();


    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Modificar una Region</h1>
        <div class="alert.bg-light.py-4">
            <form action="modificarRegion.php" method="post">
                Region:



                <br>

                <input class="form-control" type="text" name="regNombre" id="" value="<?= $region['regNombre'] ?>">
                <input type="hidden" name="regID" id="" value="<?= $region['regID'] ?>">
                <br>

                <button class="btn-dark">Modificar</button>

                <a href="adminRegiones.php" class="btn btn-outline-secondary">volver a panel</a>            
            
            </form>
        </div>

    </main>
<?php
    include 'templates/footer.php';
?>