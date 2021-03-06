php-design-pattern-examples
===========================

## Decorator
`composer dump autoload` to set up the autoloader in this example.

This example shows how you can define decorators and wrap them infinitely around
the output of the previous decorator. You could also accomplish the same thing
by calling the parent method with your decoration applied. The advantage of
passing in a child implementation is that the decorator only has to define
required methods from it's interface. It doesn't have to expose the entire API
of the child implementation, which you might not need.

## Strategy
`composer install` to install symfony components used in this example and set
up autoloader.

In this example there is a `Logger` Interface and two possible implementations
(strategies): `FileLogger` and `DatabaseLogger`. Which implementation we use is
the "Strategy".

In this example, the strategy is defined in `container.php`. We
then pass the defined strategy in to the App constructor and call the `write`
method on that strategy in the `handle` method. The constructor accepts any
logger strategy by type hinting the _interface_ in the constructor parameter.
This allows you to inject whatever implementation you like and it will write to
that implementation.

This example admittedly goes a little farther than it needs to by also applying
the service container pattern, but it shows an important usage: binding the
default implementation in the service container.

## Observer
`composer dump autoload` to set up the autoloader in this example.

This uses PHP's SplObserver interface, SplSubject interface, and 
SplObjectStorage class. to detach by matching object.

In this example the `App` class is a subject which defines all of the required
methods in `SplSubject`. The LoggerObserver likewise implements `SplObserver`.
In index.php we setup the App class, attach an observer, and notify all
observers after handling the request. This lets the observer log that I have
visited the page.

## Template Method
`composer install` to install symfony components used in this example and set
up autoloader. This one uses [phpspec](http://phpspec.org) for unit testing.

This example uses a gun template class which offers the default functionality of
returning "Bang!" when the `fire()` method is called. There are two different
types of child gun classes defined - a bolt-action rifle and a pump-action
shotgun. They each have their own way of ejecting the shell and chambering a
new round via `ejectAndChamber()`. Maybe not the best example but it
illustrates the point.

The `Gun` abstract class provides the template for the other guns to specialize
from. Gun cannot be instantiated - only an extension of it can be. It provides
default functionality to any child that extends it. This defines the template
method pattern.
