<?php
    include 'templates/header.php';
    include 'templates/nav.php';
?>
    <main class="container">
        <h1>tema de la página</h1>
        <div class="alert.bg-light.py-4">
            <form action="agregarRegion.php" method="post">
                Region:

                <br>

                <input class="form-control" type="text" name="regNombre" id="">

                <br>

                <button class="btn-dark">Agregar</button>

                <a href="adminRegiones.php" class="btn btn-outline-secondary">volver a panel</a>            
            
            </form>
        </div>

    </main>
<?php
    include 'templates/footer.php';
?>