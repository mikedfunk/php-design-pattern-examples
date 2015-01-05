<?php
/**
 * abstract gun class to provide some base functionality
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

/**
 * Gun
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
abstract class Gun
{

    /**
     * fire the gun - works the same with any gun
     *
     * @return string
     */
    public function fire()
    {
        return 'Bang!';
    }
}
