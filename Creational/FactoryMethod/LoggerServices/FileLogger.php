<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'LoggerInterface.php';

class FileLogger implements LoggerInterface
{
     /**
     * do log work
     * 
     * @param string|int $log
     * @return void
     */
    public function log(string|int $log): void
    {
        echo " Add log to file . \n";
    }
}