<?php 

class Bird extends Animal
{
    /**
     * @var string
     */
    protected $name = 'Avian';

     /**
     * a short message about what the species is
     */
    public function species(): string
    {   
        $parentResult = parent::species();
        $fly = $this->fly();

        return $parentResult . " Examples of avians are Cardinals and Parrots." . $this->name . " fly" . " " . $fly . ".";
    }

     /**
     * a short message about what this animal likes to eat
     * 
     * @return string
     */
    public function fly(): string
    {   
        return "swiftly";
    }
}