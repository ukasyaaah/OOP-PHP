<?php

namespace Data;

abstract class Animal
{
    public string $name;
    // abs funct gaboleh ada body nya (Dikosongin)
    abstract function run();
}

class Cat extends Animal
{
    // Siapapun yg jadi turunan class animal, maka wajib implementasi function abstract nya
    function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}
