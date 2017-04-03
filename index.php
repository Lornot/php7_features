<?php

    error_reporting(E_ALL);

    $framework = new class( "read only param" ) {

        function __construct( $ro ){
            $this -> readOnly = $ro;
        }

        private $readOnly;

        function print(){ echo $this -> readOnly; }

        static function hello(){ echo "hello"; }
    };

    $framework -> print();

    $framework::hello();