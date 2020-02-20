<?php

    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $objDestino = new Destino;
    $destino = $objDestino->verDestinoPorID();
    include 'templates/header.php';
    include 'templates/nav.php';

?>

<main class="container">
    <h1>Modificaci&oacute;n de Destinos</h1>
    <div class="alert bg-light py-4 text-dark">
        <form action="modificarDestinos.php" method="post">
            <div class="form-row">
                <div class="col-md-8 mb-4">
                    <label>Destino ( Aeropuerto )</label>
                    <input type="text"      name="destNombre"       value="<?= $destino['destNombre']?>" class="form-control" >
                    <input type="hidden"    name="destID"           value="<?= $destino['destID']    ?>">
                </div>
                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label>Regi&oacute;n</label>
                        <select class="form-control">
                            <option>Seleccione </option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <label>Precio</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" name="destPrecio" value="<?= number_format($destino['destPrecio'], 2, ".", ","); ?>" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">,00</span>
                        </div>
                    </div>
                 </div>
                <div class="col-md-4 mb-4">
                    <label>Asientos</label>
                    <input type="text"      name="destAsientos"     value="<?= $destino['destAsientos'] ?>" class="form-control" >
                </div>
                <div class="col-md-4 mb-4">
                    <label>Disponibles</label>
                    <input type="text"      name="destDisponibles"  value="<?= $destino['destDisponibles'] ?>"  class="form-control" >
                </div>

            </div>               
            <button class="btn btn-dark">Modificar </button>
            <a href="adminDestinos.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </form>
    </div>
</main>

<?php
    include 'templates/footer.php';
?>