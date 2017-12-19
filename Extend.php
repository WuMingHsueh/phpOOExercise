<?php

include  __DIR__ . "./vendor/autoload.php";

use \OOExercise\Entree;
use \OOExercise\ComboMeal;

$soup = new Entree("Chicken Soup", ['chicken', 'water']);
$sandwich = new Entree("Chicken Sandwich", ['chicken', 'bread']);

$combo = new ComboMeal("Soup + Sandwich", [$soup, $sandwich]);

foreach (['chicken', 'water', 'pickles'] as $ing) {
    if ($combo->hasIngredient($ing))
        print "Something in the combo contains $ing .<br>";
}
