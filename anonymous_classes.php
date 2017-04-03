<?php

    error_reporting(E_ALL);

    class myOBJ {

        public $hello = "say hello";

    }

    interface req {
        function print();
    }

    $framework = new class( "read only param" ) extends myOBJ implements req {

        function __construct( $ro ){
            $this -> readOnly = $ro;
        }

        private $readOnly;

        function print(){ echo $this -> readOnly; }

        static function hello(){ echo "hello"; }
    };

    $framework -> print();

    echo $framework -> hello;

    $framework::hello();