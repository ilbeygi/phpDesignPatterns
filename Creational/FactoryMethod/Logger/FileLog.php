<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '../LoggerServices/LoggerInterface.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '../LoggerServices/FileLogger.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Logger.php';

class FileLog extends Logger
{
    /**
     * Abstract method for factory role.
     * 
     * @return LoggerInterface
     */
    protected function makeLogger(): LoggerInterface
    {
        return new FileLogger();
    }
}