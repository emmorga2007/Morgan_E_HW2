<?php

class Parrot extends Bird
{
    protected $food = 'bird seed';
    protected $speak = 'mock human';

    /**
     * @var string
     */
    protected $name = 'Parrots';

    /**
     * what do dogs eat
     * @return string
     */
    public function fly(): string
    {   
        return "around grandmas living room";
    }

}