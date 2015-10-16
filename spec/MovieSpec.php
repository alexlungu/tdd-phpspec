<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Movie');
    }

    /**
     * The ObjectState matcher lets you check the state of an object by calling methods on it.
     * Methods in src folder should start with is* or has* and return a boolean.
     * The test will pass if the object has isAvailableOnCinemas and hasSoundtrack methods which both return true:
     */
    function it_should_be_available_on_cinemas()
    {
        // calls isAvailableOnCinemas()
        $this->shouldBeAvailableOnCinemas();
    }

    function it_should_have_soundtrack()
    {
        // calls hasSoundtrack()
        $this->shouldHaveSoundtrack();
    }

}
