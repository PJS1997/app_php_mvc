<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/helpers.php';

$dotenv = Dotenv\Dotenv::create(paths:__DIR__ .'/../');
$dotenv->load();
echo config(config:'app.name');