<?php

    function satNav() {

        $distance = 0;
        echo 'Start from driveway.';

        yield '<br/> First Stop.';

        echo '<br/> Take a left.';

        yield '<br/> Second stop sign.';

        echo '<br/> Destination reached.';
        echo '<br/> Your journey was '.$distance.' miles';

    }

    $control = satNav();
    $val = $control -> current();
    echo $val . ' concat 123';
    echo '<br/><br/><br/><br/>';

    $control -> next();
    echo $control -> current();

    $control -> next();