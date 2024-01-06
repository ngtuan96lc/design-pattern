<?php

declare(strict_types=1);

require_once ('Logger.php');

/* Compare values of Logging Singleton */
$instance1 = Logger::getInstance();
$instance2 = Logger::getInstance();

if ($instance1 === $instance2) {
    Logger::log("Logger has a singleton instance");
} else {
    Logger::log("Logger has not a singleton instance, loggers are different");
}

$instance1::log('Write log by $instance 1');
$instance2::log('Write log by $instance 2');