<?php

class Movie
{

    public function getActors()
    {
        $actors = array(
            'Mark Wahlberg',
            'Seth MacFarlane',
            'Amanda Seyfried',
            'Jessica Barth',
            'Morgan Freeman',
            'Liam Neeson'
        );

        return $actors;
    }

    public function getTitle()
    {
        return 1;
    }

    public function getCast()
    {
        $actors = "
            'Mark Wahlberg',
            'Seth MacFarlane',
            'Amanda Seyfried',
            'Jessica Barth',
            'Morgan Freeman',
            'Liam Neeson'
        ";

        return $actors;
    }

    public function getRoles()
    {
        $actors = array(
            'John' => 'Mark Wahlberg',
            'Ted (voice)' => 'Seth MacFarlane',
            'Samantha' => 'Amanda Seyfried',
            'Tami-Lynn' => 'Jessica Barth',
            'Patrick Meighan' => 'Morgan Freeman',
            'Customer' => 'Liam Neeson'
        );

        return $actors;
    }

    public function getSubTitle()
    {
        return "tHunder buddies for life";
    }

    public function getFirstReleasedAddress()
    {
        return "Unit 5/Evolution/Hooters Hall Rd, Ore Cl, Newcastle, Staffordshire st59qf";
    }


}
