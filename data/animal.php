<?php

namespace Data;

require_once 'data/food.php';

abstract class Animal
{
    public string $name;

    // abs funct gaboleh ada body nya (Dikosongin)
    abstract function run();

    abstract  public  function eat(AnimalFood $animalfood);
}

class Cat extends Animal
{
    // Siapapun yg jadi turunan class animal, maka wajib implementasi function abstract nya
    function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    function eat(Food $animalfood) // ini adalah contravariance
    {

        echo "The cat eats" . PHP_EOL;
    }
}
