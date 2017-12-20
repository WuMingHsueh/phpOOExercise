<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\SelfException\MyException;

try {
    throw new MyException("Error Processing Request", 42);
} catch (MyException $e) {
    echo $e;
}
