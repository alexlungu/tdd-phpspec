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

    /**We can describe an object throwing an exception using Throw matchers.
     * Call Throw matcher straight from $this, making the example easier to read.
     */
    function it_should_not_allow_negative_ratings()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringSetRating(-3);
    }

    /**The above can also be written like this
     * The first argument of during is the method name and the second one is an array of values passed to the method.
     */
    function it_should_not_allow_negative_ratings_1()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('setRating1', array(-3));
    }

    function it_should_not_allow_negative_ratings_2()
    {
        $this->shouldThrow(new \InvalidArgumentException("Invalid rating"))->during('setRating2', array(-3));
    }
}
