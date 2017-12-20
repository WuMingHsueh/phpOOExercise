<?php

namespace OOExercise\rator;

class Wappen
{
    public $knife;
    public $gun;
    public $sword;
    private $amor;

    public function __construct($knife, $gun, $sword, $amor)
    {
        $this->knife = $knife;
        $this->gun = $gun;
        $this->sword = $sword;
        $this->amor = $amor;
    }

    public function load($bullet)
    {
        echo "$bullet 發裝子彈";
    }

    public function __toString()
    {
        return "用".$this->knife."砍，用".$this->sword."刺，用".$this->gun."射，用".$this->amor."檔";
    }
}
