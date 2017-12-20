<?php

namespace OOExercise\rator;

class Object implements IteratorAggregate
{
    public $data = [];

    public function __construct($array)
    {
        $this->data = $array;
    }

    public function getIterator()
    {
        return new ObjectIterator($this);
    }
}
