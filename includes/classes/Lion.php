<?php

class Lion extends Feline
{   
    protected $food = 'the safari menu';
    protected $speak = 'loud roaring';   
    /**
     * @var string
     */
    protected $name = 'Lion';

     /**
     * how do cats run
     * @return string
     */
    public function run(): string
    {   
        return "fast to hunt prey";
    }
}