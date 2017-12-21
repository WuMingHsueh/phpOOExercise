<?php

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo "<p><strong>ERROR:</strong>$errstr<br>Cillum exercitation mollit id magna consequat. Ullamco ea ut aute labore velit tempor. Duis qui ad nostrud tempor officia enim aute commodo qui elit ut culpa dolor. Adipisicing nisi ut commodo nisi sint in cillum ad anim elit fugiat adipisicing tempor qui.</p>";

    if (($errno == E_USER_ERROR) || ($errno == E_ERROR)) {
        echo "<p>Fatal error. Program ending.</p>";
        exit;
    }
    echo "<hr>";
});


trigger_error('Trigger function called.', E_USER_NOTICE);
fopen('nofile', 'r');
trigger_error('This computer is beige.', E_USER_WARNING);
include "nofile";
trigger_error("this computer will self destruct in 15 seconds.", E_USER_ERROR);

restore_error_handler();

?>
