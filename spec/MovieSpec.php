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
 /** The Comparison matcher is like the Identity matcher.
   * The difference is that is uses the comparison operator ==.
  * Not as strict and follows the PHP rules for loose type comparison.
  * Does not matter whether Movie::getRating() returns an integer or a string.
  */
    function it_compares_int_to_string()
    {
        $this->getIntRating(5)->shouldBeLike('5');
    }

    function it_compares_string_to_int()
    {
        $this->getStringRating('5')->shouldBeLike(5);
    }
}
