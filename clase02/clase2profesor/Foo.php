<?php

    class Foo
    {
        static $x;

        private function __construct()
        {
            echo 'constructor';
        }
        public function publico()
        {
            echo 'método publico <br>';
        }

        private function privado()
        {
            echo 'método privado <br>';
        }

        static function estatico()
        {
            echo 'método estatico';
        }
    }

// en otro archivo

    //$objFoo = new Foo;
        //$objFoo->publico();
        //$objFoo->privado();
        Foo::estatico();