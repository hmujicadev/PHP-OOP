<?php

    class Conexion 

    {

        private function __construct(){

        }

        static function conectar(){

            
            $link = new PDO (
            'mysql:host=localhost;dbname=agencia', 
			'root', 
			''
            );

            return $link;
        }

    }