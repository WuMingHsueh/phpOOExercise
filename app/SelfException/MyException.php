<?php

namespace OOExercise\SelfException;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MyException extends \Exception
{
    private $logger;

    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $this->logger = new Logger("MyException");
        $this->logger->pushHandler(new StreamHandler(dirname(dirname(__DIR__)).'/logs/wuminghsueh.log', Logger::ERROR));
    }

    public function __toString()
    {
        $this->logger->error("Exception " . $this->getCode() . ": " . $this->getMessage(). " in " . $this->getFile() . " on line " . $this->getLine());
        return "<strong>Exception " . $this->getCode() . "</strong>: " . $this->getMessage(). "<br> in " . $this->getFile() . " on line " . $this->getLine() . "<br>";
    }
}
