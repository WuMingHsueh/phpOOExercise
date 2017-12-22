<?php

$check = 0;
foreach (range(1, 20, 5) as $value) {
    echo $value . PHP_EOL;
    $check = $value;  //break point here
}
