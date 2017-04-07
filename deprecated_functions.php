<?php

    $fp = fopen('https://www.example.com/', 'r');
    $meta = stream_get_meta_data($fp);

    echo "<pre>";
    print_r($meta);
    echo "</pre>";

    fclose($fp);


    class myClass {

        /** works, but could be deprecated */
        function myClass( $arg1 ) {

            $this -> createProp = $arg1;

        }

        /** could invoke by myClass::method(); also, but could be deprecated */
        function method(){ echo 'method run! <br/>'; }

    }

    $test = new myClass('old style constructor');
    echo $test -> createProp.'<br/>';

    myClass::method();

    /** salt as param could be deprecated */
    $password = password_hash('passwords', PASSWORD_DEFAULT,[
        /** will be deprecated soon */
        'salt' => 'asdfasdASDFAasdfasdfSDFf',
        'cost' => 16
    ]);
    
    echo "<pre>";
    print_r($password);
    echo "</pre>";

    echo "<pre>";
    var_dump(password_verify('passwords', $password));
    echo "</pre>";