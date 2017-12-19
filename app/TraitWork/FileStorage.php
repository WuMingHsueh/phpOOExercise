<?php

namespace OOExercise\TraitWork;

class FileStorage
{
    use LoggerTest;

    public function store($data)
    {
        $this->logMessage($data);
    }
}
