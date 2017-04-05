<?php

    namespace avelx\complicated;

    class hello {
        function __construct(){
            echo "created loz";
        }
    }

    class anotherloz {
        function __construct(){
            echo "<br/><br/>created another loz";
        }
    }

    function all(){ echo 'all'; }
    function all2(){ echo '<br/><br/> another'; }

    const HELLO = 'hello';
    const GOODBYE = "<br/><br> goodbye";