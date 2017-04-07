<?php

    function satNav() {

        $distance = 0;

        echo 'Start from driveway. <br/>';

        $distance = yield;

        echo $distance . ' miles. <br/> Now take a left. <br/>';

        $distance = $distance + yield;

        echo $distance . ' miles. <br/> Destination reached.';
    }

    $control = satNav();
    $control -> current();

    echo '<br/> ... Analysing distance ... <br/><br/>';

    $control -> send(50);

    echo '<br/> ... Analysing distance ... <br/><br/>';

    $control -> send(70);