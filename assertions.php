<?php
    error_reporting(E_ALL);

    ini_set('assert.exception', 1);

    class HandlerError extends AssertionError {
    
    }

    $num = 100;

    assert($num > 250, new HandlerError('Some error text'));
