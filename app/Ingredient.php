<?php

namespace \OOExercise;

class Ingredient
{
    public $ingredient;
    public $price;

    public function __construct($ingredient = null, $price = null)
    {
        $this->ingredient = $ingredient;
        $this->price = $price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}
