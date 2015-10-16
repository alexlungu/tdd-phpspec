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
     * Identity Matchers
     * If you want to specify that a method returns a specific value, you can use the Identity matcher.
     * It compares the result using the identity operator: ===.
     * All 4 below are equivalent.There is no difference in how they work.
     * Choose the one which makes your specification easier to read.
     */
    function it_looks_like_a_good_movie()
    {
        $this->getRating()->shouldBe(5);
        $this->getTitle()->shouldBeEqualTo("Ted 2");
        $this->getReleaseDate()->shouldReturn(233366400);
        $this->getDescription()->shouldEqual("Directed by Seth MacFarlane. With Mark Wahlberg, Seth MacFarlane, Amanda Seyfried, Jessica Barth");
    }
}
