<?php

class Developer
{
    public string $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

class BackendDeveloper extends Developer {}
class FrontendDeveloper extends Developer {}

class Company
{
    public Developer $developer;
}

// Funct Argument Polymorphism
function sayHelloProgrammer(Developer $dev)
{
    if ($dev instanceof FrontendDeveloper) {
        echo "Hello Frontend Dev $dev->name" . PHP_EOL;
    } else if ($dev instanceof BackendDeveloper) {
        echo "Hello Backend Dev $dev->name" . PHP_EOL;

        // Utk class parent, taruh paling bawah
    } elseif ($dev instanceof Developer) {
        echo "Hello Dev $dev->name" . PHP_EOL;
    }
}
