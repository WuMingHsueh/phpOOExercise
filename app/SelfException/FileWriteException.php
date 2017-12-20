<?php
namespace OOExercise\SelfException;

class FileWriteException extends \Exception
{
    public function __construct($message = null, $code = null)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "<strong>FileWriteException " . $this->getCode() . "</strong>: " . $this->getMessage(). "<br> in " . $this->getFile() . " on line " . $this->getLine() . "<br>";
    }
}
