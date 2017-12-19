<?php

namespace OOExercise\TraitWork;

/**
 *
 */
trait FileLogger
{
    public function logMessage($message, $level='DEBUG')
    {
        # code...
    }
}

/**
 *
 */
trait SysLogger
{
    public function logMessage($message, $level='ERROR')
    {
    }
}
