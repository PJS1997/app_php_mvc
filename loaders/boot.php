<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/helpers.php';
$dotenv = \Dotenv\Dotenv::create(path:__DIR__ . '/../');
$dotenv->load();