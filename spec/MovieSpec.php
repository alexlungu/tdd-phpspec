<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Moviee');
    }


    /**
     * Count Matcher
     * Returns the number of items in the return value using the Count matcher.
     */
    function it_should_have_actors()
    {
        $this->getActors()->shouldHaveCount(2);
    }


    /**
     * Scalar Matchers
     * Test to see the return value of a function is a certain type.
     * It’s like using one of the is_* functions
     * e.g, is_bool, is_integer, is_float, etc.
     */
    function it_should_have_a_string_as_title()
    {
        $this->getTitle()->shouldBeString();
    }

    function it_should_have_an_array_as_cast()
    {
        $this->getCast()->shouldBeArray();
    }


    /**
     * ArrayContain Matcher
     * Test if the returned array contains a given value with the ArrayContain matcher.
     * phpspec matches the value by identity (===).
     */

    function it_should_contain_actor_in_the_cast()
    {
        $this->getCast()->shouldContain('Liamm Neeson');
    }

    /**
     * ArrayKeyWithValue Matcher
     * Allows to assert a specific value for a specific key on a method that returns an array or an implementor of ArrayAccess.
     */
    function it_should_have_actor_in_the_cast_with_role()
    {
        $this->getRoles()->shouldHaveKeyWithValue('Customer', 'Seth MacFarlane');
    }

    /**
     * Array Key Matcher
     * Test if returned array contains a specific key.
     */
    function it_should_have_role()
    {
        $this->getRoles()->shouldHaveKey('Pirate');
    }

    /**
     * String Start Matcher
     * The StringStarts matcher lets you specify that a method should return a string starting with a given substring.
     */
    function it_should_have_a_sub_title_that_starts_with_string()
    {
        $this->getSubTitle()->shouldStartWith('Thunder buddies');
    }

    /**
     * String End Matcher
     * The StringStarts matcher lets you specify that a method should return a string starting with a given substring.
     */
    function it_should_have_a_sub_title_that_ends_with_string()
    {
        $this->getSubTitle()->shouldEndWith('for life!');
    }

    /**
     * String Regex Matcher
     * The StringRegex matcher lets us specify that a method should return a string matching a given regular expression.
     */
    function it_should_have_the_movehut_postcode()
    {
        $this->getFirstReleasedAddress()->shouldMatch('/([A-Z]{2}[0-9]{1} [0-9]{1}[A-Z]{2})/i');
    }
}
