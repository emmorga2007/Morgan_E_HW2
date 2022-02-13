<?php

class HouseCats extends Feline
{
    protected $food = 'canned cat food and fish';
    protected $speak = 'meowing';    
    /**
     * @var string
     */
    protected $name = 'Cats';

    /**
     * how do cats run
     * @return string
     */
    public function run(): string
    {   
        return "quietly to surprise owners";
    }

}