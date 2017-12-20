<?php

function fizzbuzz($start, $end)
{
    $current = $start;
    while ($current <= $end) {
        if ($current%3 == 0 && $current%5 == 0) {
            yield "fizzbuzz";
        } elseif ($current%3 == 0) {
            yield "fizz";
        } elseif ($current%5 == 0) {
            yield "buzz";
        } else {
            yield $current;
        }
        $current++;
    }
}

foreach (fizzbuzz(1, 20) as $value) {
    echo $value . "<br>";
}