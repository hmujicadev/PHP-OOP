<?php
    require 'config/config.php';
    include 'templates/header.php';
    include 'templates/nav.php';
?>

    <main class="container">
        <h1>Alta de Destinos</h1>
        <div class="alert bg-light py-4 text-dark">
            <form action="agregarDestinos.php" method="post">
<!------------------------------------------------------------------------------------------->
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label>Destino ( Aeropuerto )</label>
                        <input type="text" class="form-control" id="destNombre" placeholder="Ingrese el Nombre del Destino" value="" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="control">Regi&oacute;n</label>
                        <select name="regID" class="form-control" >												
                            <option value="">Elija la Regi&oacute;n</option>										
                            </select>	
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label>Precio</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" id="destPrecio" placeholder="Ingrese el Importe del Destino" value="" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>Asientos</label>
                        <input type="text" class="form-control" id="destNombre" placeholder="Ingrese la Cantidad de Asientos" value="" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label>Disponibles</label>
                        <input type="text" class="form-control" id="destNombre" placeholder="Ingrese la Disponibilidad del Destino" value="" required>
                    </div>

                </div>
<!------------------------------------------------------------------------------------------->
                <button class="btn btn-dark">Agregar</button>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>


    </main>
<?php
    include 'templates/footer.php';
?>