<?php

namespace OOExercise\LogTest;

use Psr\Log\LoggerInterface;

class PrsLogTest
{
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function store()
    {
        if ($this->logger) {
            $this->logger->info('Doing work');
        }
    }
}
