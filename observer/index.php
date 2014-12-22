<?php
/**
 * Observer pattern example
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
use MikeFunk\PhpDesignPatternExamples\App;
use MikeFunk\PhpDesignPatternExamples\LogObserver;

// get the composer autoloader
require __DIR__ . '/vendor/autoload.php';

// get the application
$app = new App(new SplObjectStorage());

// attach the observer to the subject
$app->attach(new LogObserver());

// handle should var_dump from the app and the observer
$app->handle();
