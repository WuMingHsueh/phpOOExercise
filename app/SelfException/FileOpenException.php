<?php
namespace OOExercise\SelfException;

class FileOpenException extends \Exception
{
    public function __construct($message = null, $code = null)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "<strong>FileOpenException " . $this->getCode() . "</strong>: " . $this->getMessage(). "<br> in " . $this->getFile() . " on line " . $this->getLine() . "<br>";
    }
}
