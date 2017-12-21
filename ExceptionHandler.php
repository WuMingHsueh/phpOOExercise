<?php
include __DIR__ . "./vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


set_exception_handler(function (\Exception $ex) {
    print "Sorry! Something unexpected happened. please try again later";
    error_log("{$ex->getMessage()} in {$ex->getFile()} @ {$ex->getLine()}");
    error_log($ex->getTraceAsString());
});

print "I'm about to connect to a made up, pretend, broken database!\n";
$db = new PDO('garbage:this is obviously not going to work!');

print "This is not going to get printed";