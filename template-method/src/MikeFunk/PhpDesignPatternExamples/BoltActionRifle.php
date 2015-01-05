<?php
/**
 * Defines MikeFunk\PhpDesignPatternExamples\BoltActionRifle
 *
 * @package MikeFunk\PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

/**
 * BoltActionRifle
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\PhpDesignPatternExamples\BoltActionRifleSpec
 */
class BoltActionRifle extends Gun
{

    /**
     * eject spent shell and chamber new shell
     *
     * @return string
     */
    public function ejectAndChamber()
    {
        return 'Pull and push bolt.';
    }
}
