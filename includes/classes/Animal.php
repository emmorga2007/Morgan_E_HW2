<?php

class Animal
{
    /**
     * @var string
     */
    protected $name = 'animal';
    protected $food = 'food';
    protected $drink = 'water';
    protected $speak = 'sound';

    /**
     * a short message about what species your anmal is 
     * 
     * @return string
     */
    public function species(): string
    {   
        return "Your animal species is " . $this->name . "! ";
    }

    /**
     * what the animal eats
     * 
     * @return string
     */
    public function eat(): string
    {   
        return "They like to eat " . $this->food;
    }


    /**
     * what the animal drinks 
     * 
     * @return string
     */
    public function drink(): string
    {   
        return "They drink " . $this->drink;
    }

    /**
     * what noise they make
     * 
     * @return string
     */
    public function speak(): string
    {   
        return "They make a " . $this->speak . " noise.";
    }



}