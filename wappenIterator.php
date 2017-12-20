<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\rator\Wappen;

$wappen = new Wappen("神利", "AK47", "嵐梅", "盔甲");
foreach ($wappen as $key => $attribute) {
    echo $key . " -> " . $attribute . "<br>";
}
echo $wappen;
