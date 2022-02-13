<?php

class Wolf extends Canine
{   
    protected $food = 'what they can catch';
    protected $speak = 'howling';
    
    /**
     * @var string
     */
    protected $name = 'Wolf';

     /**
     * what do wolfs eat
     * @return string
     */
    public function run(): string
    {   
        return "fast to catch prey";
    }
}