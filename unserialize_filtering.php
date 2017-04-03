<?php
    error_reporting(E_ALL);

    class newObj {

        public $prop = "hello world";

        private $priv = "This is private to the object";

        private $arr = [ 20, 200, 500, 600 ];

    }

    $data = serialize( new newObj() );

    //print_r($data);

    $unserialized = unserialize($data, ['allowed_classes' => ['newObj', 'DateTime']]);

    echo '<br/><br/>'. var_export($unserialized);