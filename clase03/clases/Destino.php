<?php

    class Destino{


        private $destID;
        
        private $destNombre;
        
        private $regID;

        private $destPrecio;

        private $destAsientos;

        private $destDisponibles;
        
        private $destActivo;
        
        public function listarDestinos(){

            $link = Conexion::conectar();

            $sql = " SELECT
            destID,
            destNombre,
            regID,
            destPrecio,
            destAsientos,
            destAsientos,
            destDisponibles,
            destActivo FROM destinos";

            $stmt = $link->prepare($sql);
            $stmt->execute();

            $destinos = $stmt->fetchAll();

            return $destinos;

        }

        





        /**
         * Get the value of destID
         */ 
        public function getDestID()
        {
                return $this->destID;
        }

        /**
         * Set the value of destID
         *
         * @return  self
         */ 
        public function setDestID($destID)
        {
                $this->destID = $destID;

                return $this;
        }

        /**
         * Get the value of destNombre
         */ 
        public function getDestNombre()
        {
                return $this->destNombre;
        }

        /**
         * Set the value of destNombre
         *
         * @return  self
         */ 
        public function setDestNombre($destNombre)
        {
                $this->destNombre = $destNombre;

                return $this;
        }

        /**
         * Get the value of regID
         */ 
        public function getRegID()
        {
                return $this->regID;
        }

        /**
         * Set the value of regID
         *
         * @return  self
         */ 
        public function setRegID($regID)
        {
                $this->regID = $regID;

                return $this;
        }

        /**
         * Get the value of destPrecio
         */ 
        public function getDestPrecio()
        {
                return $this->destPrecio;
        }

        /**
         * Set the value of destPrecio
         *
         * @return  self
         */ 
        public function setDestPrecio($destPrecio)
        {
                $this->destPrecio = $destPrecio;

                return $this;
        }

        /**
         * Get the value of destAsientos
         */ 
        public function getDestAsientos()
        {
                return $this->destAsientos;
        }

        /**
         * Set the value of destAsientos
         *
         * @return  self
         */ 
        public function setDestAsientos($destAsientos)
        {
                $this->destAsientos = $destAsientos;

                return $this;
        }

        /**
         * Get the value of destDisponibles
         */ 
        public function getDestDisponibles()
        {
                return $this->destDisponibles;
        }

        /**
         * Set the value of destDisponibles
         *
         * @return  self
         */ 
        public function setDestDisponibles($destDisponibles)
        {
                $this->destDisponibles = $destDisponibles;

                return $this;
        }

        /**
         * Get the value of destActivo
         */ 
        public function getDestActivo()
        {
                return $this->destActivo;
        }

        /**
         * Set the value of destActivo
         *
         * @return  self
         */ 
        public function setDestActivo($destActivo)
        {
                $this->destActivo = $destActivo;

                return $this;
        }
    }