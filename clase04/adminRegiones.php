<?php
    require 'config/config.php';
    $objRegion = new Region;
    $regiones = $objRegion->listarRegiones();

    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Panel de administración de regiones</h1>
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-secondary">
                <tr>
                    <th>id</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="formAgregarRegion.php" class="btn btn-dark">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-light">
<?php
        foreach ( $regiones as $region ){
?>
            <tr>
                <td><?= $region['regID']; ?></td>
                <td><?= $region['regNombre']; ?></td>
                <td>
                    <a href="formModificarRegion.php?regID=<?= $region['regID']; ?>" class="btn btn-dark">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-dark">
                        eliminar
                    </a>
                </td>
            </tr>
<?php
        }
?>
            </tbody>
        </table>

    </main>
<?php
    include 'templates/footer.php';
?>