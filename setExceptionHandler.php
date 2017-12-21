<?php
include __DIR__ . "./vendor/autoload.php";
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger("ExceptionHandler");
$logger->pushHandler(new StreamHandler(__DIR__."./logs/wuminghsueh.log", Logger::ERROR));
set_exception_handler(function(\Exception $e) use ($logger) {
    $logger->error("Exception " . $e->getCode() . ": " . $e->getMessage(). " in " . $e->getFile() . " on line " . $e->getLine());
});
?>

<?php

function throwException()
{
    throw new Exception("wuminghsueh believe", 1);
}

throwException();
?>

<?php restore_exception_handler(); ?>