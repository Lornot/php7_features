<?php

    require 'namespace.php';

    /** php5.6 */
    //use avelx\complicated\hello;
    //use avelx\complicated\anotherloz as al;

    /** php7 */
    use avelx\complicated\{ hello, anotherloz as al};


    $obj = new hello();
    $obj2 = new al;

    echo "<br> <br/> <h2>Functions:</h2> <br><br>";

    /** php5.6 */
    //use function avelx\complicated\all;
    //use function avelx\complicated\all2 as a2;

    /** php7 */
    use function avelx\complicated\{ all, all2 as a2};

    all();
    a2();

    echo "<br/><br> <h2>Constants:</h2><br><br>";

    /** php5.6 */
    //use const avelx\complicated\HELLO;
    //use const avelx\complicated\GOODBYE as GB;

    /** php7 */
    use const avelx\complicated\{ HELLO, GOODBYE as GB};

    echo HELLO;
    echo GB;