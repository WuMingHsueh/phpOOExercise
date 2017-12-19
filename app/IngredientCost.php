<?php

namespace \OOExercise;

class IngredientCost extends Entree
{
    public function __construct($name, $ingredients)
    {
        parent::__construct($name, $ingredients);
        foreach ($ingredients as $ingredient) 
            if ($ingredient instanceof Ingredient)
                return false;
            return true;
    }

    public function getTotalCost()
    {
        $cost = 0;
        foreach ($this->ingredients as $ingredient) {
            $cost += $ingredient->price;
        }
        return $cost;
    }
}
