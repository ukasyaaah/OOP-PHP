<?php

namespace Data;

trait sayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye";
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun 
{
    abstract function run(): void;
}

trait All {
     use sayGoodBye, HasName, CanRun {
        goodBye as protected;
    }
}
class Person 
{
    use All;

   
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    function goodBye( ): void
    {
        // $this->name = $name;
        echo "Goodbye in $this->name" . PHP_EOL;
    }
}
