<?php
    require 'config/config.php';
    $objDestino = new Destino;
    $destinos = $objDestino->listarDestinos();
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Panel de administración de destinos</h1>
        <table class="table table-hover table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Destino (aeropuerto)</th>
                    <th>Región</th>
                    <th>Precio</th>
                    <th>Asientos</th>
                    <th>Disponibles</th>
                    <th colspan="2">
                        <a href="formAgregarDestino.php" class="btn btn-secondary">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-light">
<?php
        foreach ( $destinos as $destino) {
?>
            <tr>
                <td><?= $destino['destNombre']; ?></td>
                <td><?= $destino['regNombre']; ?></td>
                <td><?= $destino['destPrecio']; ?></td>
                <td><?= $destino['destAsientos']; ?></td>
                <td><?= $destino['destDisponibles']; ?></td>
                <td>
                    <a href="formModificarDestino.php?destID=<?= $destino['destID']; ?>" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
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