<?php

    require ('Persona.php');

    $objPersona = new Persona("Hector", "Mujica");

    $objPersona->verDatos();

    // $objPersona->setNombre('Rick');

    // $objPersona->setApellido('Sanchez');


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <h1>Método verDatos</h1>
        
        <?php

       print_r( $objPersona->verDatos());

        ?>

    </main>
    
</body>
</html>