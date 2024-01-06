<?php

declare(strict_types=1);

require_once ('Singleton.php');

class Logger extends Singleton
{
    /**
     * @var false|resource
     */
    private $fileHandle;

    public function __construct()
    {
        $this->fileHandle = fopen('custom.log', 'w');
        parent::__construct();
    }

    /**
     * Write a log entry to file resource
     * @param string $message
     * @return void
     */
    private function writeLog(string $message): void
    {
        $date = date('Y-m-d');
        fwrite($this->fileHandle, "{$date}:: {$message} \n");
    }

    /**
     * @param string $message
     * @return void
     */
    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}