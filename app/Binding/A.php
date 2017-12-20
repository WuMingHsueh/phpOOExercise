<?php

namespace OOExercise\Binding;

class A
{
    public static function whichClass()
    {
        echo __CLASS__;
        echo "<br>";
    }

    public static function test()
    {
        // self::whichClass();
        static::whichClass();
    }
}
