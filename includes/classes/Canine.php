<?php 

class Canine extends Animal
{
    /**
     * @var string
     */
    protected $name = 'Canine';
    protected $food = 'meat';
    protected $drink = 'water';
    protected $speak = 'braking';

    /**
     * a short message about what the species is
     */
    public function species(): string
    {   
        $parentResult = parent::species();
        $run = $this->run();

        return $parentResult . "Examples of canines are dogs and wolfs. They run" . " " . $run . ".";
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
     * a short message about what this animal likes to eat
     * 
     * @return string
     */
    public function run(): string
    {   
        return "fast";
    }



}