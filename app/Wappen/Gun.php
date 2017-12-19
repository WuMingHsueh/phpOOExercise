<?php

namespace OOExercise\Wappen;

class Gun
{
    public $caliber;
    private $bullet ;
    private $distence;

    public function __construct($bullet, $distence, $caliber)
    {
        $this->caliber = $caliber;
        $this->bullet = $bullet;
        $this->distence = $distence;
    }

    public function __get($attribute)
    {
        switch ($attribute) {
            case 'bullet':
                return $this->bullet;
                break;
            case 'distence':
                return $this->distence;
                break;
            default:
                return null;
                break;
        }
        
    }

    public function __set($attreibute, $value)
    {
        switch ($attreibute) {
            case 'bullet':
                $this->bullet = $value;
                break;
            default:
                # code...
                break;
        }

    }
}
