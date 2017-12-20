<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\rator\Object;

$obj = new Object([2, 4, 6, 8, 10]);
$iterator = $obj->getIterator();
for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
    $key = $iterator->key();
    $value = $iterator->value();
    echo $key . " => " . $value . "<br>";
}
