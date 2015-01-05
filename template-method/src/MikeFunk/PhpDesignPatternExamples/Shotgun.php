<?php
/**
 * Defines MikeFunk\PhpDesignPatternExamples\Shotgun
 *
 * @package MikeFunk\PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

/**
 * Shotgun
 *
 * @author Michael Funk <mike@mikefunk.com>
 * @see spec\MikeFunk\PhpDesignPatternExamples\ShotgunSpec
 */
class Shotgun extends Gun
{

    /**
     * ejectAndChamber
     *
     * @return void
     */
    public function ejectAndChamber()
    {
        return 'Pump the pump handle.';
    }
}
