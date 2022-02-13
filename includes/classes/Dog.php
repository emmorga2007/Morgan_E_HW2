<?php

class Dog extends Canine
{
    /**
     * @var string
     */
    protected $name = 'Dog';

    /**
     * what do dogs eat
     * @return string
     */
    public function run(): string
    {   
        return "for fun or to play";
    }

}