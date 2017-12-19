<?php

namespace OOExercise;

class Entree
{
    private $name;
    protected $ingredients = [];
    public $dinner = "披薩";
    private $lunch = "鍋貼";

    public function __construct($name, array $ingredients)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
    
    public function hasIngredient($ingredient)
    {
        return in_array($ingredient,  $this->ingredients);
    }

    public function hasDinner($price = null)
    {
        echo "原本吃 : " . $this->dinner . "<br>" ;
        if (!is_null($price))
            $this->dinner .= ",海膽,魚翅";
        echo "加碼吃 : " . $this->dinner . "<br>";
    }

    public function hasLunch($price = null)
    {
        echo "原本吃 : " . $this->lunch . "<br>";
        if (!is_null($price))
            $this->lunch .= ",酸辣湯";
    echo "加碼吃 : " . $this->lunch . "<br>";
    }

    public static function getSize()
    {
        return ["small", "medium", "large"];
    }
}
