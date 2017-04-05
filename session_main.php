<?php

    session_start([
        'cache_limiter' => 'private',
        'read_and_close' => false
    ]);

    $_SESSION['name'] = 'Lawrence';

    phpinfo();
?>

<a href="session.php">Logged in</a>
