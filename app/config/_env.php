<?php

use Dotenv\Dotenv;
//Base path
define('BASE_PATH', realpath(__DIR__ . '/../../'));

require_once __DIR__ . '/../../vendor/autoload.php';

$dotEnv = Dotenv::create(BASE_PATH);

$dotEnv->load();
