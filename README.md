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
`composer dump autoload` to set up the autoloader.

This uses PHP's SplObserver interface, SplSubject interface, and 
SplObjectStorage class. to detach by matching object.

In this example the `App` class is a subject which defines all of the required
methods in `SplSubject`. The LoggerObserver likewise implements `SplObserver`.
In index.php we setup the App class, attach an observer, and notify all
observers after handling the request. This lets the observer log that I have
visited the page.
