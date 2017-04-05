<?php

    $subject = 'Aaaaaaa aa Bbb bbb bbbbbb';

    $numOfMatches;

    echo 'Subject to anaylse: <b>'. $subject . "</b><br/><br/><br/><br/>";

    preg_replace_callback_array(
        [
            '~[a]+~i' => function ( $match ) { echo $match[0] . ' match found for [a] <br/> <br/>'; },

            '~[b]+~i' => function ( $match ) { echo $match[0] . ' match found for [b] <br/><br/>'; }

        ],
        $subject,
        -1,
        $numOfMatches
    );

    echo "<pre>";
    print_r($numOfMatches);
    echo "</pre>";