<?php

    class Region
    {
        private $regID;
        private $regNombre;

        /**
         * @return array
         */
        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $regiones = $stmt->fetchAll();
            return $regiones;
        }

        ##########
        /*
         * + listarRegion( ): [ ]
           + verRegionPorID( int $id ) : Region
           + agregarRegion(  ) : Region | bool
           + modificarRegion(  ) : Region | bool
           + eliminarRegion (  ): Region | bool

         */

        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        /**
         * @param mixed $regNombre
         */
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }

    }