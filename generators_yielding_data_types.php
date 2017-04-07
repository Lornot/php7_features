<?php

    class myOBJ {}

    function values() {

        yield 'string';

        yield 100;

        yield 100.11;

        yield true;

        yield from ['string', 'array', 100];

        //yield from ['hello' => 'string', 'key2' => 'array', 100];

        yield new myOBJ;

        //yield function() { echo 'hello world'; };

    }

    $control = values();

    foreach ($control as $value) {
        echo json_encode($value, JSON_PRETTY_PRINT).'<br/><br/>';

        //$value();
    }