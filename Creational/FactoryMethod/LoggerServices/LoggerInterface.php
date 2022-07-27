<?php

interface LoggerInterface
{
    /**
     * do log work
     * 
     * @param string|int $log
     * @return void
     */
    public function log(string|int $log): void;
}