<?php
set_exception_handler(function(\Exception $e) {
    include __DIR__ . "./vendor/autoload.php";
    $logger = new Monolog\Logger("ExceptionHander");
    $logger->pushHandler(new Monolog\Handler\StreamHandler( __DIR__."./logs/wuminghsueh.log" , Monolog\Logger::ERROR));
    $logger->error("Exception " . $e->getCode() . ": " . $e->getMessage(). " in " . $e->getFile() . " on line " . $e->getLine());
});
?>

<?php
throw new Exception("wuminghsueh believe", 1);
?>

<?php restore_exception_handler(); ?>