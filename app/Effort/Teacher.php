<?php

namespace OOExercise\Effort;

class Teacher
{
    public $sword;
    public $name;

    public function __construct($name, $sword)
    {
        $this->sword = $sword;
        $this->name = $name;
    }

    public function 獨孤九劍()
    {
        echo "不滯於物";
    }

    public function 拳法()
    {
        echo "黑衣部隊 八極拳<br>";
    }

    public function 拔刀術($sword, $swordBox)
    {
        echo "師父拔刀" . $sword . "出鞘" . $swordBox . "<br>";
    }

    // public function 收刀()
    // {
    //     echo "師父收刀<br>";
    // }
}
