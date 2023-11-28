<?php

if ('dev' === $_SERVER['APP_ENV'] && "true" === $_SERVER['APP_DEBUG'] ) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}


