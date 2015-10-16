<?php

namespace HelloWorld;

class Person implements Named
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function changeNameTo($name)
    {
        $this->name = $name;
    }
}
