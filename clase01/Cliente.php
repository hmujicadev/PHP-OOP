<?php 



    class cliente extends Persona {

        private $codCliente;

        public function verDatos(){

            $mensaje = Persona::verDatos();

            $mensaje .= '<br>';

            $mensaje .= 'Código de cliente'.$this->getCodCliente();

            return $mensaje;
        }



        /**
         * Get the value of codCliente
         */ 
        public function getCodCliente()
        {
                return $this->codCliente;
        }

        /**
         * Set the value of codCliente
         *
         * @return  self
         */ 
        public function setCodCliente($codCliente)
        {
                $this->codCliente = $codCliente;

                return $this;
        }
    }


