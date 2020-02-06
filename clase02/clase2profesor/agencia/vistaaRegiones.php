<?php
        require 'clases/Conexion.php';
        require 'clases/Region.php';
        $objRegion = new Region;
        $regiones = $objRegion->listarRegiones();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>lista de regiones</h1>

        <ul class="list-group">
<?php
        foreach ( $regiones as $region ){
?>
            <li class="list-group-item">
                <?= $region['regID']  ?>
                <?= $region['regNombre']  ?>
            </li>
<?php
        }
?>
        </ul>

    </main>

</body>
</html>