<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../LoggerServices/LoggerInterface.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../LoggerServices/DatabaseLogger.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Logger.php';

class DatabaseLog extends Logger
{
    /**
     * Abstract method for factory role.
     * 
     * @return LoggerInterface
     */
    protected function makeLogger(): LoggerInterface
    {
        return new DatabaseLogger();
    }
}