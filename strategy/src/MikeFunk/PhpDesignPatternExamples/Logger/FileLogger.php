<?php
/**
 * File logger implementation
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples\Logger;

use MikeFunk\PhpDesignPatternExamples\Contracts\Logger;

/**
 * DatabaseLogger
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class FileLogger implements Logger
{

    /**
     * write to the log
     *
     * @param string $text
     * @return void
     */
    public function write($text)
    {
        var_dump('Logging ' . $text . ' to file');
    }
}
