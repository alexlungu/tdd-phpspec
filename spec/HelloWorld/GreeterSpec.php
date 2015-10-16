<?php

namespace spec\HelloWorld;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use HelloWorld\Person;
use HelloWorld\Named;
use HelloWorld\Logger;

class GreeterSpec extends ObjectBehavior
{

    /**
     * The Interface Segregation Principle:
     * "No client should be forced to depend on methods it does not use"
     * Robert C Martin
     */
    function let(Named $named, Logger $logger)
    {
        $this->beConstructedWith($logger);
        $named->getName()->willReturn('Alex');
    }

    function it_logs_the_greetings(Named $named, Logger $logger)
    {
        $this->greet($named);
        $logger->log('Hello, Alex')->shouldHaveBeenCalled();
    }

}
