<?php
/**
 * Specification unit test for MikeFunk\PhpDesignPatternExamples\BoltActionRifle
 *
 * @package spec\MikeFunk\PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace spec\MikeFunk\PhpDesignPatternExamples;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * BoltActionRifleSpec
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class BoltActionRifleSpec extends ObjectBehavior
{

    /**
     * it_is_initializable
     *
     * @return void
     */
    public function it_is_initializable()
    {
        $this->shouldHaveType('MikeFunk\PhpDesignPatternExamples\BoltActionRifle');
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
     * it_ejects_shell_and_rechambers
     *
     * @return void
     */
    public function it_ejects_and_chambers()
    {
        $expected = 'Pull and push bolt.';
        $this->ejectAndChamber()->shouldReturn($expected);
    }
}
