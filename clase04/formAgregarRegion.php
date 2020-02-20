<?php
    require 'config/config.php';
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>Alta de una región</h1>

        <div class="alert bg-light py-4 text-dark">
            <form action="agregarRegion.php" method="post">
                Región:
                <br>
                <input type="text" name="regNombre" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar</button>
                <a href="adminRegiones.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>


    </main>
<?php
    include 'templates/footer.php';
?>