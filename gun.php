<?php

include __DIR__.'./vendor/autoload.php';

use OOExercise\Wappen\Gun as Gun;

$m16 = new Gun(16, 450,10);

echo $m16->caliber . "<br>";
echo $m16->bullet . "<br>";
echo $m16->distence . "<br>";
echo $m16->fuck . "<br>";

$m16->bullet = 20;
echo $m16->bullet . "<br>";