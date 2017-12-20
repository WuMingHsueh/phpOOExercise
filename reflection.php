<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\rator\ObjectIterator;
use OOExercise\pagesWork\Pages;

$class = new ReflectionClass(new Pages);
echo "<pre>" . $class  ."</pre>";
