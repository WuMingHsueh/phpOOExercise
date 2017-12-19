<?php

namespace OOExercise\Effort;

class Student extends Teacher // implements SwordMethod, Boxing
{
    public function __construct($name, $sword)
    {
        parent::__construct($name, $sword);
    }

    public function 拳法()
    {
        echo "八極參披卦 神鬼都害怕<br>";
    }

    public function 拔刀術($sword)
    {
        echo "天祥龍閃 , 出鞘用刀 $sword" . "刀鞘 <br>" ;
    }

    public function 收刀()
    {
        echo "居合 你已經死了!";
    }

    public function 獨孤九劍()
    {
        echo "重劍無鋒<br>";
    }
}
