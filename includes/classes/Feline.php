<?php 

class Feline extends Animal
{
    /**
     * @var string
     */
    protected $name = 'Feline';

     /**
     * a short message about what the species is
     */
    public function species(): string
    {   
        $parentResult = parent::species();
        $run = $this->run();

        return $parentResult . " Examples of Felines are lions, jaguars, and house cats. They run" . " " . $run . ".";
    }

     /**
     * a short message about how this animal runs
     * 
     * @return string
     */
    public function run(): string
    {   
        return "quietly";
    }
}