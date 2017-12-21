<?php

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if(!(error_reporting() & $errno))
        return;
    throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
});

$fuck['ptt'] = 123;
echo $fuck['work'];

echo "嗨";

restore_error_handler();