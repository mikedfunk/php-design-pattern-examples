<?php
/**
 * Specification unit test for MikeFunk\PhpDesignPatternExamples\Shotgun
 *
 * @package spec\MikeFunk\PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\PhpDesignPatternExamples;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * ShotgunSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class ShotgunSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\PhpDesignPatternExamples\Shotgun');
    }

    /**
     * it_fires_the_gun
     *
     * @return void
     */
    public function it_fires_the_gun()
    {
        $expected = 'Bang!';
        $this->fire()->shouldReturn($expected);
    }

    /**
     * it_ejects_and_chambers
     *
     * @return void
     */
    public function it_ejects_and_chambers()
    {
        $expected = 'Pump the pump handle.';
        $this->ejectAndChamber()->shouldReturn($expected);
    }
}
