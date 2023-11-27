<?php 

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
 $dotenv->loadEnv(__DIR__.'/../../../.env');
// $data = $dotenv->loadEnv(dirname(__DIR__, 3).'/.env');

var_dump($_SERVER);