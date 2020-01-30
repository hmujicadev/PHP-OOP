<?php

class Persona {

    private $nombre;

    private $apellido;


    public function verDatos(){

        $mensaje = 'Nombre: '.$this->getNombre();
        $mensaje .= '<br>';
        $mensaje .= 'Apellido: '.$this->getApellido();
        
        return $mensaje;
        
    }

    public function __construct($nombre,$apellido){

        $this->setNombre($nombre);

        $this->setApellido($apellido);

    }




    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
}