<?php

namespace OOExercise\TraitWork;

use Monolog\Logger;

/**
 *
 */
trait LogTrait
{
    private $logPath;
    private $logger ;
    public function __construct($path=null)
    {
        $this->logPath = $path;
        if (is_null($this->logPath)) {
            $this->logPath = dirname(dirname(__DIR__)).'/logs/wuminghsueh.log';
        }
        $this->logger = new Logger("LoggerName");
    }

    public function logMessage($message, $level=null)
    {
    }
}
