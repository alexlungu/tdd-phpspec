<?php

namespace spec\SimpleHello;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreetSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SimpleHello\Greet');
    }

    function it_greets_by_saying_hello()
    {
        $this->greet()->shouldReturn('Hello Movehut!');
    }
}
