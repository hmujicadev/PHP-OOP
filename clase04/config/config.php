<?php
    // parametros generales de configuración
    session_start();

    function autoCarga($nClase){
        require_once 'clases/'.$nClase.'.php';
    }
    spl_autoload_register('autoCarga');