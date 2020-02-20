<?php
    require 'config/config.php';
    $objDestino = new Destino;
    $destino = $objDestino->verDestinoPorID();
    require 'clases/Region.php';
    $objRegion = new Region;
    $regiones = $objRegion->listarRegiones();
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Modificación de un destino</h1>

        <div class="alert bg-light py-4 text-dark">
            <form action="modificarDestino.php" method="post">
                Destino:
                <br>
                <input type="text" name="destNombre" value="<?= $destino['destNombre']; ?>" class="form-control">
                <br>
                Región:
                <br>
                <select name="regID" class="form-control" required>
                    <option value="<?= $destino['regID']; ?>"><?= $destino['regNombre']; ?></option>
<?php
            foreach ($regiones as $region){
?>
                    <option value="<?= $region['regID']; ?>"><?= $region['regNombre']; ?></option>
<?php
            }
?>
                </select>
                <br>
                Precio:
                <br>
                <input type="text"  value="<?= $destino['destPrecio']; ?>"  name="destPrecio" class="form-control">
                <br>
                Asientos:
                <br>
                <input type="text"  value="<?= $destino['destAsientos']; ?>"  name="destAsientos" class="form-control">
                <br>
                Disponibilidad:
                <br>
                <input type="text"  value="<?= $destino['destDisponibles']; ?>"  name="destDisponibles" class="form-control">
                <br>
                <button class="btn btn-dark">Modificar destino</button>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>


    </main>
<?php
    include 'templates/footer.php';
?>