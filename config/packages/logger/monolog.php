<?php

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

// create a log channel
$container->set(LoggerInterface::class, \DI\value(function() { /* ... */ }));
$logger = new Logger('vega-log-eyes');
$logger->pushHandler(new StreamHandler(dirname(__DIR__, 3). '/var/log/dev.log', Level::Warning));
return $logger;