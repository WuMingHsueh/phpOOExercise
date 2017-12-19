<?php

namespace OOExercise\TraitWork;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 *
 */
trait LoggerTest
{
    use LogTrait;

    public function logMessage($message, $level='DEBUG')
    {
        $this->logger->pushHandler(new StreamHandler($this->logPath, Logger::DEBUG));
        $this->logger->debug($message);
    }
}
