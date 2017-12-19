<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\TraitWork\FileStorage;

$fileStorage = new FileStorage;
$fileStorage->store("fuck");
