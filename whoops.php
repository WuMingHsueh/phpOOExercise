<?php
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

include __DIR__. './vendor/autoload.php';

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

fuck;
