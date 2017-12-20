<?php

namespace OOExercise\Binding;

class B extends A
{
    public static function whichClass()
    {
        echo __CLASS__;
        echo "<br>";
    }
}
