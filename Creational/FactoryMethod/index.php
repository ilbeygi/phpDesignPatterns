<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '/Logger/DatabaseLog.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '/Logger/FileLog.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '/Logger/Logger.php';

function logText(Logger $logger, $text = 'This is a test log')
{
    $logger->log($text);
}

$dbLog = new DatabaseLog;
$fileLog = new FileLog;

echo "Start Log to database : \n";

logText($dbLog);

echo PHP_EOL;
echo PHP_EOL;

echo "Start Log to file : \n";

logText($fileLog);