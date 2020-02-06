<?php

    class Foo {

       static $x; 

       private function __construct(){

        echo 'construct';

       }

       public function publico(){

        echo 'mètodo publico <br>';

       }


       private function privado(){

        echo 'mètodo privado <br>';

       }

       static function estatico(){

        echo 'mètodo estatico';

       }

    }

// en otro archivo

//$objFoo = new Foo;
   // $objFoo->publico();
    //$objFoo->privado();
    //$objFoo->estatico();

        Foo::publico();