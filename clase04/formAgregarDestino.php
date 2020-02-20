<?php
    require 'config/config.php';
    $objRegion = new Region;
    $regiones = $objRegion->listarRegiones();
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Nuevo destino</h1>

        <div class="alert bg-light py-4 text-dark">
            <form action="agregarDestino.php" method="post">
                Destino:
                <br>
                <input type="text" name="destNombre" class="form-control">
                <br>
                Región:
                <br>
                <select name="regID" class="form-control" required>
                    <option value="">Seleccione una Región</option>
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
                <input type="text" name="destPrecio" class="form-control">
                <br>
                Asientos:
                <br>
                <input type="text" name="destAsientos" class="form-control">
                <br>
                Disponibilidad:
                <br>
                <input type="text" name="destDisponibles" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar destino</button>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>


    </main>
<?php
    include 'templates/footer.php';
?>