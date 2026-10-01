<?php

use Model\ActiveRecord;

require __DIR__ . '/../vendor/autoload.php';

// Carregar o .env primeiro
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

require __DIR__ . '/funciones.php';
require __DIR__ . '/database.php';

ActiveRecord::setDB($db);
