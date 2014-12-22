<?php
/**
 * Request handler
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

use MikeFunk\PhpDesignPatternExamples\Contracts\Logger;

/**
 * App
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class App
{

    /**
     * logger implementation
     *
     * @var Logger
     */
    protected $logger;

    /**
     * dependency injection
     *
     * @param Logger $logger
     * @return void
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * handle the request
     *
     * @return void
     */
    public function handle()
    {
        // log to the logger implementation
        $this->logger->write('Hello World');
    }
}
