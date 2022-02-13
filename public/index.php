<?php

spl_autoload_register(function ($class) {
    require_once '../includes/classes/' . $class . '.php';
});

//animal general
$animal = new Animal();

//canine
$canine = new Canine();
$dog = new Dog();
$wolf = new Wolf();
var_dump($canine);
var_dump($canine->species());
var_dump($dog);
var_dump($dog->species());
var_dump($dog->eat());
var_dump($dog->drink());
var_dump($dog->speak());
var_dump($wolf);
var_dump($wolf->species());
var_dump($wolf->eat());
var_dump($wolf->drink());
var_dump($wolf->speak());


//feline
$feline = new Feline();
$houseCats = new HouseCats();
$lion = new Lion();
var_dump($feline);
var_dump($feline->species());
var_dump($houseCats);
var_dump($houseCats->species());
var_dump($houseCats->eat());
var_dump($houseCats->drink());
var_dump($houseCats->speak());
var_dump($lion);
var_dump($lion->species());
var_dump($lion->eat());
var_dump($lion->drink());
var_dump($lion->speak());



//bird
$bird = new Bird();
$cardinal = new Cardinals();
$parrot = new Parrot();
var_dump($bird);
var_dump($bird->species());
var_dump($cardinal);
var_dump($cardinal->species());
var_dump($cardinal->eat());
var_dump($cardinal->drink());
var_dump($cardinal->speak());
var_dump($parrot);
var_dump($parrot->species());
var_dump($parrot->eat());
var_dump($parrot->drink());
var_dump($parrot->speak());



die;