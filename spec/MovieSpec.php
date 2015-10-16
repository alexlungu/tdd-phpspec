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

    #Identity Matchers
    function it_looks_like_a_good_movie()
    {
        $this->getRating()->shouldBe(5);
        $this->getTitle()->shouldBeEqualTo("Ted 2");
        $this->getReleaseDate()->shouldReturn(233366400);
        $this->getDescription()->shouldEqual("Directed by Seth MacFarlane. With Mark Wahlberg, Seth MacFarlane, Amanda Seyfried, Jessica Barth");
    }
}
