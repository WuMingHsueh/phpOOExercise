<?php

namespace OOExercise\rator;

interface Iterator
{
    public function rewind();
    public function valid();
    public function key();
    public function value();
    public function next();
}
