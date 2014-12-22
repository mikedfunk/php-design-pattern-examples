<?php
/**
 * Assemble dependency injection container
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

// get a service container
$serviceContainer = new ContainerBuilder();

// define the implementation of the interface we're using
$serviceContainer->register(
    'logger',
    'MikeFunk\PhpDesignPatternExamples\Logger\FileLogger'
);

// register the request handler
// pass in the bound implementation
$serviceContainer->register('app', 'MikeFunk\PhpDesignPatternExamples\App')
    ->setArguments([new Reference('logger')]);

return $serviceContainer;
