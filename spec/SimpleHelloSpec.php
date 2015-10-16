<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleHelloSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SimpleHello');
    }
//    function it_greets_with_hello()
//    {
//        $this->greet()->shouldReturn('Hello Movehut!');
//    }
