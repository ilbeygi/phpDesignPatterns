<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../LoggerServices/LoggerInterface.php';

abstract class Logger
{
    /**
     * Abstract method for factory role.
     * 
     * @return LoggerInterface
     */
    abstract protected function makeLogger(): LoggerInterface;

    /**
     * log
     * 
     * @param string|int $log
     * @return void
     */
    public function log(string|int $log): void
    {
        $logger = $this->makeLogger();

        $logger->log($log);
    }
}