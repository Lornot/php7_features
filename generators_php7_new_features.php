<?php

    function values() {

        yield from [ 100, 200, 300 ];

        yield from Gen2();

        yield 300;

        return 500;

    }

    function Gen2( ){

        yield 'This is from Gen200';

        yield 'This is from Gen2';

        yield from Gen3();
    }
    
    function Gen3(){

        yield 'This is from Gen3';

        yield 'This is from Gen300';

    }

    $control = values();

    foreach ($control as $value) {

        echo '<br/>' . $value;

    }

    echo '<br/>' . $control -> getReturn();