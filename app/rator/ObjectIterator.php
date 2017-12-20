<?php

namespace OOExercise\rator;

class ObjectIterator implements Iterator
{
    private $obj;
    private $count;
    private $currentIndex;

    public function __construct($obj)
    {
        $this->obj = $obj;
        $this->count = count($this->obj->data);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid()
    {
        return $this->currentIndex < $this->count;
    }
        
    public function key()
    {
        return $this->currentIndex;
    }
        
    public function value()
    {
        return $this->obj->data[$this->currentIndex];
    }
        
    public function next()
    {
        $this->currentIndex++;
    }
}
