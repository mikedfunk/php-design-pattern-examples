<?php

// composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// get the IoC container
$serviceContainer = require __DIR__ . '/container.php';

// handle the request with the app
$app = $serviceContainer->get('app');
$app->handle();
