<?php

class Cardinals extends Bird
{
    protected $food = 'wild seeds and berries';
    protected $speak = 'chirping';
    /**
     * @var string
     */
    protected $name = 'Cardinals';

    /**
     * how do they fly
     * @return string
     */
    public function fly(): string
    {   
        return "from tree to tree";
    }

}