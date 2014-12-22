<?php
/**
 * Logger interface
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples\Contracts;

/**
 * Logger interface
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
interface Logger
{

    /**
     * write to the log
     *
     * @param string $text
     * @return void
     */
    public function write($text);
}
