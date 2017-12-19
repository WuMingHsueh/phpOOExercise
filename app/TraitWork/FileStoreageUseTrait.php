<?php

namespace OOExercise\TraitWork;

class FileStorageUseTrait
{
    use FileLogger,SysLogger
    {
        FileLogger::logMessage insteadof SysLogger;
        SysLogger::logMessage as private logSysMessage;
    }

    public function store($data)
    {
        $this->logMessage($data);
        $this->logSysMessage($data);
    }
}
