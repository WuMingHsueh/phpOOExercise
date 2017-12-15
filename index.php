<?php

include __DIR__ . "./vendor/autoload.php";

use OOExercise\Entree as Entree;


$soup = new Entree;
$soup->name = 'Chicken Soup';
$soup->ingredients = ['chicken', 'water'];

$sandwich = new Entree;
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = ['chicken', 'bread'];

foreach (['chicken', 'lemon', 'bread', 'water'] as $ing) {
    if ($soup->hasIngredient($ing))
        print "Soup contains $ing. <br>";
    
    if ($sandwich->hasIngredient($ing))
        print "Sandwich contains $ing. <br>";
}