<?php
/**
 * Application
 *
 * @package PhpDesignPatternExamples
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\PhpDesignPatternExamples;

use SplObserver;
use SplSubject;
use SplObjectStorage;

/**
 * App
 *
 * @author Michael Funk <mike@mikefunk.com>
 */
class App implements SplSubject
{

    /**
     * all observers attached to this class
     *
     * @var SplObjectStorage
     */
    protected $observers;

    /**
     * dependency injection
     *
     * @param SplObjectStorage $observers
     * @return void
     */
    public function __construct(SplObjectStorage $observers)
    {
        // this allows to detach by passing in an object as a key
        $this->observers = $observers;
    }

    /**
     * attach observer
     *
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * detach an observer
     *
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * notify observers and clear the observers array
     *
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
            $this->observers->detach($observer);
        }
    }

    /**
     * handle the request
     *
     * @return void
     */
    public function handle()
    {
        var_dump('I visited the observer page');
        $this->notify();
    }
}
