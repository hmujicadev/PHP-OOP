<?php

    class Region {


     private $regId;
     private $regNombre;
     

      public function listarRegiones(){
          
        $link = Conexion::conectar();
	    $sql = "SELECT regID, regNombre FROM regiones";
	    $stmt = $link->prepare($sql);
	    $stmt->execute();

	    $regiones = $stmt->fetchAll();

        return $regiones;
      }

      public function listarRegionPorId(){
          
        $regID = $_GET['regID'];
          
        $link = Conexion::conectar();
	    $sql = "SELECT regID,regNombre FROM regiones WHERE regID =".$regID;
	    $stmt = $link->prepare($sql);
	    $stmt->execute();
         $region = $stmt->fetch();
         
        return $region;
      }

      public function verRegionPorId(){

      }

      public function agregarRegion(){

      }

      public function modificarRegion(){

      }

      public function borrarRegion(){

      }


        /**
         * 
         */


     /**
      * Get the value of regId
      */ 
     public function getRegId()
     {
          return $this->regId;
     }

     /**
      * Set the value of regId
      *
      * @return  self
      */ 
     public function setRegId($regId)
     {
          $this->regId = $regId;

          return $this;
     }

     /**
      * Get the value of regNombre
      */ 
     public function getRegNombre()
     {
          return $this->regNombre;
     }

     /**
      * Set the value of regNombre
      *
      * @return  self
      */ 
     public function setRegNombre($regNombre)
     {
          $this->regNombre = $regNombre;

          return $this;
     }
    }