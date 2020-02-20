<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';

    $objDestino = new Destino;
    $destinos = $objDestino->listarDestinos();


    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Panel de administración de destinos</h1>
        <table class="table table-hover table-bordered table-striped">
            <thead class="bg-secondary">
                <tr>
                    <th>id</th>
                    <th>Destino</th>
                    <th>Region</th>
                    <th>Precio</th>
                    <th>Asientos</th>
                    <th>Disponibles</th>
                    <th colspan="2">
                        <a href="formAgregarDestino.php" class="btn btn-dark">
                            agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-light">
            <?php foreach($destinos as $destino) {?>
                <tr>
                    <td><?= $destino['destID']?></td>
                    <td><?= $destino['destNombre']?></td>
                    <th><?= $destino['regNombre']?></th>
                    <th><?= $destino['destPrecio']?></th>
                    <th><?= $destino['destAsientos']?></th>
                    <th><?= $destino['destDisponibles']?></th>
                    <td>
                        <a href="" class="btn btn-dark">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-dark">
                            eliminar
                        </a>
                    </td>
                </tr>
            <?php  }  ?>
            </tbody>
    </table>

    </main>
<?php
    include 'templates/footer.php';
?>