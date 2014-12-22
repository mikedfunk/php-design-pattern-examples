<?php
/**
 * log observer
 *
* @package PhpDesignPatternExamples
* @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

use SplObserver;
use SplSubject;

/**
 * LogObserver
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class LogObserver implements SplObserver
{

    /**
     * get the subject and update
     *
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        var_dump('Logging a visit');
    }
}
