<?php
namespace OOExercise\SelfException;

class FileLockException extends \Exception
{
    public function __construct($message = null, $code = null)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "<strong>FileLockException " . $this->getCode() . "</strong>: " . $this->getMessage(). "<br> in " . $this->getFile() . " on line " . $this->getLine() . "<br>";
    }
}
